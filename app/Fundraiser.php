<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Fundraiser
 *
 * @package Booster
 */
class Fundraiser extends Model
{
  use SoftDeletes;

  /**
   * Date attributes.
   *
   * @var array
   */
  protected $dates = ['deleted_at'];

  protected $fillable = [
    'name',
    'user_id',
  ];

  public function reviews()
  {
    return $this->hasMany('App\Review');
  }

  public function rating()
  {
    return $this->reviews()->avg('rating');
  }

  public function getAllWithRatings() {
    return $this->newBaseQueryBuilder()->select('fundraisers.id', 'fundraisers.name',
      DB::raw('round(avg(reviews.rating),2) as rating'), DB::raw('count(reviews.rating) as rating_count'))
      ->join('reviews', 'reviews.fundraiser_id', '=', 'fundraisers.id')
      ->groupBy('fundraisers.id')
      ->groupBy('fundraisers.name')
      ->orderBy('rating', 'desc')
      ->orderBy('fundraisers.id', 'asc')
      ->get();
  }

  public function getAllWithUserRatings($user_id) {
    return $this->newBaseQueryBuilder()->select('select `fundraisers`.`id`, `fundraisers`.`name`, round(avg(r1.rating),2) as rating, `r2`.`rating` as user_rating, `r2`.`review` as user_review 
from `fundraisers` 
left outer join `reviews` as `r1` on `r1`.`fundraiser_id` = `fundraisers`.`id` 
left outer join `reviews` as `r2` on `r2`.`fundraiser_id` = `fundraisers`.`id` and `r2`.`user_id` = ? 
group by `fundraisers`.`id`, `fundraisers`.`name` 
order by `rating` desc, `fundraisers`.`id` asc', [$user_id]);
  }

}

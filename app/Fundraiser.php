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

}

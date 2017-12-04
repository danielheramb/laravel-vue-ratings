<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
      'rating',
      'review',
      'user_id',
      'fundraiser_id',
    ];

    public function fundraiser()
    {
      return $this->belongsTo('App\Fundraiser');
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

}

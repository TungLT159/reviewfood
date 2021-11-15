<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'ratings';
    protected $guarded = [''];

    public function getUserRating(){
        return $this->belongsTo(User::class,'ra_user_id','id');
    }
    public function getStoreRating(){
        return $this->belongsTo(Store::class,'ra_store_id','id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    public $timestamps = false;
    protected $table = 'prefectures';


    public function posts(){
      return $this->hasMany('App\Post');
    }
}

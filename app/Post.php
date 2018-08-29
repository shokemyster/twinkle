<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title',
      'slug',
      'city',
      'tags',
      'season',
      'persons',
      'prefecture_id',
      'type_id',
      'category_id',
      'featured_image',
      'teaser',
      'message',
      'address',
      'nearest_station',
      'open_hours',
      'holiday',
      'website',
      'airport',
      'language',
      'temparature',
      'manner',
      'sunrise',
      'restrooms',
      'coupon',
      'gmaps',
      'events',
      'image_photo1',
      'image_photo2',
      'image_food1',
      'image_food2',
      'image_food3',
      'image_food4',
      'image_food5',
      'image_souvenier1',
      'image_souvenier2',
      'image_souvenier3',
      'image_photo1_caption',
      'image_photo2_caption',
      'image_food1_caption',
      'image_food2_caption',
      'image_food3_caption',
      'image_food4_caption',
      'image_food5_caption',
      'image_souvenier1_caption',
      'image_souvenier2_caption',
      'image_souvenier3_caption',
    ];
    
    public function user(){
      return $this->belongsTo('App\User');
    }

    public function tags(){
      return $this->belongsToMany(Tag::class);
    }

    public function prefecture(){
      return $this->belongsTo('App\Prefecture', 'prefecture_id');
    }

    public function type(){
      return $this->belongsTo('App\Type', 'type_id');
    }

    public function category(){
      return $this->belongsTo('App\Category', 'category_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
     protected $fillable = ['intro','title','featured_image','paragraph1','paragraph2','category','publish_at','author'];
}

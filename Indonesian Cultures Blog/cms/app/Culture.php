<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Culture extends Model
{
     protected $fillable = [
          'intro',
          'title',
          'featured_image',
          'paragraph1',
          'paragraph2',
          'category',
          'user_id'
     ];

     public function getCreatedAtAtribute()
     {
          $format_date = \Carbon\Carbon::parse($this->attributes['created_at'])->isoFormat('dddd, D MMMM Y HH:mm');
          return $format_date;
     }
     public function getUpdatedAtAtribute()
     {
          $format_date = \Carbon\Carbon::parse($this->attributes['updated_at'])->isoFormat('dddd, D MMMM Y HH:mm');
          return $format_date;
     }
}

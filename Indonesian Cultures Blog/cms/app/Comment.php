<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['comment_text', 'user_id', 'culture_id'];

    public function cultures()
    {
        return $this->belongsTo(Culture::class);
    }
    public function getCountComment()
    {
        $culture = \App\Culture::all();
        $countComment = \App\Comment::where('culture_id', '=', '$culture.id')->count();
        return $countComment;
    }
}

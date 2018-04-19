<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Stevebauman\Purify\Purify;

class Article extends Model
{
    protected $guarded = [];
    protected $with = ['author'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getContentAttribute($content) {
        return \Purify::clean($content);
    }
}

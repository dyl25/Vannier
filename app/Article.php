<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    protected $with = ['author'];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}

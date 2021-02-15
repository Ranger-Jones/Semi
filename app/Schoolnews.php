<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schoolnews extends Model
{
    protected $fillable = [
        'title', 'content', 'images', 'author', 'topic'
    ];
}

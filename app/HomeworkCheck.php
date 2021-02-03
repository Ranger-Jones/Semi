<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeworkCheck extends Model
{
    protected $fillable = [
        'homework_id'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}

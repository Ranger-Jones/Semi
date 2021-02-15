<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeworkCheck extends Model
{
    protected $fillable = [
        'homework_id'
    ];

    protected $dates = ['created_at'];


    public function user(){
        return $this->belongsTo('App\User');
    }
}

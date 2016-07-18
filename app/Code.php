<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = "codes";

    protected $fillable = [
        'lenguaje','user_id',
    ];

    /*public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }*/
}

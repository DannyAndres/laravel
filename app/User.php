<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'username', 'name', 'score','email',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function codes()
    {
        return $this->hasOne(Score::Code);
    }
}

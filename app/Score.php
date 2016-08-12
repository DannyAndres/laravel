<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Score extends Authenticatable
{
    protected $fillable = [
        'username', 'name', 'score','email',
    ];

    protected $hidden = [
        'remember_token',
    ];

    public function code()
    {
        return $this->hasOne(Code::class);
    }
}

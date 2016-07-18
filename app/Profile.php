<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = "profiles";

    protected $fillable = [
        'user_id','name',
    ];

    public function users()
    {
        return $this->hasOne('App\User');
    }
}

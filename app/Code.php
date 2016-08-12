<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = "codes";

    protected $fillable = [
        'url','stars','code','lang',
    ];

    public function score()
    {
        return $this->belongsTo(App\Score::class);
    }
}

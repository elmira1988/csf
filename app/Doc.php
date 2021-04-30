<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doc extends Model
{
    protected $table = 'docs';

    protected $fillable = ['name','url','info'];

    protected $casts = [
        'info' => 'array',
    ];

}

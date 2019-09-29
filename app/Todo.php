<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Laravel\Passport\HasApiTokens;


class Todo extends Model
{
    // use HasApiTokens;

    protected $fillable = ['description', 'user_id'];

    protected $attributes = [
        'status' => 'pending',
    ];
}

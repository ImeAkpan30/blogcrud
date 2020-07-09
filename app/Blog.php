<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = "blogs";
    protected $fillable = ['name', 'title', 'body'];
}

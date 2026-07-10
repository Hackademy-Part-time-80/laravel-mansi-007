<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //protected $table = 'libri';

    protected $fillable = ['name', 'pages', 'year', 'author', 'image'];
}

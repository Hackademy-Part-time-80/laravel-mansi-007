<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //protected $table = 'libri';

    protected $fillable = ['name', 'pages', 'year', 'author_id', 'image'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}

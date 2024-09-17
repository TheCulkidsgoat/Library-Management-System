<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'genre',
        'publication_date'
    ];

    public function authors()
{
    return $this->belongsToMany(Author::class);
}

public function borrows() {
    return $this->hasMany(Borrow::class);
}


}

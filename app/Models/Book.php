<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $guarded = ['id'];

    public function borrows()
    {
        return $this->hasMany(Borrow::class, 'book_id');
    }
}

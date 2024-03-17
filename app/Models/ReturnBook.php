<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnBook extends Model
{
    use HasFactory;

    protected $table = 'return_books';

    protected $guarded = ['id'];

    public function borrow()
    {
        return $this->belongsTo(Borrow::class, 'borrow_id');
    }
}

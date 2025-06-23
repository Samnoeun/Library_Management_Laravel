<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'library_id', 'category_id', 'published_at', 'status'];

    protected $hidden = ['created_at', 'updated_at'];


    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

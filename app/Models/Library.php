<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'location'];

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    protected $hidden = ['created_at', 'updated_at'];
}

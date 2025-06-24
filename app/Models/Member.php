<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function library()
    {
        return $this->belongsTo(Library::class);
    }

    public function borrows()
    {
        return $this->hasMany(Borrow::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}

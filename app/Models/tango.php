<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tango extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'genre', 'description', 'description', 'cover_image', 'progress', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


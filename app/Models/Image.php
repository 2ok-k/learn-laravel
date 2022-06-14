<?php

namespace App\Models;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    //Une image appartient à un seul post
    public function post(){
        return $this->belongsTo(Post::class);
    }

    public function artist(){
        return $this->hasOne(Artist::class);
    }
}

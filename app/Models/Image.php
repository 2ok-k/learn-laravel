<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //Une image appartient à un seul post
    public function post(){
        return $this->belongsTo(Post::class);
    }
}

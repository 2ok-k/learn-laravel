<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','content'];//Je veux que tu remplisses "title" et "content" quand je te le demande

    //protected $primaryKey = 'post_id';//Rédefinir le id s'il yavait pas d'ID
}

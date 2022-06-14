<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Image;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title','content'];//Je veux que tu remplisses "title" et "content" quand je te le demande

    //Nous avons un post qui detient plusieurs commentaires
    /*public function comments(){
        return $this->hasMany(Comment::class);
    }*/

    //Un post peut avoir une et une seule image
    public function image(){
        return $this->hasOne(Image::class);
    }

    //Un post peut avoir plusieurs tags
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relation polymorphique
    public function comments(){
        return $this->morphMany(Comment::class,'commentable');
    }
}

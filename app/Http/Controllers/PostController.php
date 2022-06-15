<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Video;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index(){

        $posts = Post::all();
        //$video = Video::find(1);
        //$posts = Post::orderBy('title')->get();
        return view('articles',compact('posts'));
        //return view('articles')->with('title',$title);
    }

    public function show($id){
        $post = Post::findOrFail($id);
        //$post = Post::where('title' , 'Et harum sed et voluptas.')->firstOrFail();
        
        return view('article',['post' => $post]);
    }

    public function create(){
        return view('form');
    }

    public function store(Request $request){

        Storage::disk('local')->put('avatars', $request->file('avatar'));

        die();
        $request -> validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/create');
    }

    public function contact(){
        return view('contact');
    }

    /*public function register(){
        $post = Post::find(11);
        $video = Video::find(1);

        $comment1 = new Comment(['content' => 'Mon premier commentaire']);
        $comment2 = new Comment(['content' => 'Mon deuxième commentaire']);
        $post ->comments()->saveMany([
            $comment1,
            $comment2
        ]);

        $comment3 = new Comment(['content' => 'Mon troisième commentaire']);
        $video ->comments()->save($comment3);
    }*/
}

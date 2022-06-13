<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        //$posts = Post::all();
        $posts = Post::orderBy('title')->get();
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
        /*$post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();*/
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        return redirect('/create');
    }

    public function contact(){
        return view('contact');
    }
}

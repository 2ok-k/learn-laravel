@extends('layouts.app')


@section('content')
    <h1>Liste des articles</h1>
    @if ($posts->count() > 0)
        @foreach ($posts as $post)
            <div class="container">
                <div class="well">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Receta 1</h4>
                        <p class="text-right">By Francisco</p>
                        <p>
                            <h3><a href="{{ route('posts.show',['id' => $post->id])}}">{{ $post -> title}}</a></h3>
                        </p>
                        <ul class="list-inline list-unstyled">
                            <li>
                                <span><i class="glyphicon glyphicon-calendar"></i> {{ $post -> created_at}} </span>
                            </li>
                            <li>|</li>
                                <span><i class="glyphicon glyphicon-comment"></i> 2 comments</span>
                            <li>|</li>
                            <li>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star"></span>
                                <span class="glyphicon glyphicon-star-empty"></span>
                            </li>
                            <li>|</li>
                            <li>
                                <span><i class="fa fa-facebook-square"></i></span>
                                <span><i class="fa fa-twitter-square"></i></span>
                                <span><i class="fa fa-google-plus-square"></i></span>
                            </li>
                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <span>
            Aucun post dans la base de données
        </span>
    @endif
@endsection

@extends('layouts.app')

@section('content')
    <h1>{{  $post -> content }}</h1>
    <span>{{ $post -> image ? $post -> image -> path : "pas d'image" }}</span>
    <div style="border-top: 1px solid #000;width : 700px;"></div>
    {{--@foreach ($post -> comments as $comment) 
        <h4 style="margin-left: 10%">{{ $comment -> content }}</h4>
    @endforeach--}}
    @forelse ($post -> comments as $comment) 
        <h4 style="margin-left: 10%">{{ $comment -> content}}</h4>
    @empty
        <h4 style="margin-left: 10%">Aucun commentaire pour ce post.</h4>
    @endforelse
@endsection
    

@extends('layouts.app')

@section('content')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="text-danger">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" placeholder="title" name="title">
            </div>
            <div class="form-group col-md-6">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="3" name="content"></textarea>
            </div>
        </div>
        <label for="myfile">Select a file:</label>
        <input type="file" id="myfile" name="avatar"><br>
        <!--<div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        -->
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection
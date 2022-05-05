@extends('layout')

@section('title', 'Posts')

@section('content')
    <div class="text-center">
        <h1> Edit Post </h1> <br>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <input placeholder="Title" class="form-control" type="text" name="title" id="title" value="{{ $post->title }}"> <br>
            <textarea placeholder="Content" class="form-control" type="text" name="content" rows="6" id="content">{{ $post->content }}</textarea> <br>
            <input class="btn btn-primary" type="submit" value="Edit post">
        </form>
    </div>
@endsection
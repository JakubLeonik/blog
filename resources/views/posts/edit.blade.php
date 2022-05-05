@extends('layouts.layout')

@section('title', $post['title']." - edit")

@section('content')
    <div class="text-center">
        <h1> Edit Post </h1> <br>
        <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('PUT')
            <input placeholder="Title" class="form-control" type="text" name="title" id="title" value="{{ $post->title }}" required autofocus> <br>
            <textarea placeholder="Content" class="form-control" type="text" name="content" rows="6" id="content" required>{{ $post->content }}</textarea> <br>
            <input class="btn btn-primary" type="submit" value="Edit post">
        </form>
    </div>
@endsection
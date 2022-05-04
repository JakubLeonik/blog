@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1> Edit Post </h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        Title: <input type="text" name="title" id="title" value="{{ $post->title }}"> <br>
        Content: <input type="text" name="content" id="content" value="{{ $post->content }}"> <br>
        Author: <input type="text" name="author" id="author" value="{{ $post->author }}"> <br>
        <input type="submit" value="Update">
    </form>
@endsection
@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1> {{ $post['title'] }} </h1>
    <hr>
    Content: {{ $post['content'] }}
    <hr>
    <a href="{{ route('posts.index') }}">Come back</a>
    <a href="{{ route('posts.edit', $post->id) }}">[Edit]</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
    </form>
@endsection
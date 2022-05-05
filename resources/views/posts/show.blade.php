@extends('layout')

@section('title', 'Posts')

@section('content')
    <div class="post p-3 my-3">
        <h2 class="text-center">
            {{ $post['title'] }}
        </h2>
        <hr>
        <pre style="white-space: pre-wrap;">
            {{ $post['content'] }}
        </pre>
        <hr>
        <div class="text-end px-3">Author: {{ $post['author'] }}</div>
    </div>
    <a href="{{ route('posts.index') }}">Come back</a> <br>
    <a href="{{ route('posts.edit', $post->id) }}">[Edit]</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="DELETE">
    </form>
@endsection
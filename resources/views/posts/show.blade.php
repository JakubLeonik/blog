@extends('layouts.layout')

@section('title', $post->title)

@section('content')
    <div class="post p-3 my-3">
        <h2 class="text-center">
            {{ $post->title }}
        </h2>
        <hr>
        <pre style="white-space: pre-wrap;">
            {{ $post->content }}
        </pre>
        <hr>
        <div class="text-end px-3">Author: {{ $post->user->name }}</div>
    </div>
    <div class="controls d-flex gap-3 justify-content-end">
        @can('update', $post)
            <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">Edit</a>
        @endcan
        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        @endcan
        <a class="btn btn-primary" href="{{ route('posts.index') }}">Come back</a> <br>
    </div>
@endsection
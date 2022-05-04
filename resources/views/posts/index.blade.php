@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1> Posts </h1>
    <a href="{{ route('posts.create') }}">[New Post]</a> 
    <hr>
    @foreach ($posts as $post)
        <a href="{{ route('posts.show', ['post' => $post['id']]) }}">{{ $post['title'] }}</a>
        <hr>
    @endforeach
@endsection
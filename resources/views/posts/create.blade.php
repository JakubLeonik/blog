@extends('layout')

@section('title', 'Posts')

@section('content')
    <h1> Create Post </h1>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        Title: <input type="text" name="title" id="title" value="{{ old('title') }}"> <br>
        Content: <input type="text" name="content" id="content" value="{{ old('content') }}"> <br>
        Author: <input type="text" name="author" id="author" value="{{ old('author') }}"> <br>
        <input type="submit" value="Create">
    </form>
@endsection
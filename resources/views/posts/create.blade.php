@extends('layout')

@section('title', 'Posts')

@section('content')
    <div class="text-center"><h1> Create Post </h1></div>
    <form action="{{ route('posts.store') }}" method="post" class="text-center p-3">
        @csrf
        Title: <input type="text" name="title" id="title" value="{{ old('title') }}"> <br>
        Content: <input type="text" name="content" id="content" value="{{ old('content') }}"> <br>
        Author: <input type="text" name="author" id="author" value="{{ old('author') }}"> <br>
        <input type="submit" value="Create">
    </form>
@endsection
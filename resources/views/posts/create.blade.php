@extends('layouts.layout')

@section('title', 'Posts')

@section('content')
    <div class="text-center">
        <h1> Create Post </h1>
        <form action="{{ route('posts.store') }}" method="post" class="text-center p-3">
            @csrf
            <input placeholder="Title" class="form-control" type="text" name="title" id="title" value="{{ old('title') }}"> <br>
            <textarea placeholder="Content" class="form-control" type="text" name="content" rows="6" id="content">{{ old('content') }}</textarea> <br>
            <input class="btn btn-primary" type="submit" value="Create post">
        </form>
    </div>
@endsection
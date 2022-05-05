@extends('layout')

@section('title', 'Posts')

@section('content')
    <div class="text-center"><h1> Posts </h1></div>
    <hr>
    @foreach ($posts as $post)
        <div class="post border border-dark p-3 my-3">
            <h2 class="text-center">
                {{ $post['title'] }}
            </h2>
            <hr>
            <pre style="white-space: pre-wrap;">
                {{ substr($post['content'], 0, 700) }}...
            </pre>
            <hr>
            <a class="text-decoration-none" href="{{ route('posts.show', ['post' => $post['id']]) }}">
                <div class="text-end px-3">Read more =></div>
            </a>
        </div>
    @endforeach
@endsection
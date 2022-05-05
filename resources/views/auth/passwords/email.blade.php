@extends('layouts.layout')

@section('title', 'Reset password')

@section('content')
<div class="container text-center">
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <form class="col-12 col-md-7 mx-auto" method="POST" action="{{ route('password.email') }}">
        @csrf
        <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <br>
        <button type="submit" class="btn btn-primary">
            Send Password Reset Link
        </button>
    </form>
</div>
@endsection

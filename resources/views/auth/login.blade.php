@extends('layouts.layout')

@section('title', 'Login page')

@section('content')
<div class="container text-center">
    <form class="col-12 col-md-7 mx-auto" method="POST" action="{{ route('login') }}">
        @csrf
        <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> <br>
        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="current-password"> <br>
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
            Remember Me
        </label> <br> <br>
        <a class="btn btn-link" href="{{ route('password.request') }}">
            Forgot Your Password?
        </a> <br> <br>
        <button type="submit" class="btn btn-primary">
            Login
        </button>
    </form>
</div>
@endsection

@extends('layouts.layout')

@section('title', 'Reset password')

@section('content')
<div class="container text-center">
    <form class="col-12 col-md-7 mx-auto" method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus> <br>
        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="new-password"> <br>
        <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> <br>
        <button type="submit" class="btn btn-primary">
            Reset Password
        </button>
    </form>
</div>
@endsection

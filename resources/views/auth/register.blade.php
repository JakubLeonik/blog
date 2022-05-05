@extends('layouts.layout')

@section('title', 'Registration')

@section('content')
<div class="container text-center">
    <form class="col-12 col-md-7 mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
        <input placeholder="Name" id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> <br>
        <input placeholder="Email" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email"> <br>
        <input placeholder="Password" id="password" type="password" class="form-control" name="password" required autocomplete="new-password"> <br>
        <input placeholder="Confirm password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"> <br>
        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
@endsection

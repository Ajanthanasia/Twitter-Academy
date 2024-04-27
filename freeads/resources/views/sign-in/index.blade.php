@extends('layout')
@section('content')

<div class="title"><span>Login Form</span></div>
<form action="{{route('sign-in.user')}}" method="post">
    @csrf
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="Email or Phone" required>
    </div>
    <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
    </div>

    <div class="row button">
        <input type="submit" value="Login">
    </div>
    <div class="signup-link">Not a member? <a href="{{route('sign-up')}}">SignUp Now</a></div>
</form>

@endsection
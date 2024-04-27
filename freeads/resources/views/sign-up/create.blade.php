@extends('layout')
@section('content')
<div class="title"><span>Register Form</span></div>
<form action="{{route('sign-up.store')}}" method="post">
    @csrf
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="name" placeholder="Enter Name" required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="email" placeholder="Email or Phone" required>
    </div>
    <div class="row">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required>
    </div>

    <div class="row button">
        <input type="submit" value="Register">
    </div>
    <div class="signup-link">Not a member? <a href="{{route('sign-in')}}">SignIn</a></div>
</form>

{{-- <div class="row">
    <div class="col-md-12">
        <form action="{{ route('sign-up.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Password</label>
                    <input type="text" name="password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success form-control">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div> --}}
@endsection

@extends('layout')
@section('content')
    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('sign-in') }}">
                <button class="btn btn-success form-control">Sign In</button>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ route('sign-up') }}">
                <button class="btn btn-info form-control">Sign Up</button>
            </a>
        </div>
    </div>
     

@endsection

@extends('dash.layout')
@section('dash')
    <div>
        <span>Hi, {{ Auth::user()->name }}</span>
    </div>
    <div>
        <label for="">Welcome to Login</label>
    </div>
@endsection

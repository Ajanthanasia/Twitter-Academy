@extends('layout')
@section('content')
    <style>
        .rightside {
             margin-left: 250px;
            width: 500px;
            padding: 10px;
        }
    </style>
    <div class="row">
        <div class="sidebar">
            @include('dash.side-bar')
        </div>
        <div class="rightside">
            <br>
            @yield('dash')
        </div>
    </div>
@endsection

@extends('layout')
@section('content')
    <style>
        .leftside-bar {
            width: 150px;
            border: 1px grey solid;
            border-radius: 10px;
            padding: 10px;
            float: left;
        }

        .rightside {
            float: left;
            width: 500px;
            padding: 10px;
        }
    </style>
    <div class="container">
        <div class="wrapper">
            <div class="card">
                <h3>Free ads Dashboard</h3>
            </div>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="leftside-bar">
            @include('dash.side-bar')
        </div>
        <div class="rightside">
            <br>
            @yield('dash')
        </div>
    </div>
@endsection

@extends('dash.layout')
@section('dash')
    <form action="{{ route('user.update') }}" method="post">
        @csrf
        <div>
            <label for="">Name</label>
            <input type="text" name="name" value="{{ Auth::user()->name }}">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email" value="{{ Auth::user()->email }}">
        </div>
        <div>
            <button type="submit"> Update</button>
        </div>
    </form>
@endsection

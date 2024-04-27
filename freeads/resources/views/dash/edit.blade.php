@extends('dash.layout')
@section('dash')
<form action="{{ route('user.update') }}" method="post">
    @csrf
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="name" value="{{ Auth::user()->name }}" required>
    </div>
   
    <div class="row"> 
        <i class="fas fa-user"></i>
        <input type="text" name="email" value="{{ Auth::user()->email }}" required>
    </div>
    
    <div class="row button">
        <input type="submit" value="Update">
    </div>
    
</form>
@endsection
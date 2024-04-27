@extends('dash.layout')
@section('dash')
<form action="{{ route('ad.add.store') }}" method="post">
    @csrf
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="title" placeholder="Enter the title" required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="description" placeholder="Enter the Description" required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="decimal" name="price" placeholder="Enter the Price" required>
    </div>
    <div class="row button">
        <input type="submit" value="Create Ad">
    </div>
    
</form>
@endsection
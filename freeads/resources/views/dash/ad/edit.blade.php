@extends('dash.layout')
@section('dash')
<form action="{{ route('ad.all.update') }}" method="post">
    @csrf
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="title" value="{{ $ad->title }}" required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="text" name="description" value="{{ $ad->description }}" required>
    </div>
    <div class="row">
        <i class="fas fa-user"></i>
        <input type="decimal" name="price" value="{{ $ad->price }}" required>
    </div>
    <div class="row button">
    <input type="hidden" name="ad_id" value="{{ $ad->id }}">
        <input type="submit" value="Update">
    </div>
    
</form>

<hr>
<form action="{{ route('ad.photo.upload') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="">Photo Upload</label>
    <div class="row button">
    <input type="file" name="photo" id="photo"></div>
    <input type="hidden" name="ad_id" value="{{ $ad->id }}">
    <div class="row button">
    <input type="submit" value="Upload">
    </div>
</form>
@endsection
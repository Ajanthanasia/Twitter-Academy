@extends('dash.layout')
@section('dash')
    @foreach ($ads as $ad)
        <div class="ad-container">
            <div>Title : <span>{{ $ad->title }}</span></div>
            <div>Description : <span>{{ $ad->description }}</span></div>
            <div>Price : <span> EURO {{ $ad->price }} /=</span></div>
        </div>
        <a href="{{ route('ad.all.edit', ['ad_id' => $ad->id]) }}">
        <div class="row button">
        <input type="submit" value="Edit">
    </div>
        </a>
        <a href="{{ route('ad.all.destroy', ['ad_id' => $ad->id]) }}">
        <div class="row button" >
        <input type="submit" value="Delete">
    </div>
        </a>
        <br>
        <br>
    @endforeach
@endsection

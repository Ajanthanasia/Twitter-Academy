@extends('dash.layout')
@section('dash')
    @foreach ($ads as $ad)
        <div>
            <div>Title : <span>{{ $ad->title }}</span></div>
            <div>Description : <span>{{ $ad->description }}</span></div>
            <div>Price : <span> Rs.{{ $ad->price }} /=</span></div>
        </div>
        <a href="{{ route('ad.all.edit', ['ad_id' => $ad->id]) }}">
            <button>Edit</button>
        </a>
        <a href="{{ route('ad.all.destroy', ['ad_id' => $ad->id]) }}">
            <button>Delete</button>
        </a>
        <br>
        <br>
    @endforeach
@endsection

@extends('dash.layout')
@section('dash')
    <div class="search-container">
        <div>Search</div>
        <form action="{{ route('search.index') }}" method="get">
            @csrf
            <div>
                <input type="text" name="src" @if ($src) value="{{ $src }}" @endif>
                <button type="submit" class="search">Search</button>
            </div>
        </form>
    </div>
    @foreach ($ads as $ad)
        <div class="ad-container">
            <div>Title : <span>{{ $ad->title }}</span></div>
            <div>Description : <span>{{ $ad->description }}</span></div>
            <div>Price : <span> Rs.{{ $ad->price }} /=</span></div>
            <div>Creator : {{ $ad->user->name ?? 'Nobody' }}</div>
        </div>
        <br>
    @endforeach
@endsection

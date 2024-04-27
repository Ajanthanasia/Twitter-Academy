@extends('dash.layout')
@section('dash')
    <form action="{{ route('ad.add.store') }}" method="post">
        @csrf
        <div>
            <label for="">Title</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label for="">Description</label>
            <input type="text" name="description" required>
        </div>
        <div>
            <label for="">Price</label>
            <input type="decimal" name="price" required>
        </div>
        <div>
            <button type="submit">Create Ad</button>
        </div>
    </form>
@endsection

@extends('layout.master')

@section('content')
<form action="{{ url('admin/'.$update->id) }}" method="get">
    @csrf
    <div>
        <label>movie_url: </label>
        <input type="text" name="url" value="{{ $update->movie_url }}">
    </div>

    <div>
        <label>movie_name: </label>
        <input type="text" name="name" value="{{ $update->movie_name }}">
    </div>

    <div>
        <label>movie_description: </label>
        <input type="text" name="description" value="{{ $update->movie_description }}">
    </div>

    <div>
        <label>movie_gener: </label>
        <input type="text" name="gener" value="{{ $update->movie_gener }}">
    </div>

    <div>
        <input type="submit" name="submit">
    </div>
</form>
@endsection

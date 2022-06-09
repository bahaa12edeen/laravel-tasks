@extends('layout.master')

@section('content')
<form action="{{ url('added') }}" method="get">
    @csrf
    <div>
        <label>movie_url: </label>
        <input type="text" name="url">
    </div>

    <div>
        <label>movie_name: </label>
        <input type="text" name="name">
    </div>

    <div>
        <label>movie_description: </label>
        <input type="text" name="description">
    </div>

    <div>
        <label>movie_gener: </label>
        <input type="text" name="gener">
    </div>

    <div>
        <input type="submit" name="submit">
    </div>
</form>
@endsection

@extends('layout.master')
@section('content')
    <div class="body" style="min-height: 82vh;">
        <div style="margin: 20px 20px">
            <a href="{{ url('add') }}">
                <button type="button" class="btn btn-primary">Add Product</button>
            </a>
        </div>
        @foreach ($data as $item)
            <div class="card" style="width: 18rem; display: inline-block; margin: 20px 20px 0;">
                <img src="{{ $item->candy_image }}" style="max-height: 150px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->candy_name }}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end" style="margin: 10px">
                    <a href="{{ url('update/id/' . $item->id) }}">
                        <button class="btn btn-primary me-md-2 btn-success" type="button">Update</button>
                    </a>
                    <a href="{{ url('delete/id/' . $item->id) }}">
                        <button class="btn btn-primary btn-danger" type="button">Delete</button>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

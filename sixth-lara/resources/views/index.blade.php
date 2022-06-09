@extends('layout.master')

@section('title', 'home')

@section('content')

   <div class="container">
       
    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
        @foreach ($data as $item )

        <div class="col" >
            <div class="card" style="width: 16rem;"  >
<iframe width="255" height="250" src="{{ $item->movie_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="card-body">
                     <h5 class="card-title">{{ $item->movie_name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

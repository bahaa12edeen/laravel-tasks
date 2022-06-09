@extends( 'layout.master')

@section('title', 'candy')

@section('content')
    <div class="body">
        @for($i=0; $i < count($name); $i++)
            <div>
                <img height="200px" src="{{ $img[($i+1)] }}" alt="">
                <h2>{{ $name[($i+1)] }}</h2>
            </div>
        @endfor
    </div>
@endsection
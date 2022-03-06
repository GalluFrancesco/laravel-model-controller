


@section('mainContent')

    @foreach($data as $movie)
        
        <!-- <div>titolo: {{ $movie->title}}</div> -->
        @include('partials.cardmovie')
    @endforeach
@endsection
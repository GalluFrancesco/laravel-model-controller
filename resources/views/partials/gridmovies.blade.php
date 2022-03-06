


@section('mainContent')
    <div class="row">
        @foreach($data as $movie)
            
            <!-- <div>titolo: {{ $movie->title}}</div> -->
            <div class="col-3 my-2">
                @include('partials.cardmovie')
            </div>
        @endforeach
    </div>
@endsection
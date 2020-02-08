@extends('layouts.app')
@section('title', 'Listing')
@section('content')
    
    <div class="container"> 
        @if(count($listings) > 0 )
        <div class="row">     
            @foreach($listings as $listing)
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="view overlay zoom rounded">
                            <img src="{{ asset('img/listing') }}/{{ $listing['image'] }}" class="img-fluid" alt="smaple image">
                        </div>
                        <a href="{{ route('app.listing', ['id' => $listing['id']] )}}">
                            <div class="card-body article-content">
                                <h4 class="card-title">{{ $listing["title"] }}</h4>
                                <p class="card-text">{{ $listing["description"] }}</p>
                            </div>
                            <div class="card-footer">
                                {{ $listing["location"] }}
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach   
        </div>
        @else
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Sorry,</strong> no data found.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        @endif 
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $listings->links() }}
            </div>
        </div>
    </div>

<!-- <script>
    $(document).ready(function(){
        $(".page-link").text("Hello world!");
    });
</script> -->

@endsection
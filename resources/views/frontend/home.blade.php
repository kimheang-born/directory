@extends('layouts.app')
@section('title', 'Home')
@section('content')

    
    <div class="container">
        <div class="row">
            @for($i=1; $i<=4; $i++)
            <div class="col-lg-3">
                <a href="#">
                    <div class="card mb-3">
                        <div class="view overlay zoom">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/6-col/img%20(131).jpg" class="img-fluid " alt="smaple image">
                        </div>
                        <div class="card-body article-content">
                            <h4 class="card-title">Best deal For the Cars</h4>
                            <p class="card-text">Some quick example text to build on the card titl</p>
                        </div>
                        <div class="card-footer">
                            N/A
                        </div>
                    </div>
                </a>
            </div>
            @endfor
        </div>
    </div>

@endsection
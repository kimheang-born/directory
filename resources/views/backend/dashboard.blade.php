@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="greeting-title text-center mb-5">
                    <h3 class="text-capitalize">Welcome to dashboard, <b>{{ Auth::user()->name }}</b>!</h3>
                </div>
            </div>

            <!-- @if(count($errors) > 0)
                <div class="alert alert-danger">
                    Upload validation error<br><br>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->
            
            @if(\Session::has('success'))
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong><i class="far fa-check-circle"></i> Well done,</strong> {{ \Session::get('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif

            <div class="col-md-12">
                <div class="create-form d-flex justify-content-center mb-5">
                    <form method="POST" action="{{ route('create') }}" enctype="multipart/form-data" class="z-depth-2 rounded-lg">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter title" name="title">
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control @error('body') is-invalid @enderror" placeholder="Enter body" rows="5" id="body" name="body"></textarea>
                            @error('body')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="Image">Image</label>
                            <input type="text" class="form-control @error('image') is-invalid @enderror" id="Image" placeholder="Enter image" name="image">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <input type="file" name="image">
                        </div>            -->
                        <button type="submit" name="upload" class="btn btn-primary mx-0">
                            {{ __('Create') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
@endsection
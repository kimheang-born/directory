@extends('layouts.app')
@section('title', $model["title"])
@section('content')

<!-- <div class="container-fluid px-0">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/listing') }}/{{ $model['image'] }}" alt="{{ asset('img/listing') }}/{{ $model['image'] }}">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div> -->


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- <div class="classic-tabs">
                <ul class="nav tabs-cyan" id="myClassicTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link  waves-light active show" id="profile-tab-classic" data-toggle="tab" href="#profile-classic" role="tab" aria-controls="profile-classic" aria-selected="true">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light" id="follow-tab-classic" data-toggle="tab" href="#follow-classic" role="tab" aria-controls="follow-classic" aria-selected="false">Follow</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light" id="contact-tab-classic" data-toggle="tab" href="#contact-classic" role="tab" aria-controls="contact-classic" aria-selected="false">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link waves-light" id="awesome-tab-classic" data-toggle="tab" href="#awesome-classic" role="tab" aria-controls="awesome-classic" aria-selected="false">Be awesome</a>
                    </li>
                </ul>
                <div class="tab-content border-right border-bottom border-left rounded-bottom" id="myClassicTabContent">
                    <div class="tab-pane fade active show" id="profile-classic" role="tabpanel" aria-labelledby="profile-tab-classic">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                            sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                            consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                            dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                            incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                    <div class="tab-pane fade" id="follow-classic" role="tabpanel" aria-labelledby="follow-tab-classic">
                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut
                            aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
                            quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    </div>
                    <div class="tab-pane fade" id="contact-classic" role="tabpanel" aria-labelledby="contact-tab-classic">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                            deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                            provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
                            Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est
                            eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                            assumenda est, omnis dolor repellendus. </p>
                    </div>
                    <div class="tab-pane fade" id="awesome-classic" role="tabpanel" aria-labelledby="awesome-tab-classic">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div> -->

            <h3>{{ $model["title"] }}</h3>
            <img src="{{ asset('img/listing') }}/{{ $model['image'] }}" width="300px">
            <p>{{ $model["description"] }}</p>

            {!! $video !!}

            <br>
            <strong>User: {{ $model->user ? $model->user->name : 'Unknown author' }}</strong>
            <br>
            <strong>Category: {{ $model->category ? $model->category->title : 'N/A' }}</strong>
            <br>
            <h5>Tags:</h5>
            <ul class="list-group">
                @foreach($model->tags as $tag)
                    <li class="list-group-item">{{ $tag->name }}</li>
                @endforeach
            </ul>
            <br>
            <h5>features:</h5>
            @foreach($model->features as $feature)
                <span class="badge badge-success">{{ $feature->name }}</span>
            @endforeach
        </div>

        <div class="col-md-4">
            <h3><strong>Galleries:<strong> </h3>
            @foreach($model->galleries as $gallery)
                <img src="{{ asset($gallery->url) }}" class="card-img-top" alt="">
            @endforeach
            <h3><strong>User:<strong> {{ $model->user->name }}</h3>
            <h4>{{ count($model->galleries) }} gallery</h4>
            
        </div>
    </div>
</div>

@endsection
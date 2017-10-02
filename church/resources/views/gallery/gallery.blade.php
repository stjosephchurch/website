@extends('layout.app')
@section('content')
    <section>
        @include('layout._menu')
    </section>
    @include('layout._sidemenu')
    <section class="content-margin">
        <div class="container">
            <div>
                <h1 class="display-1 text-primary">Church</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <a href="/gallery/album"><div class="card bg-danger">
                        <div class="card-body">
                            <h1 class="display-4 text-center text-light">2017</h1>
                       </div>
                    </div></a>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-primary">
                        <div class="card-body">
                            <h1 class="display-4 text-center">2016</h1>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card bg-info">
                        <div class="card-body">
                            <h1 class="display-4 text-center">2015</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
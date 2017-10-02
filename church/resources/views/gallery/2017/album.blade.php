@extends('layout.app')
@section('content')
    <section>
        @include('layout._menu')
    </section>
    @include('layout._sidemenu')
    <section class="content-margin">
        <div class="container">
            <div>
                <h1 class="display-1 text-primary">Church 2017</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="/gallery/item"> <img src="https://source.unsplash.com/category/people/640x480" alt="SJOC" class="img-thumbnail"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-400">Onam Celebration</h5>
                            <small>18 Items</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="#"> <img src="https://source.unsplash.com/category/nature/640x480" alt="SJOC" class="img-thumbnail"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-400">Auditorum Koodasha</h5>
                            <small>21 Items</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="#"> <img src="https://source.unsplash.com/category/objects/640x480" alt="SJOC" class="img-thumbnail"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-400">Holy Qurbana</h5>
                            <small>12 Items</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="#"> <img src="https://source.unsplash.com/category/objects/640x480" alt="SJOC" class="img-thumbnail"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-400">Church Koodasha</h5>
                            <small>24 Items</small>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <a href="#"> <img src="https://source.unsplash.com/category/nature/640x480" alt="SJOC" class="img-thumbnail"></a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-400">Church Construction</h5>
                            <small>36 Items</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
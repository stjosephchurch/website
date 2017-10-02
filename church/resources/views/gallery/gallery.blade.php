@extends('layout.app')
@section('content')
    <section>
        @include('layout._menu')
    </section>
    <section class="sidenav border border-light">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-dark"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Church </a>
            <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><i class="fa fa-graduation-cap" aria-hidden="true"></i>&nbsp;MGOCSM</a>
            <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><i class="fa fa-shield" aria-hidden="true"></i>&nbsp; Sunday School</a>
            <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><i class="fa fa-female" aria-hidden="true"></i>&nbsp;Martha Mariyam</a>
            <a href="#" class="list-group-item list-group-item-dark list-group-item-action"><i class="fa fa-book" aria-hidden="true"></i>&nbsp;Prayer Group</a>
        </div>
    </section>
    <section class="content-margin">
        <div class="container">
            <div>
                <h1 class="display-1 text-primary">Church</h1>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card bg-danger">
                        <div class="card-body">
                            <h1 class="display-4 text-center">2017</h1>
                       </div>
                    </div>
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
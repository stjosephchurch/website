@extends('layout.app')
@section('content')
    <section>
        @include('layout._menu')
    </section>
    @include('layout._sidemenu')
    <section class="content-margin">
        <div class="container">
            <div>
                <h1 class="display-3 text-primary">Onam Celebration 2017</h1>
                <hr class="botm-line">
            </div>
            <div class="row">
                <div class="col-sm-4">
                      <a href="#" data-toggle="modal" data-target="#exampleModal"> <img src="https://source.unsplash.com/category/people/640x480" alt="SJOC" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-4">
                     <a href="#"> <img src="https://source.unsplash.com/category/nature/640x480" alt="SJOC" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-4">
                     <a href="#"> <img src="https://source.unsplash.com/category/objects/640x480" alt="SJOC" class="img-thumbnail"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                     <a href="#"> <img src="https://source.unsplash.com/category/objects/640x480" alt="SJOC" class="img-thumbnail"></a>
                </div>
                <div class="col-sm-4">
                      <a href="#"> <img src="https://source.unsplash.com/category/nature/640x480" alt="SJOC" class="img-thumbnail"></a>
                </div>
            </div>
        </div>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="https://source.unsplash.com/category/people/1280x960" class="img-fluid" alt="Responsive image">
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
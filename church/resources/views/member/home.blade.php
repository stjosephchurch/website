@extends('layout.app')
@section('content')
    <section>
        @include('layout._menu')
    </section>

    <section class="container-fluid pt-5">
         <div class="row">
             <div id="my-div"  class="col-2 bg-info">
                @include('layout._membermenu')
             </div>
             <div class="col-10 content-margin">
                 <h1 class="display-4 text-primary">Hi ! {{ Auth::user()->name }},</h1>
                 <p class="lead text-center">
                   <h1 class="display-4 text-center"> Welcome </h1>
                   <h1 class="display-4 text-center">To</h1>
                 <h1 class="display-4 text-center">St.Joseph Orthodox Church</h1>
                 </p>
             </div>
         </div>
    </section>
@endsection
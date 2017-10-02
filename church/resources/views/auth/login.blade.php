@extends('layout.app')
@section('content')
 <section>
     <section>
         @include('layout._menu')
     </section>
     <section class="login-margin">
         <div class="container">
             <div class="row">
                 <div class="col-sm-8 bg-warning text-center">
                     <h1 class="display-4 mt-5 hidden-md-down not-visible">SJOC</h1>
                     <span><small>KSR Main Road, Kanakagiri, Kalkere, Horamavu Bangalore, Karnataka, India - 560 113</small></span>
                 </div>
                 <div class="col-sm-4">
                     {!! Form::open(array('url' => '/login'))   !!}
                         <div class="form-group">
                             <label for="login_id">User ID</label>
                             {!! Form::text('login_id', null, ['placeholder'=>'Membership ID','class' =>'form-control', 'aria-describedby'=>'loginHelp', 'required'=>'true'] )  !!}
                             <small id="loginHelp" class="form-text text-muted">Enter the membership provided from church</small>
                         </div>
                         <div class="form-group">
                             <label for="loginPassword">Password</label>
                             {!! Form::password('password',  ['placeholder'=>'Password','class' =>'form-control', 'required'=>'true']) !!}
                         </div>
                         {!! Form::submit('Login', ['class' => 'btn btn-primary text-center']) !!}
                     {!! Form::close()   !!}
                 </div>
             </div>
         </div>
     </section>
     <section>
         @if ($errors -> any())
             <div>
                 <h3>Failed!!!!</h3>
                 <ul>
                     @foreach($errors->all() as $error)
                         <li>{{ $error }}</li>
                     @endforeach
                 </ul>
             </div>
         @endif
     </section>
 </section>
@endsection
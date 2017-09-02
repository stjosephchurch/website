@extends('layout.app')
@section('content')
    <section class="hero is-info">
        <div class="hero-head">
            @include('layout._menu')
        </div>
    </section>
    <section>
        <div class="login-wrapper columns">
            <div class="column is-8 is-hidden-mobile hero-banner">
                <section class="hero is-fullheight is-dark login-image">
                </section>
            </div>
            <div class="column is-4">
                <section class="hero is-fullheight">
                    <div class="hero-heading">
                     <div class="section has-text-centered">
                        <img src="{{asset('image/logo.png')}}" alt="sjoc" width="150px">
                     </div>
                   </div>
                    <div class="hero-body">
                        <div class="container">
                            <div class="columns">
                                <div class="column is-8 is-offset-2">
                                    <h1 class="login-avatar has-text-centered section">
                                        <img src="https://placehold.it/128x128">
                                    </h1>
                                    <div class="login-form">
                                        <p class="control has-icon has-icon-right">
                                            <input class="input email-input" type="text" placeholder="R03">
                                            <span class="icon user">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </p>
                                        <br>
                                        <p class="control has-icon has-icon-right">
                                            <input class="input password-input" type="password" placeholder="●●●●●●●">
                                             <span class="icon user">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                        </p>
                                        <p class="control login">
                                            <button class="button is-success is-outlined is-large is-fullwidth">Login</button>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection
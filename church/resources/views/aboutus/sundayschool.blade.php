@extends('layout.app')

@section('content')
    <section class="hero is-danger">
        <div class="hero-head">
            @include('layout._menu')
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-2">
                    St.Joseph Syrian Orthodox Sunday School
                </h1>
                <h2 class="subtitle is-4">
                    About Sunday School
                </h2>
            </div>
        </div>
    </section>
    <section class="section blog">
        <div class="container">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer suscipit massa eget mauris hendrerit,
                sit amet laoreet ex mattis. Aenean finibus massa eget finibus faucibus. Etiam dolor lacus, imperdiet et
                nisl vitae, lacinia euismod arcu. Aliquam non sapien hendrerit nisi semper rhoncus a eget erat. Maecenas
                accumsan semper ante eu molestie. Integer tristique erat sit amet posuere cursus. Aliquam placerat sit
                amet lectus laoreet vestibulum. Sed pharetra neque ac libero ornare, nec viverra ante tristique. Mauris
                eget urna metus.
            </p>
        </div>
    </section>
@endsection
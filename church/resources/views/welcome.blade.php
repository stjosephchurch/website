@extends('layout.app')

@section('content')
    @include('layout._header')
    <section class="main">
        <div class="columns">
            <div class="column is-one-third"> @include('section.message')</div>
            <div class="column">  @include('section.notice')</div>
            <div class="column"> @include('section.prayermeeting') </div>
        </div>
    </section>
@endsection
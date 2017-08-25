<!DOCTYPE html>
<html>
    <head>
        <title>St. Joseph Orthodox Syrian Church</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    </head>
    <body class="index">
        <div id="page-wrapper">
            @include('layout._header')
            @include('layout._banner')
            @include('auth.login')
        </div>
        <article id="main">
            @include('section.notice')
            @include('section.events')
            @include('section.aboutus')
            @include('section.message')
        </article>
        @include('section.footer')
        @include('layout._scripts')
    </body>
</html>
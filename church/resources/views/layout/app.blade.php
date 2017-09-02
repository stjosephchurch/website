<!DOCTYPE html>
<html>
    <head>
        <title>St. Joseph Orthodox Syrian Church</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.1/css/bulma.min.css">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    </head>
    <body>
      @yield('content')
      @include('section.footer')
      @include('layout._scripts')
    </body>
</html>
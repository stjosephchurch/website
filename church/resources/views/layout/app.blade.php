<!DOCTYPE html>
<html lang="en">
    <head>
        <title>St. Joseph Orthodox Syrian Church</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"  integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">
        <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
      @yield('content')
      @include('section.footer')
      @include('layout._scripts')
    </body>
</html>
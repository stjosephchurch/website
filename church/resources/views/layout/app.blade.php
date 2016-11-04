<!DOCTYPE html>
<html>
<title>St Joseph Orthodox Church</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('/css/app.css')}}">
<body class="w3-black">

@include('layout._sidemenu')

<div class="w3-padding-large" id="main">
@yield('content')
@include('section.footer')
</div>

</body>
</html>


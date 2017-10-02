<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <a class="navbar-brand" href="{{ url('/')}}"><img src="{{asset('image/logo.png')}}" class="img-responsive" style="width: 140px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="myNavbar">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarAboutUsMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ABOUT</a>
                <div class="dropdown-menu" aria-labelledby="navbarAboutUsMenuLink">
                    <a class="dropdown-item" href="{{ url('/aboutus/church')}}">Church</a>
                    <a class="dropdown-item" href="{{ url('/aboutus/mgocsm')}}">MJOCSM</a>
                    <a class="dropdown-item" href="{{ url('/aboutus/sundayschool')}}">Sunday School</a>
                    <a class="dropdown-item" href="{{ url('/aboutus/prayer')}}">Prayer Group</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/gallery')}}">GALLERY</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    RESOURCES
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Notice</a>
                    <a class="dropdown-item" href="#">Events</a>
                    <a class="dropdown-item" href="#">Books</a>
                </div>
            </li>
            <li class="nav-item">
                @if (Auth::check())
                    <a class="nav-link" href="{{ url('/logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out  btn btn-outline-dark" aria-hidden="true"></i>
                     </a>
                    {!! Form::open(array('id'=>'logout-form','url' => '/logout', 'style'=>'display: none;'))   !!}
                       {{ csrf_field() }}
                    {!! Form::close()   !!}
                @else
                    <a class="nav-link" href="{{ url('/login') }}"><i class="fa fa-user btn btn-outline-dark" aria-hidden="true"></i></a>
                @endif
            </li>
        </ul>
    </div>
</nav>


<header class="navbar is-transparent">
    <div class="navbar-brand">
        <a class="navbar-item" href={{ url('/')}}>
            <img src="{{asset('image/logo.png')}}" alt="Logo">
        </a>
        <div class="navbar-burger burger" data-target="navMenuTransparent">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div id="navMenuTransparent" class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link  is-active" href="#">ABOUT US</a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item " href="{{ url('/aboutus/church')}}">Church</a>
                    <a class="navbar-item " href="{{ url('/aboutus/sundayschool')}}">Sunday School</a>
                    <a class="navbar-item " href="{{ url('/aboutus/mgocsm')}}">MJOCSM</a>
                    <a class="navbar-item " href="{{ url('/aboutus/prayer')}}">Prayer</a>
                </div>
            </div>

            <a class="navbar-item  is-active" href="{{ url('/gallery')}}">GALLERY</a>

            <div class="navbar-item has-dropdown is-hoverable">
                <a class="navbar-link  is-active" href="#">RESOURCE</a>
                <div class="navbar-dropdown is-boxed">
                    <a class="navbar-item " href="#">Notice</a>
                    <a class="navbar-item " href="#">Books</a>
                    <a class="navbar-item " href="#">Events</a>
                </div>
            </div>

            <div class="navbar-item">
                <p class="control">
                    <a class="button is-transparent" href="{{ url('/login') }}"">
                               <span class="icon">
                                 <i class="fa fa-sign-in" aria-hidden="true"></i>
                                </span></a>
                </p>
            </div>
        </div>
    </div>
</header>

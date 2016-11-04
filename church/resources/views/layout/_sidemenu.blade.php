<nav class="w3-sidenav w3-center w3-small w3-hide-small">
    <!-- Avatar image in top left corner -->
    <img src="{{asset('/image/avatar_cross.jpg')}}" style="width:100%">
    <a class="w3-padding-large w3-black" href="#">
        <i class="fa fa-home w3-xxlarge"></i>
        <p>HOME</p>
    </a>
    <a class="w3-padding-large w3-hover-black" href="#about">
        <i class="fa fa-user w3-xxlarge"></i>
        <p>ABOUT</p>
    </a>
    <a class="w3-padding-large w3-hover-black" href="#photos">
        <i class="fa fa-eye w3-xxlarge"></i>
        <p>PHOTOS</p>
    </a>
    <a class="w3-padding-large w3-hover-black" href="#contact">
        <i class="fa fa-envelope w3-xxlarge"></i>
        <p>CONTACT</p>
    </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
    <ul class="w3-navbar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
        <li class="w3-left" style="width:25% !important"><a href="#">HOME</a></li>
        <li class="w3-left" style="width:25% !important"><a href="#about">ABOUT</a></li>
        <li class="w3-left" style="width:25% !important"><a href="#photos">PHOTOS</a></li>
        <li class="w3-left" style="width:25% !important"><a href="#contact">CONTACT</a></li>
    </ul>
</div>
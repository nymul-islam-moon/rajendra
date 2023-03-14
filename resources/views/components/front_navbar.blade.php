<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- Logo -->
        <div class="logo-wrapper navbar-brand valign">
            <a href="index.html">
                <div class="logo">
                    <img src="img/logo.png" class="logo-img" alt="">
                </div>
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="icon-bar"><i class="ti-line-double"></i></span> </button>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown"><a href="{{ route('home.index') }}"> <span class="nav-link active"> Home</span></a>

                </li>
                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                <li class="nav-item"> <a class="nav-link" href="facilities.html">Facilities</a></li>
                <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Spa</a></li>
                <li class="nav-item"><a class="nav-link" href="meeting.html">Meetings & Events </a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('home.specialoffer.index') }}">Special Offers</a></li>
            </ul>
        </div>
    </div>
</nav>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Rajendra Eco Resort & Village Ltd.</title>
    {{-- header links start --}}
    <x-front_header />
    {{-- header links end --}}
</head>

<body>
<!-- Progress scroll totop -->
<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Navbar -->
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
                <li class="nav-item dropdown"><a href="index.html"> <span class="nav-link active"> Home</span></a>

                </li>
                <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                <li class="nav-item"> <a class="nav-link" href="facilities.html">Facilities</a></li>
                <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Spa</a></li>
                <li class="nav-item"><a class="nav-link" href="meeting.html">Meetings & Events </a></li>
                <li class="nav-item"><a class="nav-link" href="special-offers.html">Special Offers</a></li>
            </ul>
        </div>
    </div>
</nav>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/6.jpg">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90">

                    <h1>Book Now</h1>
				</div>
			</div>
        </div>
    </div>
    <!-- Rooms -->
    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mb-30 ">
                    <h3 class="book-now-title">Book Now</h3>
                    <p class="book-now-p">Please fill in the following booking form and send it to us. We will get back to you with confirmation as soon as possible.</p>

                    <form method="post" class="contact__form book-form" action="{{ route('dashboard.roombook.store') }}">
                        @csrf
                        @method('POST')
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                            </div>
                        </div>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group ">
                                <input type="text" name="start_date" class=" datepicker" placeholder="Check in *" required>
                            </div>
                            <div class="col-md-6 form-group ">
                                <input type="text" name="end_date" class="datepicker" placeholder="Check out *" required>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="select1_wrapper  ">

                                    <div class="select1_inner" required>
                                        <select class="select22  select"  style="width: 100%" name="rooms">
                                            <option value="1" id="select2-k72o-result-iimg-1" class="select2-results__option">--Select Room-- *</option>
                                            @foreach ($rooms as $room)
                                                <option value="{{ $room->id }}" id="select2-k72o-result-iimg-1" class="select2-results__option">{{ $room->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 form-group">
                                <input name="room_qnt" type="first-name" placeholder="Number of Rooms *" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input name="adult_qnt" type="first-name" placeholder="Number of Adult *" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input name="child_qnt" type="first-name" placeholder="Number Of Children *" required>
                            </div>

                            <div class="col-md-6 form-group">
                                <input name="first-name" type="first-name" placeholder="First Name *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="last-name" type="last-name" placeholder="Last Name *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="address" id="address" cols="30" rows="4" placeholder="Address *" required></textarea>
                            </div>

                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Your Email *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Your Number *" required>
                            </div>

                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Special Requirements *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="butn-dark"><a href="#0"><span>Book Now</span></a></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

    <!-- Reservation & Booking Form -->

    <!-- Footer -->
    <x-front_footer_page_links />

    <!-- jQuery -->
    <x-front_footer />
</body>
</html>

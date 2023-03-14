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
                        <img src="{{ asset('frontend/img/logo.png') }}" class="logo-img" alt="">
                    </div>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
                    class="icon-bar"><i class="ti-line-double"></i></span> </button>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="rooms.html">Rooms & Suites</a></li>
                    <li class="nav-item"> <a class="nav-link" href="facilities.html">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="meeting.html">Meetings & Events </a></li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="spa-wellness.html">Spa</a></li>
                    <li class="nav-item"><a class="nav-link" href="special-offers.html">Special Offers</a></li>
                </ul>
                <div class="footer-about-social-list">
                    <a href="https://www.facebook.com/rajendraresort?mibextid=LQQJ4d"><i class="ti-facebook"></i></a>
                    <a href="#"><i class="ti-instagram"></i></a>
                    <a href="#"><i class="ti-twitter"></i></a>
                    <a href="#"><i class="ti-youtube"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Kenburns Slider -->
    <aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="3">
        <div class="kenburns-inner h-100">
            <div class="v-middle caption text-center">
                <div class="container">
                    <div class="row h-100">
                        <div class="col-md-12">
                            <span>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                                <i class="star-rating"></i>
                            </span>
                            <h4>Unique Place to Relax & Enjoy</h4>
                            <h1>The Perfect Base <br>For You</h1>
                            <div class="butn-light mt-30 mb-30"><a href="#" data-scroll-nav="1"><span>Rooms &amp;
                            Suites</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!-- Booking Search -->
    <div class="booking-wrapper">
        <div class="container">
            <div class="booking-inner clearfix">
                <form action="#" class="form1 clearfix">
                    <div class="col1 c1">
                        <div class="input1_wrapper">
                            <label>Check in</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check in">
                            </div>
                        </div>
                    </div>
                    <div class="col1 c2">
                        <div class="input1_wrapper">
                            <label>Check out</label>
                            <div class="input1_inner">
                                <input type="text" class="form-control input datepicker" placeholder="Check out">
                            </div>
                        </div>
                    </div>

                    <div class="col2 c5">
                        <div class="select1_wrapper">
                            <label>Rooms</label>
                            <div class="select1_inner">
                                <select class="select2 select" style="width: 100%">
                                    <option value="1">1 Room</option>
                                    <option value="2">2 Rooms</option>
                                    <option value="3">3 Rooms</option>
                                    <option value="4">4 Rooms</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col3 c6">
                        <button type="submit" class="btn-form1-submit"><a href="booking-availability.html"> Check Availability</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 about-sess mb-30 animate-box" data-animate-effect="fadeInUp">
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-subtitle">Rajendra Eco Resort & Village Ltd</div>
                    <div class="section-title">Enjoy a Luxury Experience</div>
                    <p>Rajendra Eco Resort is the combination of innovative design and crafted luxury and set apart by
                        an
                        unprecedented level of personalised hospitality, private spaces and bespoke journeys. Here, We
                        Combine comfort, personalized service and exceptional values. </p>
                    <p>Our purpose is to give our guests a complete experience and a perfect stay. Our staff to have a
                        culture of mutual respect, trust and integrity. Rajendra Eco Resort is a place that is fun and
                        filled with the unexpected. What we do is always authentic, honest and mindful that less is
                        often so much more.</p>
                    <!-- call -->
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:+8801715431714">+880 1921-676632</a>
                        </div>
                    </div>
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('frontend/img/rooms/8.jpg') }}" alt="" class="mt-90 mb-30">
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp">
                    <img src="{{ asset('frontend/img/rooms/2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose us -->

    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="col-md-12 text-center">
                <span>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                    <i class="star-rating"></i>
                </span>
                <div class="section-subtitle">What Makes Different Us </div>
                <div class="section-title">Why Choose US </div>
            </div>
            <div class="row" style="margin-top: 35px;">

                <div class="col-md-6 bgg-why">

                    <div class="section-title"><span>Extra Facilities</span></div>
                    <ul class="list-unstyled page-list mb-30">
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Forest Sitting</p>
                            </div> &nbsp;

                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Open Fieldy</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Open Fieldy</p>
                            </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Billboard</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Table Soccer</p>
                            </div>&nbsp;&nbsp;

                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Table Tannis</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Table Soccer</p>
                            </div>&nbsp;&nbsp;

                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Table Tannis</p>
                            </div>
                        </li>
                        <li>
                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Table Soccer</p>
                            </div>&nbsp;&nbsp;

                            <div class="page-list-icon"> <span class="ti-check"></span> </div>
                            <div class="page-list-text">
                                <p>Table Tannis</p>
                            </div>
                        </li>
                    </ul>
                    <div class="reservations mb-30">
                        <div class="butn-dark"> <a href="facilities.html" data-scroll-nav="1"><span>Learn
                                    More</span></a> </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box"  data-animate-effect="fadeInUp">
                    <!-- slider area -->
                    <div id="slidy-container">
                        <figure id="slidy">
                            <img src="{{ asset('frontend/img/gallery/1.JPG') }}" alt="eyes">
                            <img src="{{ asset('frontend/img/gallery/123.JPG') }}" alt="lou">
                            <img src="{{ asset('frontend/img/gallery/2.JPG') }}" alt="lucie-2">
                            <img src="{{ asset('frontend/img/gallery/3.JPG') }}" alt="lucie">
                        </figure>
                    </div>

                    <script>
                        /* user defined variables */
                        var timeOnSlide = 3,
                            // the time each image will remain static on the screen, measured in seconds
                            timeBetweenSlides = 1,
                            // the time taken to transition between images, measured in seconds

                            // test if the browser supports animation, and if it needs a vendor prefix to do so
                            animationstring = 'animation',
                            animation = false,
                            keyframeprefix = '',
                            domPrefixes = 'Webkit Moz O Khtml'.split(' '),
                            // array of possible vendor prefixes
                            pfx = '',
                            slidy = document.getElementById("slidy");
                        if (slidy.style.animationName !== undefined) { animation = true; }
                        // browser supports keyframe animation w/o prefixes

                        if (animation === false) {
                            for (var i = 0; i < domPrefixes.length; i++) {
                                if (slidy.style[domPrefixes[i] + 'AnimationName'] !== undefined) {
                                    pfx = domPrefixes[i];
                                    animationstring = pfx + 'Animation';
                                    keyframeprefix = '-' + pfx.toLowerCase() + '-';
                                    animation = true;
                                    break;
                                }
                            }
                        }

                        if (animation === false) {
                            // animate in JavaScript fallback
                        } else {
                            var images = slidy.getElementsByTagName("img"),
                                firstImg = images[0],
                                // get the first image inside the "slidy" element.
                                imgWrap = firstImg.cloneNode(false);  // copy it.
                            slidy.appendChild(imgWrap); // add the clone to the end of the images
                            var imgCount = images.length, // count the number of images in the slide, including the new cloned element
                                totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
                                slideRatio = (timeOnSlide / totalTime) * 100, // determine the percentage of time an induvidual image is held static during the animation
                                moveRatio = (timeBetweenSlides / totalTime) * 100, // determine the percentage of time for an individual movement
                                basePercentage = 100 / imgCount, // work out how wide each image should be in the slidy, as a percentage.
                                position = 0, // set the initial position of the slidy element
                                css = document.createElement("style"); // start marking a new style sheet
                            css.type = "text/css";
                            css.innerHTML += "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " + (imgCount * 100) + "%;  }\n"; // set the width for the slidy container
                            css.innerHTML += "#slidy img { float: left; width: " + basePercentage + "%; }\n";
                            css.innerHTML += "@" + keyframeprefix + "keyframes slidy {\n";
                            for (i = 0; i < (imgCount - 1); i++) { //
                                position += slideRatio; // make the keyframe the position of the image
                                css.innerHTML += position + "% { left: -" + (i * 100) + "%; }\n";
                                position += moveRatio; // make the postion for the _next_ slide
                                css.innerHTML += position + "% { left: -" + ((i + 1) * 100) + "%; }\n";
                            }
                            css.innerHTML += "}\n";
                            css.innerHTML += "#slidy { left: 0%; " + keyframeprefix + "transform: translate3d(0,0,0); " + keyframeprefix + "animation: " + totalTime + "s slidy infinite; }\n"; // call on the completed keyframe animation sequence
                            document.body.appendChild(css); // add the new stylesheet to the end of the document
                        }

                    </script>
                    <!-- Slider 1 Area End Here -->
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms -->

    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="rooms3 section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-subtitle">Rajendra Eco Resort & Village Ltd</div>
                        <div class="section-title">Rooms & Suites</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="img/rooms/1.jpg">
                                <span class="category"><a href="rooms2.html">Book</a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h6>5500 ৳ / Night</h6>
                                        <h4>Junior Suite</h4>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h6>5500 ৳ / Night</h6>
                                    <h4>Junior Suite</h4>
                                    <p>Hotel viverra tristique ustoni miss vitae sediam neque nivamus aestan.</p>
                                    <div class="row room-facilities mb-30">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-line"><a href="room-details.html">Details</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                    href="room-details.html">Virtual Tour</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ asset('frontend/img/rooms/2.jpg') }}">
                                <span class="category"><a href="rooms2.html">Book</a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h6>4500 ৳ / Night</h6>
                                        <h4>Family Room</h4>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h6>4500 ৳ / Night</h6>
                                    <h4>Family Room</h4>
                                    <p>Hotel viverra tristique ustoni miss vitae sediam neque nivamus aestan.</p>
                                    <div class="row room-facilities mb-30">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-line"><a href="room-details.html">Details</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                    href="room-details.html">Virtual Tour</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="img/rooms/3.jpg">
                                <span class="category"><a href="rooms2.html">Book</a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h6>6500 ৳ / Night</h6>
                                        <h4>Double Room</h4>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h6>6500 ৳ / Night</h6>
                                    <h4>Double Room</h4>
                                    <p>Hotel viverra tristique ustoni miss vitae sediam neque nivamus aestan.</p>
                                    <div class="row room-facilities mb-30">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-line"><a href="room-details.html">Details</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                    href="room-details.html">Virtual Tour</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ asset('frontend/img/rooms/6.jpg') }}">
                                <span class="category"><a href="rooms2.html">Book</a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h6>7500 ৳ / Night</h6>
                                        <h4>Deluxe Room</h4>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h6>7500 ৳ / Night</h6>
                                    <h4>Deluxe Room</h4>
                                    <p>Hotel viverra tristique ustoni miss vitae sediam neque nivamus aestan.</p>
                                    <div class="row room-facilities mb-30">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-line"><a href="room-details.html">Details</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                    href="room-details.html">Virtual Tour</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ asset('frontend/img/rooms/8.jpg') }}">
                                <span class="category"><a href="rooms2.html">Book</a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h6>6900 ৳ / Night</h6>
                                        <h4>Superior Room</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="btn-line"><a href="room-details.html">Details</a></div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                href="room-details.html">Virtual Tour</a></div>
                                    </div>

                                </div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h6>6900 ৳ / Night</h6>
                                    <h4>Superior Room</h4>
                                    <p>Hotel viverra tristique ustoni miss vitae sediam neque nivamus aestan.</p>
                                    <div class="row room-facilities mb-30">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-line"><a href="room-details.html">Details</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                    href="room-details.html">Virtual Tour</a></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="square-flip">
                            <div class="square bg-img" data-background="{{ asset('frontend/img/rooms/9.jpg') }}">
                                <span class="category"><a href="rooms2.html">Book</a></span>
                                <div class="square-container d-flex align-items-end justify-content-end">
                                    <div class="box-title">
                                        <h6>6000 ৳ / Night</h6>
                                        <h4>Wellness Room</h4>
                                    </div>
                                </div>
                                <div class="flip-overlay"></div>
                            </div>
                            <div class="square2">
                                <div class="square-container2">
                                    <h6>6000 ৳ / Night</h6>
                                    <h4>Wellness Room</h4>
                                    <p>Hotel viverra tristique ustoni miss vitae sediam neque nivamus aestan.</p>
                                    <div class="row room-facilities mb-30">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-group"></i> 1-2 Persons</li>
                                                <li><i class="flaticon-wifi"></i> Free Wifi</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="flaticon-bed"></i> Twin Bed</li>
                                                <li><i class="flaticon-breakfast"></i> Breakfast</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="btn-line"><a href="room-details.html">Details</a></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="btn-line"><img class="virtule-tour" src="{{ asset('frontend/img/vt.png') }}"> <a
                                                    href="room-details.html">Virtual Tour</a></div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Pricing -->
    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="section-subtitle"><span>Best Prices</span></div>
                    <div class="section-title"><span>Extra Services</span></div>
                    <p class="color-2">The best prices for your relaxing vacation. The utanislen quam nestibulum ac
                        quame odion elementum sceisue the aucan.</p>
                    <p class="color-2">Orci varius natoque penatibus et magnis disney Parturient monte nascete ridiculus
                        mus nellen etesque habitant morbine.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-2">For information</p> <a href="tel:+8801921-676632">+880 1921-676632</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="owl-carousel owl-theme">
                        <div class="pricing-card">
                            <img src="{{ asset('frontend/img/pricing/1.jpg') }}" alt="">
                            <div class="desc">
                                <div class="name">Room cleaning</div>
                                <div class="amount">৳ 3550<span>/ month</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="{{ asset('frontend/img/pricing/2.jpg') }}" alt="">
                            <div class="desc">
                                <div class="name">Drinks included</div>
                                <div class="amount">৳ 5330<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="{{ asset('frontend/img/pricing/3.jpg') }}" alt="">
                            <div class="desc">
                                <div class="name">Room Breakfast</div>
                                <div class="amount">৳ 5430<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                        <div class="pricing-card">
                            <img src="{{ asset('frontend/img/pricing/4.jpg') }}" alt="">
                            <div class="desc">
                                <div class="name">Safe & Secure</div>
                                <div class="amount">৳ 4515<span>/ daily</span></div>
                                <ul class="list-unstyled list">
                                    <li><i class="ti-check"></i> Hotel ut nisan the duru</li>
                                    <li><i class="ti-check"></i> Orci miss natoque vasa ince</li>
                                    <li><i class="ti-close unavailable"></i>Clean sorem ipsum morbin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Video -->
    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3"
        data-background="img/slider/2.JPG">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                            class="star-rating"></i><i class="star-rating"></i></span>
                    <div class="section-subtitle"><span>Rajendra Eco Resort & Village Ltd</span></div>
                    <div class="section-title"><span>Promotional Video</span></div>
                </div>
            </div>
            <div class="row">
                <div class="text-center col-md-12">
                    <a class="vid" href="https://www.youtube.com/watch?v=B-6l80FB-sU">
                        <div class="vid-butn">
                            <span class="icon">
                                <i class="ti-control-play"></i>
                            </span>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Facilties -->
    <section class="facilties section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Our Services</div>
                    <div class="section-title">Hotel Facilities</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-world"></span>
                        <h5>Pick Up & Drop</h5>
                        <p>We’ll pick up from airport while you comfy on your ride, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-world"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-car"></span>
                        <h5>Parking Space</h5>
                        <p>Fusce tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-car"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-bed"></span>
                        <h5>Room Service</h5>
                        <p>Room tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-bed"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-swimming"></span>
                        <h5>Swimming Pool</h5>
                        <p>Swimming pool tincidunt nise ace park norttito sit space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-swimming"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-wifi"></span>
                        <h5>Fibre Internet</h5>
                        <p>Wifi tincidunt nis ace park norttito sit amet space, mus nellentesque habitant.</p>
                        <div class="facility-shape"> <span class="flaticon-wifi"></span> </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-facility animate-box" data-animate-effect="fadeInUp">
                        <span class="flaticon-breakfast"></span>
                        <h5>Breakfast</h5>
                        <p>Eat tincidunt nisa ace park norttito sit amet space, mus nellentesque habitant</p>
                        <div class="facility-shape"> <span class="flaticon-breakfast"></span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about section-padding" style="background-color: #f4f4f4 !important">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp"
                    style="border-right: 1px solid rgba(140,142,145,.15);">
                    <h1 style="text-align: left;font-size: 28px;"><img class="social-icon" src="{{ asset('frontend/img/youtube.svg') }}"> Our
                        YouTube</h1>
                    <div class="reservations">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/B-6l80FB-sU"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <h1 style="text-align: left;font-size: 28px;"><img class="social-icon"
                            src="{{ asset('frontend/img/so-ins-black.svg') }}">Our Instagram</h1>
                    <div id="instafeed-container"></div>
                    <script
                        src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
                    <script type="text/javascript">
                        var userFeed = new Instafeed({
                            get: 'user',
                            target: "instafeed-container",
                            resolution: 'low_resolution',
                            accessToken: 'IGQVJXekpFUmhTZAmhUalF2UFdVT1FBalAxYVdiWTNLSlhWUHVGTDFpRW9ySktFaTRSWDRRRkt5ekUyRUFjd0xucFJlY2NSUXNEdWZAwcHpvbmxVeGJ6MXBzTzBCMXlKQUJFX3pSRmZAvWTJpaXk0LWYzYQZDZD'
                        });
                        userFeed.run();

                    </script>

                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="#"><img src="{{ asset('frontend/img/gallery/3.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Discover</h6>
                            </div>
                            <h4>The Restaurant</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>Spa Center</h4>
                            <p>Spa center inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="#"><img src="{{ asset('frontend/img/spa/3.jpg') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="#"><img src="{{ asset('frontend/img/spa/2.jpg') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Modern</h6>
                            </div>
                            <h4>Fitness Center</h4>
                            <p>Restaurant inilla duiman at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info">
                                <h6>Experiences</h6>
                            </div>
                            <h4>The Health Club & Pool</h4>
                            <p>The health club & pool at elit finibus viverra nec a lacus themo the nesudea seneoice
                                misuscipit non sagie the fermen ziverra tristiue duru the ivite dianne onen nivami
                                acsestion augue artine.</p>
                            <div class="butn-dark"> <a href="#"><span>Learn More</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="#"><img src="{{ asset('frontend/img/gallery/4.JPG') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Reservation & Booking Form -->
    <section class="testimonials">
        <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.JPG"
            data-overlay-dark="2">
            <div class="container">
                <div class="row">
                    <!-- Reservation -->
                    <div class="col-md-5 mb-30 mt-30">
                        <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i
                                class="star-rating"></i><i class="star-rating"></i></p>
                        <h5>Each of our guest rooms feature a private bath, wi-fi, cable television and include full
                            breakfast.</h5>
                        <div class="reservations mb-30">
                            <div class="icon color-1"><span class="flaticon-call"></span></div>
                            <div class="text">
                                <p class="color-1">Reservation</p> <a class="color-1" href="tel:+8801921-676632">+880
                                    1715-431714</a>
                            </div>
                        </div>
                        <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                    </div>
                    <!-- Booking From -->
                    <div class="col-md-5 offset-md-2">
                        <div class="booking-box">
                            <div class="head-box">
                                <h6>Rooms & Suites</h6>
                                <h4>Hotel Booking Form</h4>
                            </div>
                            <div class="booking-inner clearfix">
                                <form action="#" class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check in</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Check in">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Check out</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker"
                                                        placeholder="Check out">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Adults</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Adults</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Children</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Children</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Check
                                                Availability</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section class="clients">
        <div class="container">
            <h5 class="client-asso">Partners & Associates</h5>
            <div class="row">
                <div class="col-md-7 owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('frontend/img/clients/axis.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('frontend/img/clients/2.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('frontend/img/clients/3.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('frontend/img/clients/4.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('frontend/img/clients/5.png') }}" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="{{ asset('frontend/img/clients/6.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->

    <x-front_footer_page_links />

    <!-- jQuery -->
    <x-front_footer />
    <!-- jQuery -->

    <!-- Vegas Background Slideshow (vegas.slider kenburns) -->
    <script>
        $(document).ready(function () {
            $('#kenburnsSliderContainer').vegas({
                slides: [{
                    src: "img/slider/1.jpg"
                }, {
                    src: "img/slider/2.jpg"
                }, {
                    src: "img/slider/3.jpg"
                }],
                overlay: true,
                transition: 'fade2',
                animation: 'kenburnsUpRight',
                transitionDuration: 1000,
                delay: 10000,
                animationDuration: 20000
            });
        });
    </script>
</body>

</html>

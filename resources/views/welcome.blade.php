<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Bistro-Cappuccino</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('asset/frontend/img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap"
            rel="stylesheet">

        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('asset/frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('asset/frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}"
            rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('asset/frontend/css/style.min.css') }}" rel="stylesheet">
    </head>

    <body>

        <!-- Navbar Start -->
        <div class="container-fluid p-0 nav-bar">
            <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
                <a href="/" class="navbar-brand px-lg-4 m-0">
                    <h1 class="m-0 display-4 text-uppercase text-white">Bistro-Cappuccino</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto p-4">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#menu" class="nav-item nav-link">Spezialitäten</a>
                        <a href="#reservation" class="nav-item nav-link">Reservierung</a>
                        @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/home') }}" class="nav-item nav-link">Home</a>
                        @else
                        <a href="{{ route('login') }}" class="nav-item nav-link">Log
                            in</a>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                        @endif
                        @endauth
                        @endif
                    </div>
                </div>
            </nav>
        </div>

        <div class="container-fluid p-0 mb-5">
            <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('asset/frontend/img/carousel-1.jpg') }}" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <h2 class="text-primary font-weight-medium m-0">Wir kredenzen</h2>
                            <h1 class="display-1 text-white m-0">CAPPUCCINO</h1>
                            <h2 class="text-white m-0">* SEIT 1950 *</h2>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                                        <img class="w-100" src="{{ asset('asset/frontend/img/carousel-2.jpg') }}"
                    alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 1950 *</h2>
                    </div>
                </div> --}}
            </div>
            {{-- <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>
                            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a> --}}
        </div>
        </div>
        <!-- Navbar End -->

        <!-- Carousel Start -->

        <!-- Carousel End -->


        <!-- About Start -->
        <div class="container-fluid py-5" id="about">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Über Uns</h4>
                    <h1 class="display-4">SEIT 1950</h1>
                </div>
                <div class="row">
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3">Unsere Geschichte</h1>
                        <h5 class="mb-3">Caffeine, grounds, macchiato organic, java saucer french press, id skinny
                            whipped crema aromatic. Instant, spoon breve
                            coffee bar french press grinder. Espresso est, qui, crema kopi-luwak, cultivar java
                            variety kopi-luwak plunger pot.</h5>
                        <p>Dripper in, white chicory, est spoon, irish con panna café au lait filter affogato mocha.
                            Bar as half and half, qui as
                            rich whipped saucer. To go steamed to go irish at caramelization filter galão.</p>
                        <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Interessiert?</a>
                    </div>
                    <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('asset/frontend/img/about.png') }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-4 py-0 py-lg-5">
                        <h1 class="mb-3">Unsere Vision</h1>
                        <p>Aromatic macchiato pumpkin spice black turkish espresso so seasonal. Viennese cappuccino
                            beans extra kopi-luwak white
                            dripper froth coffee. Filter aromatic aroma, galão blue mountain est siphon, cup iced
                            decaffeinated aromatic brewed.</p>
                        <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Coffee ipsum dolor sit amet
                        </h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Bavaria ipsum dolor sit amet
                        </h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet
                        </h5>
                        <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Neugierig?</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="container-fluid pt-5" id="service">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Unser Service</h4>
                    <h1 class="display-4">Frische & Biozertifizierte Bohnen</h1>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <img class="img-fluid mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/service-1.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h4><i class="fa fa-truck service-icon"></i>Schnelle Türlieferungen</h4>
                                <p class="m-0">Cortado cup extra , irish shop redeye frappuccino dripper. Macchiato
                                    carajillo aromatic plunger pot whipped beans as
                                    lungo. Caffeine irish, affogato foam ut a pumpkin spice froth.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <img class="img-fluid mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/service-2.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h4><i class="fa fa-coffee service-icon"></i>Frisch geröstete Kaffeebohnen</h4>
                                <p class="m-0">A, macchiato mug decaffeinated chicory qui, coffee java iced saucer
                                    breve crema. Barista and con panna turkish viennese
                                    crema pumpkin spice. Kopi-luwak as wings, lungo sweet ut macchiato beans.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <img class="img-fluid mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/service-3.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h4><i class="fa fa-award service-icon"></i>Bester Qualitätskaffee</h4>
                                <p class="m-0">As brewed irish filter latte, white decaffeinated brewed carajillo
                                    dark. Cup flavour bar , plunger pot seasonal cinnamon
                                    latte fair trade. Cinnamon, ristretto, cup crema filter plunger pot cinnamon
                                    seasonal robust.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <div class="row align-items-center">
                            <div class="col-sm-5">
                                <img class="img-fluid mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/service-4.jpg') }}" alt="">
                            </div>
                            <div class="col-sm-7">
                                <h4><i class="fa fa-table service-icon"></i>Online Reservierung</h4>
                                <p class="m-0">Flavour, grounds café au lait mocha viennese aftertaste french press
                                    brewed ut espresso. Whipped, aftertaste single shot
                                    chicory café au lait acerbic half and half.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- Offer Start -->
        <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
            <div class="container py-5">
                <h1 class="display-3 text-primary mt-3">50% OFF</h1>
                <h1 class="text-white mb-3">Sonntagsattraktion</h1>
                <h4 class="text-white font-weight-normal mb-4 pb-3">Nur Sonntags vom 1. Jan bis zum 31 Jan 2048
                </h4>
                <form class="form-inline justify-content-center mb-4">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Your Email" style="height: 60px;">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-4" type="submit">Registrieren</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Offer End -->


        <!-- Menu Start -->
        <div class="container-fluid pt-5" id="menu">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Spezialitäten & Preise</h4>
                    {{-- <h1 class="display-4">Competitive Pricing</h1> --}}
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="mb-5">Heiße Kaffeespezialitäten</h1>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-1.jpg') }}" alt="">
                                <h5 class="menu-price">€5</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Kaffee schwarz</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-2.jpg') }}" alt="">
                                <h5 class="menu-price">€7</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Kaffee-Schokoloade</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-3.jpg') }}" alt="">
                                <h5 class="menu-price">€9</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Milchkaffee</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-2.jpg') }}" alt="">
                                <h5 class="menu-price">€9</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Cappuccino</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-5">Kalte Kaffeespezialitäten</h1>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-1.jpg') }}" alt="">
                                <h5 class="menu-price">€5</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Kaffee schwarz</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-2.jpg') }}" alt="">
                                <h5 class="menu-price">€7</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Kaffee-Schokoloade</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-3.jpg') }}" alt="">
                                <h5 class="menu-price">€9</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Milchkaffee</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                        <div class="row align-items-center mb-5">
                            <div class="col-4 col-sm-3">
                                <img class="w-100 rounded-circle mb-3 mb-sm-0"
                                    src="{{ asset('asset/frontend/img/menu-2.jpg') }}" alt="">
                                <h5 class="menu-price">€9</h5>
                            </div>
                            <div class="col-8 col-sm-9">
                                <h4>Cappuccino</h4>
                                <p class="m-0">Sit Coffee ipsum et beans skinny and instant eu sit robust bar
                                    decaffeinated.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        <!-- Reservation Start -->
        <div class="container-fluid my-5" id="reservation">
            <div class="container">
                <div class="reservation position-relative overlay-top overlay-bottom">
                    <div class="row align-items-center">
                        <div class="col-lg-6 my-5 my-lg-0">
                            <div class="p-5">
                                <div class="mb-4">
                                    <h1 class="display-3 text-primary">30% OFF</h1>
                                    <h1 class="text-white">Für Online Reservierungen</h1>
                                </div>
                                <p class="text-white">Beans plunger pot carajillo medium americano cultivar arabica
                                    sugar pumpkin spice arabica lungo. Cultivar, at roast,
                                    aromatic lungo, plunger pot trifecta bar redeye in and dark. Shop coffee, rich,
                                    aftertaste cortado cinnamon cappuccino
                                    grinder robusta affogato sit rich.</p>
                                <ul class="list-inline text-white m-0">
                                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Coffee ipsum dolor
                                        sit
                                        amet</li>
                                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Bavaria ipsum
                                        dolor
                                        sit
                                        amet</li>
                                    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor
                                        sit
                                        amet</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                                <h1 class="text-white mb-4 mt-5">Tischbuchungen</h1>
                                <form class="mb-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control bg-transparent border-primary p-4"
                                            placeholder="Name" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control bg-transparent border-primary p-4"
                                            placeholder="eMail" required="required" />
                                    </div>
                                    <div class="form-group">
                                        <div class="date" id="date" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                                placeholder="Datum" data-target="#date" data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="time" id="time" data-target-input="nearest">
                                            <input type="text"
                                                class="form-control bg-transparent border-primary p-4 datetimepicker-input"
                                                placeholder="Uhrzeit" data-target="#time"
                                                data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom-select bg-transparent border-primary px-4"
                                            style="height: 49px;">
                                            <option selected>Person</option>
                                            <option value="1">Person 1</option>
                                            <option value="2">Person 2</option>
                                            <option value="3">Person 3</option>
                                            <option value="3">Person 4</option>
                                        </select>
                                    </div>

                                    <div>
                                        <button class="btn btn-primary btn-block font-weight-bold py-3"
                                            type="submit">Jetzt
                                            Buchen</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation End -->


        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="section-title">
                    <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                    <h1 class="display-4">Unsere Kunden </h1>
                </div>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="{{ asset('asset/frontend/img/testimonial-1.jpg') }}" alt="">
                            <div class="ml-3">
                                <h4>Kundin</h4>
                                <i>Beruf</i>
                            </div>
                        </div>
                        <p class="m-0">Barista id est, body doppio saucer, brewed cinnamon froth to go variety.
                            Robusta, whipped, cultivar, in roast variety
                            cultivar sugar affogato that. Pumpkin spice, bar strong, milk single shot mazagran body
                            froth half and half mug
                            macchiato.</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="{{ asset('asset/frontend/img/testimonial-2.jpg') }}" alt="">
                            <div class="ml-3">
                                <h4>Kunde</h4>
                                <i>Beruf</i>
                            </div>
                        </div>
                        <p class="m-0">Barista id est, body doppio saucer, brewed cinnamon froth to go variety.
                            Robusta, whipped, cultivar, in roast variety
                            cultivar sugar affogato that. Pumpkin spice, bar strong, milk single shot mazagran body
                            froth half and half mug
                            macchiato.</p>
                    </div>
                    <div class="testimonial-item">
                        <div class="d-flex align-items-center mb-3">
                            <img class="img-fluid" src="{{ asset('asset/frontend/img/testimonial-3.jpg') }}" alt="">
                            <div class="ml-3">
                                <h4>Kundin</h4>
                                <i>Beruf</i>
                            </div>
                        </div>
                        <p class="m-0">Barista id est, body doppio saucer, brewed cinnamon froth to go variety.
                            Robusta, whipped, cultivar, in roast variety
                            cultivar sugar affogato that. Pumpkin spice, bar strong, milk single shot mazagran body
                            froth half and half mug
                            macchiato.</p>
                    </div>
                    {{-- <div class="testimonial-item">
                            <div class="d-flex align-items-center mb-3">
                                <img class="img-fluid" src="{{ asset('asset/frontend/img/testimonial-4.jpg') }}"
                    alt="">
                    <div class="ml-3">
                        <h4>Client Name</h4>
                        <i>Beruf</i>
                    </div>
                </div>
                <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita
                    lorem. Dolor tempor ipsum sanct clita</p>
            </div> --}}
        </div>
        </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
            <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Kontaktieren Sie Uns
                    </h4>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>12345 Straße, Bayern, Deutschland</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+012 345 67890</p>
                    <p class="m-0"><i class="fa fa-envelope mr-2"></i>info@example.com</p>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Social Media</h4>
                    <p>Cup redeye café au lait pumpkin spice caffeine, mazagran americano ristretto robust
                        aftertaste.</p>
                    <div class="d-flex justify-content-start">
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i
                                class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Öffnungszeiten</h4>
                    <div>
                        <h6 class="text-white text-uppercase">Montag - Freitag</h6>
                        <p>9.00 - 23.00</p>
                        <h6 class="text-white text-uppercase">Samstag - Sonntags</h6>
                        <p>9.00 - 00.00</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5">
                    <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Newsletter</h4>
                    <p>Iced shop, mazagran, caramelization, bar pumpkin spice caramelization sugar turkish</p>
                    <div class="w-100">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 25px;"
                                placeholder="Ihre eMail">
                            <div class="input-group-append">
                                <button class="btn btn-primary font-weight-bold px-3">Registrieren</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5"
                style="border-color: rgba(256, 256, 256, .1) !important;">
                <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Domain</a>. All
                    Rights
                    Reserved.</a></p>
                <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML
                        Codex</a></p>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('asset/frontend/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('asset/frontend/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('asset/frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('asset/frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
        <script src="{{ asset('asset/frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
        <script src="{{ asset('asset/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

        <!-- Contact Javascript File -->
        <script src="{{ asset('asset/frontend/mail/jqBootstrapValidation.min.js') }}"></script>
        <script src="{{ asset('asset/frontend/mail/contact.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('asset/frontend/js/main.js') }}"></script>
    </body>

</html>
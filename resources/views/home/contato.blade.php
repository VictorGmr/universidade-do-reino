@extends('layouts.app')

@section('title')
    Universidade do Reino - Contato
@endsection

@section('content')


<section class="hero-wrap hero-wrap-2" style="background-image: url('/template_files/images/bg_1.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-2 bread">Contact Us</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row d-flex contact-info">
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Address</h3>
                    <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Contact Number</h3>
                    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Email Address</h3>
                    <p><a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                </div>
            </div>
            <div class="col-md-3 d-flex">
                <div class="bg-light align-self-stretch box p-4 text-center">
                    <h3 class="mb-4">Website</h3>
                    <p><a href="#">yoursite.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
        <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
                <form action="#">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                    </div>
                </form>
            </div>
            <div class="col-md-6 d-flex align-items-stretch">
                <div id="map"></div>
            </div>
        </div>
    </div>
</section>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="/template_files/js/jquery.min.js"></script>
<script src="/template_files/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/template_files/js/popper.min.js"></script>
<script src="/template_files/js/bootstrap.min.js"></script>
<script src="/template_files/js/jquery.easing.1.3.js"></script>
<script src="/template_files/js/jquery.waypoints.min.js"></script>
<script src="/template_files/js/jquery.stellar.min.js"></script>
<script src="/template_files/js/owl.carousel.min.js"></script>
<script src="/template_files/js/jquery.magnific-popup.min.js"></script>
<script src="/template_files/js/aos.js"></script>
<script src="/template_files/js/jquery.animateNumber.min.js"></script>
<script src="/template_files/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/template_files/js/google-map.js"></script>
<script src="/template_files/js/main.js"></script>

<script>
    function setNavbarActive(){
        document.getElementById("navbar-link-home").style.color = "white";
        document.getElementById("navbar-link-sobre").style.color = "white";
        document.getElementById("navbar-link-cursos").style.color = "white";
        document.getElementById("navbar-link-equipe").style.color = "white";
        document.getElementById("navbar-link-contato").style.color = "#fd5f00";
    }

    setNavbarActive();
</script>

@endsection

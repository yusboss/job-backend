@extends('layouts.templateLayout')

@section('title', 'About')

@section('content')
        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Job And Find A Talent</h1>
                        <p class="mb-4">Empowering Your Career Journey: Partner with Us to Land Your Dream Job and
                            Discover Exceptional Talent.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Personalized Career Guidance</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Targeted Job Matching</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Professional Resume Building</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Skill Enhancement Workshops</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Talent Acquisition Expertise</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Networking Opportunities</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Ongoing Support for Career Growth</p>
                        <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
@endsection
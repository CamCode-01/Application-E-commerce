
@extends('layouts.app')

@section('contenu')


    <section class="slider_section">
        <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
            <div class="carousel-inner">

                @foreach ($sliders as $slider)
                <div class="carousel-item active">
                    <img class="first-slide" src="storage/slider_images/{{$slider->slider_image}}" alt="First Slide">
                    @endforeach
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>{{$slider->description1}}</span>
                            <h1>{{$slider->description2}} </h1>
                            <a class="buynow" href="#">Acheter</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- <div class="carousel-item">
                    <img class="second-slide" src="{{asset('frontend/images/banner.jpg')}}" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Nouveaux</span>
                            <h1>Reduction de 25%</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Acheter</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="carousel-item">
                    <img class="third-slide" src="{{asset('frontend/images/banner.jpg')}}" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption relative">
                            <span>Nouveaux</span>
                            <h1>Reduction de 25%</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content
                                <br> of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                            <a class="buynow" href="#">Acheter</a>
                            <ul class="social_icon">
                                <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}


            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">
                    <div class="about_img">
                        <figure><img src="{{asset('frontend/images/about.png')}}" alt="img" /></figure>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">
                    <div class="about_box">
                        <h3>Apropos de nous</h3>
                        <span>Our Mobile Shop</span>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of It is a long established fact that a reader will be distracted by the </p>

                    </div>

            </div>
        </div>
    </div>
    </div>
    <!-- end about -->

    <!-- brand -->
    <div class="brand">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>


        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    @foreach ($produits as $produit)

                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img class="img-prod"src="storage/images_produit/{{$produit->image_produit}}" alt="" />
                            <h3><strong class="red">{{$produit->prix_produit}}</strong>fcfa</h3>
                            <span>{{$produit->nom_produit}}</span>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                            <i><img src="{{asset('frontend/images/star.png')}}"/></i>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12">
                        <a class="read-more">See More</a>
                    </div>


                </div>
            </div>
        </div>
    </div>



    <!-- end brand -->
    <!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>what say our clients</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clients_red">
        <div class="container">
            <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                    <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                    <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
                </ul>
                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="{{asset('frontend/icon/testimonial_qoute.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item active">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="{{asset('frontend/icon/testimonial_qoute.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="carousel-item">

                        <div class="testomonial_section">
                            <div class="full center">
                            </div>
                            <div class="full testimonial_cont text_align_center cross_layout">
                                <div class="cross_inner">
                                    <h3>Due markes<br><strong class="ornage_color">Rental</strong></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                    </p>
                                    <div class="full text_align_center margin_top_30">
                                        <img src="{{asset('frontend/icon/testimonial_qoute.png')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- end clients -->


    @endsection


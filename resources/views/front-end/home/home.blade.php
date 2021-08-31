@extends('front-end.master')
@section('body')
    <section class="w3l-main-slider" id="home">
        <!-- main-slider -->
        <div class="companies20-content">

            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5> New Born Baby!!!</h5>
                                        <p>Register your child for free today & Get Certificate</p>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{route('birth-reg')}}">Register /
                                            নিবন্ধন করুন</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>You Can Know About Your Application Status</h5>
                                        <p>Already Completed your registration? Then know about your application Status.</p>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{route('apl-status')}}">Check Status</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Get Your Certificate</h5>
                                        <p>Verify & your information. Also can download your online certificate.</p>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{route('birth-info')}}">Birth Information</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Having Problem?</h5>
                                        <p>If you are facing any kind of issue feel free to contact us. Or submit your problem.</p>
                                        <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="{{route('contact')}}">Contact</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>

        </div>



        <!-- //script -->
        <!-- /main-slider -->
    </section>


    <!--  services section -->
    <section class="w3l-index6" id="about">
        <div class="features-with-17_sur py-5">
            <div class="container py-lg-5">
                <div class="heading text-center mx-auto mb-5">
                    <h1 class="head">Online Birth Registration System  Bangladesh</h1>
                    <h5 class="my-3 head">Register now & Get an Online Certificate</h5>
                </div>
                <div class="features-with-17-top_sur mt-5 pt-3">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                            <div class="features-with-17-right-tp_sur">
                                <div class="features-with-17-left1 mb-3">
                                    <span class="fa fa-paint-brush" aria-hidden="true"></span>
                                </div>
                                <div class="features-with-17-left2">
                                    <h6><a href="#url">Easy</a></h6>
                                    <p> Easiest way to complete registration & Fully Free</p>
                                    <a href="Registration.php" class="actionbg">Read More </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                            <div class="features-with-17-right-tp_sur">
                                <div class="features-with-17-left1 mb-3">
                                    <span class="fa fa-thumbs-up" aria-hidden="true"></span>
                                </div>
                                <div class="features-with-17-left2">
                                    <h6><a href="#url">Reliable</a></h6>
                                    <p> A complete reliable sstem aslo effective.
                                        Get Certified Today</p>
                                    <a href="Registration.php" class="actionbg">Read More </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                            <div class="features-with-17-right-tp_sur">
                                <div class="features-with-17-left1 mb-3">
                                    <span class="fa fa-lock" aria-hidden="true"></span>
                                </div>
                                <div class="features-with-17-left2">
                                    <h6><a href="#url">Secure</a> </h6>
                                    <p>  A protected secure sytem to collect your informatuon </p>
                                    <a href="Registration.php" class="actionbg">Read More </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  //services section -->
    <!--  About section -->
    <div class="w3l-about1 py-5" id="about">
        <div class="container py-lg-3">

            <div class="aboutgrids row">
                <div class="col-lg-6 aboutgrid2">
                    <img src="{{asset('/')}}/images/34289.jpg" alt="Birth Registration System Bangladesh" class="img-fluid" />
                </div>
                <div class="col-lg-6 aboutgrid1 mt-lg-0 mt-4 pl-lg-5">
                    <h4>Online & Effective</h4>
                    <p>For overpopulated & Developing country like us manual child-birth registration is quite complex and ineffective .
                        Inaccurate birth registration records can cause problems like cost of registering a child, loss of registration certificate by the parent and child, inaccurate population statistics.
                        As accurate population statistics is essential in social services planning for any government for ensuring enough resources to meet needs common people.
                        According to Registration Status of Children across the World - Bangladesh has a Birth Registration rate of Less then 25%.
                        So we brought a stable mobile-based automated system for birth registration. The proposed system will be able to assist government officials in terms of having a portable and globally accessible system, speeding up child-birth registration process, reducing cost of registering a child and capable of keeping registration details for future use.</p>
                    <a class="btn btn-secondary btn-theme2" href="https://drive.google.com/file/d/1jAkB7DDJKZqJcUxXDBK7Tl5AdeozPv_n/view?usp=sharing"> Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!--  //About section -->
    <!-- specifications -->
    <section class="w3l-specifications-9">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-md-3">

                <div class="main-cont-wthree-fea row ">
                    <div class="grids-speci1 col-lg-3 col-6">
                        <div class="spec-2 text-center">
                            <span class="fa fa-hourglass"></span>
                            <h3 class="title-spe">242</h3>
                            <p>On Process</p>
                        </div>
                    </div>
                    <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                        <div class="spec-2 text-center">
                            <span class="fa fa-folder"></span>
                            <h3 class="title-spe">7380</h3>
                            <p>Applicants</p>
                        </div>
                    </div>
                    <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                        <div class="spec-2 text-center">
                            <span class="fa fa-smile-o"></span>
                            <h3 class="title-spe">220</h3>
                            <p>New Born</p>
                        </div>
                    </div>
                    <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                        <div class="spec-2 text-center">
                            <span class="fa fa-trophy"></span>
                            <h3 class="title-spe">24 </h3>
                            <p>Pending</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //specifications -->
    </section>
    <div class="products-4" id="gallery">
        <!-- Products4 block -->
        <div id="products4-block" class="text-center">
            <div class="container">
                <div class="heading text-center mx-auto mb-5">
                    <h3 class="head">Gallery</h3>

                </div>
                <input id="tab1" type="radio" name="tabs" checked>
                <label class="tabtle" for="tab1">All Projects</label>

                <input id="tab2" type="radio" name="tabs">
                <label class="tabtle" for="tab2">Users</label>

                <input id="tab3" type="radio" name="tabs">
                <label class="tabtle" for="tab3">Gallery</label>

                <input id="tab4" type="radio" name="tabs">
                <label class="tabtle" for="tab4">More</label>

                <section id="content1" class="tab-content text-left">
                    <div class="d-grid grid-col-3">
                        <div class="product">
                            <a href="{{asset('/')}}/images/g1.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/download.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g2.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/download%20(1).jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g3.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g3.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g4.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g4.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g5.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g5.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g6.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g6.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>


                    </div>
                </section>

                <section id="content2" class="tab-content text-left">
                    <div class="d-grid grid-col-3">
                        <div class="product">
                            <a href="{{asset('/')}}/images/g7.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g7.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g8.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g8.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g1.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g1.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g2.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g2.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g3.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g3.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g4.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g4.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                    </div>
                </section>

                <section id="content3" class="tab-content text-left">
                    <div class="d-grid grid-col-3">
                        <div class="product">
                            <a href="{{asset('/')}}/images/g5.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g5.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g6.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g6.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g7.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g7.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                    </div>
                </section>

                <section id="content4" class="tab-content text-left">
                    <div class="d-grid grid-col-3">
                        <div class="product">
                            <a href="{{asset('/')}}/images/g8.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g8.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                        <div class="product">
                            <a href="{{asset('/')}}/images/g1.jpg" data-lightbox="example-set"
                               data-title="Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam architecto, ex veritatis">
                                <figure>
                                    <img src="{{asset('/')}}/images/g1.jpg" class="img-responsive" alt="" />
                                </figure>
                            </a>

                        </div>
                    </div>
                </section>
            </div>
        </div>
        <!-- Products4 block -->
    </div>

    <!-- customers4 block -->
    <section class="w3l-customers-4" id="testimonials">
        <div id="customers4-block" class="py-5">
            <div class="container py-md-3">


                <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel items -->
                    <div class="carousel-inner pb-5 mb-md-5 pt-md-5">

                        <div class="carousel-item active">
                            <div class="section-title">
                                <div class="item-top">
                                    <div class="item text-center">
                                        <div class="imgTitle">
                                            <img src="{{asset('/')}}/images/c1.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <h6 class="mt-3">Noyela Ahmed</h6>
                                        <p class="">Mother</p>
                                        <h5>"Satisfied with the process" </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.item-->

                        <div class="carousel-item">
                            <div class="section-title">
                                <div class="item-top">
                                    <div class="item text-center">
                                        <div class="imgTitle">
                                            <img src="{{asset('/')}}/images/c2.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <h6 class="mt-3">Amaliya</h6>
                                        <p class="">Guardian</p>
                                        <h5>" Quite Impressive , Iterface " </h5>

                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--.item-->
                        <div class="carousel-item">
                            <div class="section-title">
                                <div class="item-top">
                                    <div class="item text-center">
                                        <div class="imgTitle">
                                            <img src="{{asset('/')}}/images/c3.jpg" class="img-responsive" alt="" />
                                        </div>
                                        <h6 class="mt-3">Sabbir Ahmed</h6>
                                        <p class="">Engineer</p>
                                        <h5>" Easier way to do complete registration " </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                </div>




            </div>
        </div>


    </section>
    <section class="partners py-5" id="partners">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">Project - Documentation</h3>
                <p class="my-3 head">Research Journal </p>
            </div>
            <div class="inner-sec-w3ls pt-5 mt-3">
                <div class="sponsers-icon text-center">
                    <iframe class="col-sm-12" src="https://drive.google.com/file/d/1jAkB7DDJKZqJcUxXDBK7Tl5AdeozPv_n/preview" width="640" height="600" allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

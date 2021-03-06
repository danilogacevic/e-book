<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">

<head>

    <!--meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Monografija Crne Gore je jedna dobra knjiga, a dako i sto para donese !">
    <meta name="keywords" content="Monografija Crna Gora,Crna Gora landscapes,Montenegro Touristic organization">
    <!--meta tags ends-->

    <title>Monografija Crne Gore, mjesto dobre zajebancije !</title>


    <!--- Links to google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800%7cCardo:400italic%7cMerriweather:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <!-- Links to fonts ends -->


    <!-- Open Graph data -->

        <meta property="og:title" content="Monografija Crne Gore">
        <meta property="og:type" content="article">
        <meta property="og:url" content="http://e-book.dev">
        <meta property="og:image" content="http://e-book.dev/images/images.jpg">
        <meta property="og:description" content="This is an interesting book about Montenegro landscapes">

    <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="Monografija Crne Gore">
        <meta name="twitter:description" content="Monografija Crne Gore" content="Jedna very interesting book about Montenegro">
        <meta name="twitter:creator" content="@author_handle">

    <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="Monografija Crne Gore">
        <meta itemprop="description" content="Monografija Crne Gore" content="Veoma dobra knjiga o nasoj Crnoj Gori">
        <meta itemprop="image" content="http://e-book.dev/images/images.jpg">


    <!-- Template css -->
	
	
   <link rel="stylesheet" type="text/css" href="{{asset('css/template.css')}}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

 

</head>

<!-- 3. body starts -->

<body>

    <!-- Start: Preloader section -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>
    <!-- End: Preloader section -->

    <!-- 4.Document wrapper starts-->
    <main>

        <!-- main header starts-->
        <header id="header">

            <!-- top navigation -->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#">Brand</a> -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#hero">Home<span class="sr-only">(current)</span></a></li>
                            <li><a data-scroll href="#book-trailer">Trailer</a></li>
                            <li><a data-scroll href="#what-you-learn">Learn</a></li>
                            <li><a data-scroll href="#chapters">Chapters</a></li>
                            <li><a data-scroll href="#free-chapter">free chapter</a></li>
                            <li><a data-scroll href="#gallery">gallery</a></li>
                            <li><a data-scroll href="#reviews">reviews</a></li>
                            <li><a data-scroll href="#read-anywhere">read</a></li>
                            <li><a data-scroll href="#bonuses">bonuses</a></li>
                            <li><a data-scroll href="#pricing">pricing</a></li>
                            <li><a data-scroll href="#faq">faq</a></li>
                            <li><a data-scroll href="#author">author</a></li>
                            
                            @if(!Auth::check())

                                <li><a href="javascript:void(0)" id="registruvanje">login</a></li>

                            @elseif(Auth::check())

                                <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Odjava
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                            @endif
                            

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-->
            </nav>
            <!-- end top navigation -->

        </header>
        <!-- main header ends-->

        <!-- Hero section starts-->
        <section id="hero" class="hero page">
            <div class="details">
                <div class="container-custom group">
                    <div class="package wow fadeInUp">
                        <!-- viewport -->
                        <div id="items">
                            <!-- cube -->
                            <div id="front" class="front">
                                <img src="images/book/book-front-large.png" alt='published-img'>
                            </div>

                            <div class="side">
                            </div>

                            <div id="back" class="back">
                                <img src="images/book/book-back-large.png" alt='published-img'>
                            </div>
                        </div>
                    </div>
                    <div class="book-buttons">
                        <button class="flip-book book-button wow fadeInLeft" data-wow-delay="0.3s">
                            <i class="fa fa-exchange flip-icon"></i>
                            <span>flip to back</span>
                        </button>

                        <div class="enlarge wow fadeInLeft" data-wow-delay="0.6s">
                            <a class="front-img popup" href="images/book/book-front-large.png" data-effect="mfp-move-horizontal"></a>
                            <a class="back-img popup" href="images/book/book-back-large.png" data-effect="mfp-move-horizontal"></a>
                            <button class="book-button">
                                <i class="fa fa-expand"></i>
                                <span>enlarge</span>
                            </button>
                        </div>

                        <!-- look inside button -->
                        <ul id="inline-popups" class="look-inside wow fadeInLeft" data-wow-delay="0.9s">
                            <li>
                                <i class="fa fa-search-plus"></i>
                                <a href="#test-popup" data-effect="mfp-move-horizontal">look inside</a></li>
                        </ul>

                        <!-- Look Inside Content -->
                        <div id="test-popup" class="white-popup mfp-with-anim mfp-hide">
                            <div class="popup-header">
                                <span class="popup-title">Podcast 101 |</span><span> Master The Art of Conversation and Business</span>
                            </div>
                            <div class="white-popup-inner">
                                <div class="book-wrapper text-center">
                                    <div class="popup-book-page">
                                        <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                    </div>
                                    <div class="popup-book-page">
                                        <img src="images/book/page1.jpg" class="img-responsive look-inside-page" alt='published-img'>
                                    </div>
                                    <div class="popup-book-page">
                                        <img src="images/book/page1.jpg" class="img-responsive look-inside-page" alt='published-img'>
                                    </div>
                                    <div class="popup-book-page">
                                        <img src="images/book/book-back-large.png" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <button id="playpausebtn" class="listen book-button wow fadeInLeft" tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="bottom" data-content="You can put your audible book excerpt here" data-wow-delay="1.2s">
                            <i class="fa fa-play-circle-o"></i>
                            <span>Listen</span>
                        </button>
                    </div>



                    <div class="features clearfix wow fadeInUp" data-wow-delay="0.3s">
                        <h3 class="text-center">Master the Art of Business</h3>
                        <h1 class="text-center">Podcast 101</h1>
                        <h5 class="text-center">by Wahid Polin, #1 bestselling business author</h5>
                        <blockquote>
                            A masterpiece. This is the best book I everyone interested in business. Lorem ipsum dolor sit amet, consectetur adipisicing elit, Sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
                            <cite class="text-left"> <span class="hero-cite-name">adam steve</span> founder of <span>madebywahid.com</span> </cite>
                        </blockquote>

                        <button class="buy-now btn btn-block custom-button">order your copy</button>

                    </div>
                </div><!-- End: .container-custom -->
            </div><!-- End: .details -->
        </section>
        <!-- Hero section ends-->

         @if(session('message'))

            <div class='bg-danger' style='position:fixed;top:50%;left:82%;font-weight:bold;' id='paypalpor'>{{session('message')}}</div>

    

 @endif

        <!-- as seen on section starts-->
        <section id="as-seen-on" class="as-seen-on page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">This book has been featured on</h3>
                    </div>
                    <div class="col-md-12">
                        <ul class="row">                            
                                <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                                <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                                <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                                <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                                <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                                <li class="col-xs-6 col-sm-4 col-md-2 as-seen-img"><img src="http://placehold.it/102X84" alt='published-img' class="img-responsive" width="80"></li>
                        </ul>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .row --><!-- End: .container-->
        </section>
        <!-- as seen on section ends -->

        <!-- book trailer -->
        <section id="book-trailer" class="book-trailer page">
            <div class="container">
                <div class="trailer-text text-center">
                    <a class="popup-vimeo wow fadeInUp" href="//vimeo.com/45830194">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                            <g>
                                <path fill="#fff" stroke="none" stroke-width="2" stroke-miterlimit="10" d="M53.92,10.081
                                                    c12.107,12.105,12.107,31.732,0,43.838c-12.106,12.108-31.734,12.108-43.839,0c-12.107-12.105-12.107-31.732,0-43.838
                                                    C22.186-2.027,41.813-2.027,53.92,10.081z" />
                                <polygon fill="#e9ba00" stroke="none" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" points="21,16 52,32 21,48   " />

                            </g>
                        </svg>
                    </a>
                    <h3 class="wow fadeInUp">watch the book trailer</h3>
                </div>
            </div>
        </section>
        <!-- book trailer ends -->

        @include('includes.modal')

        <!-- what you will learn -->
        <section id="what-you-learn" class="what-you-learn page">
            <div class="container">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-sm-12 text-center">
                            <h1 class="text-center">What you will <span>learn</span></h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-10 col-md-offset-1 wow fadeInUp">
                        <div id="what-you-learn-carousel" class="carousel slide carousel-fade clearfix" data-ride="carousel" data-interval="false">
                            <div class="row no-gutter">
                                <div class="col-sm-6">
                                    <div class="book-page-1 papers-1">
                                        <div class="book-page-1-inner ">
                                            <!-- Indicators -->
                                            <ol class="carousel-indicators">
                                                <li data-target="#what-you-learn-carousel" data-slide-to="0" class="active">
                                                    Learn iOS design
                                                </li>
                                                <li data-target="#what-you-learn-carousel" data-slide-to="1">
                                                    Designing for iOS 9
                                                </li>
                                                <li data-target="#what-you-learn-carousel" data-slide-to="2">
                                                    Learn Colors
                                                </li>
                                                <li data-target="#what-you-learn-carousel" data-slide-to="3">
                                                    Learn Typography
                                                </li>
                                                <li data-target="#what-you-learn-carousel" data-slide-to="4">
                                                    Getting your money
                                                </li>
                                                <li data-target="#what-you-learn-carousel" data-slide-to="5">
                                                    Why clients don't pay?
                                                </li>
                                                <li data-target="#what-you-learn-carousel" data-slide-to="6">
                                                    Covering your ass.
                                                </li>

                                            </ol>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="book-page-2 papers-2">
                                        <div class="book-page-2-inner ">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner" role="listbox">
                                                <div class="item active animated fadeInUp delay-2">

                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                    <p> Then, you'll learn about the more advanced techniques introduced in iOS for transitional interfaces and physics animations combined with gestures.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                                <div class="item animated fadeInUp delay-2">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                                                    <p>ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                                <div class="item animated fadeInUp delay-2">

                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                    <p> Then, you'll learn about the more advanced techniques introduced in iOS for transitional interfaces and physics animations combined with gestures.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                                <div class="item animated fadeInUp delay-2">

                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                    <p> Then, you'll learn about the more advanced techniques introduced in iOS for transitional interfaces and physics animations combined with gestures.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                                <div class="item animated fadeInUp delay-2">

                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                    <p> Then, you'll learn about the more advanced techniques introduced in iOS for transitional interfaces and physics animations combined with gestures.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                                <div class="item animated fadeInUp delay-2">

                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                    <p> Then, you'll learn about the more advanced techniques introduced in iOS for transitional interfaces and physics animations combined with gestures.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                                <div class="item animated fadeInUp delay-2">

                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                    <p> Then, you'll learn about the more advanced techniques introduced in iOS for transitional interfaces and physics animations combined with gestures.</p>
                                                    <p>The simplification of UI design enables the focus in animation. In this lesson, you'll learn the basic techniques to animations such as slide, scale and color transitions.</p>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                 </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- what you will learn ends -->

        <!-- book facts start -->
        <section id="book-facts" class="book-facts page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="text-center">Here are some facts about the book</h3>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="fact">
                            <span class="fact-number">1000</span>
                            <span>copies sold</span>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-2">
                        <div class="fact">
                            <span class="fact-number">94%</span>
                            <span>on Goodreads</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="fact">
                            <span class="fact-number">5.00</span>
                            <span>amazon ratings</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="fact">
                            <span class="fact-number">200</span>
                            <span>pages</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="fact">
                            <span class="fact-number">3.5</span>
                            <span>hour read</span>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                        <div class="fact">
                            <span class="fact-number">200</span>
                            <span>pages</span>
                        </div>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- book facts ends -->

        <!-- chapters-->
        <section id="chapters" class="chapters page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">Chapters</h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="chapter text-center">
                            <div class="front">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 1</h3>
                                <h4>Getting started</h4>
                            </div>
                            <div class="back">
                                <div class="chapter-back-top clearfix">
                                    <img src="http://placehold.it/112X82" alt='published-img'>
                                    <h3>Chapter 1</h3>
                                    <h4>Getting started</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="chapter text-center">
                            <div class="front">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 2</h3>
                                <h4>Getting started</h4>
                            </div>
                            <div class="back">
                                <div class="chapter-back-top clearfix">
                                    <img src="http://placehold.it/112X82" alt='published-img'>
                                    <h3>Chapter 2</h3>
                                    <h4>Getting started</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="chapter text-center">
                            <div class="front">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 3</h3>
                                <h4>Getting started</h4>
                            </div>
                            <div class="back">
                                <div class="chapter-back-top clearfix">
                                    <img src="http://placehold.it/112X82" alt='published-img'>
                                    <h3>Chapter 3</h3>
                                    <h4>Getting started</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="chapter text-center">
                            <div class="front">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 4</h3>
                                <h4>Getting started</h4>
                            </div>
                            <div class="back">
                                <div class="chapter-back-top clearfix">
                                    <img src="http://placehold.it/112X82" alt='published-img'>
                                    <h3>Chapter 4</h3>
                                    <h4>Getting started</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="chapter text-center">
                            <div class="front">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 5</h3>
                                <h4>Getting started</h4>
                            </div>
                            <div class="back">
                                <div class="chapter-back-top clearfix">
                                    <img src="http://placehold.it/112X82" alt='published-img'>
                                    <h3>Chapter 5</h3>
                                    <h4>Getting started</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4">
                        <div class="chapter text-center">
                            <div class="front">
                                <img src="http://placehold.it/112X82" alt='published-img'>
                                <h3>Chapter 6</h3>
                                <h4>Getting started</h4>
                            </div>
                            <div class="back">
                                <div class="chapter-back-top clearfix">
                                    <img src="http://placehold.it/112X82" alt='published-img'>
                                    <h3>Chapter 6</h3>
                                    <h4>Getting started</h4>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                            </div>
                        </div>
                    </div>
                 </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- end of chapters-->

        <!-- free chapter starts -->
        <section id="free-chapter" class="free-chapter page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 main-heading">
                        <h1 class="text-center">Get a free <span>chapter</span></h1>
                        <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="form-nav">
                            <ul>
                                <li class="text-center active first-step wow fadeInLeft" data-wow-delay="0.3s">first step</li>
                                <li class="text-center second-step wow fadeInLeft" data-wow-delay="0.6s">second step</li>
                            </ul>
                        </div>

                        <div class="free-chapter-form">
                            <div class="form-wrapper form-1">
                                
                                    <p class="subscription-failed"></p>
                                    
                                    <button class="btn btn-block custom-button" id="free-chapter">Download Now</button>
                             
                            </div>

                            <div class="form-wrapper form-2" style="display:none">
                                <form id="mailchimp-subscribe-2">
                                    <p class="subscription-success"></p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 hidden-xs hidden-sm">
                        <figure class="free-chapter-img img-1">
                            <img src="images/free-chapter/chapter.png" class="img-responsive" alt='published-img'>
                        </figure>
                    </div>
                 </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- end of free chapter -->

        <!--gallery starts -->
        <section id="gallery" class="gallery page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">Gallery</h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>
            
            

                    <div class="portfolio-items grid">
                        <ul id="grid-items" class="clearfix">
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                    <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>

                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                    <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>

                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                    <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                    <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>

                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal">
                                    <img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                            <li class="col-sm-6 col-md-4 gallery-img text-center">
                                <a href="http://placehold.it/800x600" data-effect="mfp-move-horizontal"><img alt='published-img' src="http://placehold.it/800x600" class="img-responsive">
                                    <span class="img-caption text-center"> la vien rose</span>
                                    <div class="img-hover"></div>
                                </a>
                            </li>
                         </ul>
                    </div>
                    
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!--gallery ends -->

        <!--reviews -->
        <section id="reviews" class="reviews page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <h1 class="sr-only">Reviews</h1>
                    <div id="review-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                        <div class="col-xs-12">
                            <ol class="carousel-indicators">
                                <li data-target="#review-slider" data-slide-to="0" class="active wow fadeInLeft" data-wow-delay="0.3s">adam butler</li>
                                <li data-target="#review-slider" data-slide-to="1" class="wow fadeInLeft" data-wow-delay="0.6s">naok jashim</li>
                                <li data-target="#review-slider" data-slide-to="2" class="wow fadeInLeft" data-wow-delay="0.9s">wahid polin</li>
                                <li data-target="#review-slider" data-slide-to="3" class="wow fadeInLeft" data-wow-delay="1.2s">niloy rahman</li>
                            </ol>
                        </div>
                        <!-- Wrapper for slides -->
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active clearfix fadeInUp delay-2">
                                        <div class="col-xs-12">
                                            <blockquote>

                                                laboris nisi ut aliquip ex ea commodolaboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                consequat.

                                            </blockquote>

                                        </div>
                                        <div class="col-xs-12 blockquote-cite">
                                            <div class="row no-gutter">
                                                <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                    <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                                </div>
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <div class="cite-right">
                                                        <span class="cite-name">Adam Butler</span>
                                                        <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item clearfix fadeInUp delay-2">
                                        <div class="col-xs-12">
                                            <blockquote>

                                                Art, design, people, and technology weave the fabric of culture. We gather to untangle and twist the threads. Brooklyn 1.0 takes play seriously. Common concerns. Uncommon formats. Break what needs to be broken. Reinvent the event. Expect the unexpected.

                                            </blockquote>

                                        </div>
                                        <div class="col-xs-12 blockquote-cite">
                                            <div class="row no-gutter">
                                                <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                    <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                                </div>
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <div class="cite-right">
                                                        <span class="cite-name">Adam Butler</span>
                                                        <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item clearfix fadeInUp delay-2">
                                        <div class="col-xs-12">
                                            <blockquote>

                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit.

                                            </blockquote>

                                        </div>
                                        <div class="col-xs-12 blockquote-cite">
                                            <div class="row no-gutter">
                                                <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                    <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                                </div>
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <div class="cite-right">
                                                        <span class="cite-name">Adam Butler</span>
                                                        <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item clearfix fadeInUp delay-2">
                                        <div class="col-xs-12">
                                            <blockquote>

                                                Art, design, people, and technology weave the fabric of culture. We gather to untangle and twist the threads. Brooklyn 1.0 takes play seriously. Common concerns. Uncommon formats. Break what needs to be broken. Reinvent the event. Expect the unexpected.

                                            </blockquote>

                                        </div>
                                        <div class="col-xs-12 blockquote-cite">
                                            <div class="row no-gutter">
                                                <div class="col-xs-2 col-xs-offset-4 col-sm-2 col-sm-offset-5 col-md-1 col-md-offset-6">
                                                    <span class="cite-img"><img src="http://placehold.it/127X128" class="img-responsive" alt='published-img'></span>
                                                </div>
                                                <div class="col-xs-6 col-sm-5 col-md-5">
                                                    <div class="cite-right">
                                                        <span class="cite-name">Adam Butler</span>
                                                        <span class="cite-url"><a href="">madebywahid.com</a></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!--reviews ends -->

        <!--read-anywhere starts -->
        <section id="read-anywhere" class="read-anywhere page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-md-12 text-center">

                            <h1 class="text-center">Read anywhere</h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div id="read-anywhere-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                            <div class="row">

                                <!-- Indicators -->
                                <div class="col-md-6">
                                    <ol class="carousel-indicators clearfix">
                                        <li data-target="#read-anywhere-slider" data-slide-to="0" class="mobile active wow fadeInLeft" data-wow-delay="0.3s">
                                            <img alt='published-img' src="images/read-anywhere/phone.svg"> mobile
                                        </li>
                                        <li data-target="#read-anywhere-slider" data-slide-to="1" class="kindle wow fadeInLeft" data-wow-delay="0.6s">
                                            <img alt='published-img' src="images/read-anywhere/tablet.svg"> tablet
                                        </li>
                                        <li data-target="#read-anywhere-slider" data-slide-to="2" class="tablet wow fadeInLeft" data-wow-delay="0.3s">
                                            <img alt='published-img' src="images/read-anywhere/laptop.svg"> laptop
                                        </li>
                                        <li data-target="#read-anywhere-slider" data-slide-to="3" class="laptop wow fadeInLeft" data-wow-delay="0.6s">
                                            <img alt='published-img' src="images/read-anywhere/tablet.svg"> kindle
                                        </li>
                                    </ol>
                                </div>

                                <div class="col-md-6">
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">

                                        <div class="item active">
                                            <img alt='published-img' src="images/read-anywhere/iphone.png" class="read-iphone">
                                        </div>

                                        <div class="item">
                                            <img alt='published-img' src="images/read-anywhere/ipad.png" class="read-ipad">
                                        </div>

                                        <div class="item">
                                            <img alt='published-img' src="images/read-anywhere/laptop.png" class="read-laptop">
                                        </div>

                                        <div class="item">
                                            <img alt='published-img' src="images/read-anywhere/kindle.png" class="read-kindle">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!--read-anywhere ends -->

        <!-- bonuses starts -->
        <section id="bonuses" class="bonuses page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">Bonuses</h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>

                    <div class="bonus clearfix">

                        <div class="col-md-6 col-md-offset-1 col-md-push-5 hidden-xs">
                            <figure class="bonus-img img-1 bonus-card">
                                <img src="images/bonuses/bonus-img-2.png" class="img-responsive" alt='published-img'>
                            </figure>
                        </div>

                        <div class="col-md-5 col-md-pull-7">
                            <h4 class="text-center">Bonus #1</h4>
                            <h2 class="text-center">Loem ipsum dolor sit amet</h2>
                            <div class="bonus-span text-center">
                                <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                            
                        </div>
                    </div>

                    <div class="bonus clearfix">
                        <div class="col-md-7 hidden-xs">
                            <figure class="bonus-img img-1 img-stack">
                                <img src="images/bonuses/img-stack.png" class="img-responsive" alt='published-img'>
                            </figure>

                        </div>
                        <div class="col-md-5">
                            <h4 class="text-center">Bonus #2</h4>
                            <h2 class="text-center">Loem ipsum dolor sit amet</h2>
                            <div class="bonus-span text-center">
                                <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor.</p>
                        </div>
                    </div>
                    <div class="bonus clearfix">

                        <div class="col-md-6 col-md-offset-1 col-md-push-5 hidden-xs">
                            <figure class="bonus-img bonus-browser">
                                <img src="images/bonuses/bonus-img.png" class="img-responsive" alt='published-img'>
                            </figure>
                        </div>

                        <div class="col-md-5 col-md-pull-7">
                            <h4 class="text-center">Bonus #1</h4>
                            <h2 class="text-center">Loem ipsum dolor sit amet</h2>
                            <div class="bonus-span text-center">
                                <span class="bonus-price">$17</span><span class="bonus-free">free</span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod dolor.</p>
                        </div>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- bonuses ends -->

        <!-- pricing section starts -->
        <section id="pricing" class="pricing page">
            <div class="container">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">Package <span>&</span> Pricing</h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>
                    <div id="pricing-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                        <!-- Indicators -->
                        <div class="col-md-12 pricing-nav">
                            <ol class="carousel-indicators">
                                <li data-target="#pricing-slider" data-slide-to="0" class="active wow fadeInLeft" data-wow-delay="0.3s">Paperback</li>
                                <li data-target="#pricing-slider" data-slide-to="1" class="wow fadeInLeft" data-wow-delay="0.6s">Hardcover</li>
                                <li data-target="#pricing-slider" data-slide-to="2" class="wow fadeInLeft" data-wow-delay="0.9s">Ebook</li>
                                <li data-target="#pricing-slider" data-slide-to="3" class="wow fadeInLeft" data-wow-delay="1.2s">Audible</li>
                            </ol>
                        </div>

                        <!-- Wrapper for slides -->
                        <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                            <div class="carousel-inner" role="listbox">
                                <div class="item  fadeInUp delay-2 animated active">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Lorem ipsum dolor sit amet set.</li>
                                                <li>Excepteur sint occaecat cupidatat non.</li>
                                                <li>Sunt in culpa qui officia deserunt mollit</li>
                                                <li>Lorem ipsum dolor sit amet set.</li>
                                            </ul>

                                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="business" value="danilogacevic.pg-facilitator@gmail.com">
                                            <input type="hidden" name="currency_code" value="US">
                                                                                        
                                          
                                            
                                        
                                            
                                            <input type="hidden" name="item_name_1" value="Monography">
                                            <input type="hidden" name="item_number_1" value="1">
                                            <input type="hidden" name="amount_1" value="2">
                                            <input type="hidden" name="quantity_1" value="1">
                                            
                                            <input type="hidden" name="rm" value="2">

                                            <input type="hidden" name="return" value="">
                                                                        
                                        
                                        @if(Auth::user())       

                                <div class="col-sm-6 col-sm-offset-3">
{!! Form::select('custom', [''=>'Choose Language','http://jzuobkotor.me/thankyou?lang=english&product=book'=>'English','http://jzuobkotor.me/thankyou?lang=french&product=book'=>'French','http://jzuobkotor.me/thankyou?lang=spanish&product=book'=>'Spanish','http://jzuobkotor.me/thankyou?lang=german&product=book'=>'German','http://jzuobkotor.me/thankyou?lang=italian&product=book'=>'Italian','http://jzuobkotor.me/thankyou?lang=russian&product=book'=>'Russian','http://jzuobkotor.me/thankyou?lang=polish&product=book'=>'Polish','http://jzuobkotor.me/thankyou?lang=czech&product=book'=>'Czech','http://jzuobkotor.me/thankyou?lang=turkish&product=book'=>'Turkish','http://jzuobkotor.me/thankyou?lang=arabic&product=book'=>'Arabic','http://jzuobkotor.me/thankyou?lang=chinese&product=book'=>'Chinese'], null, ['class'=>'form-control language','required'=>'required'])!!}
                                </div>
                                
                            
                                                                
                                                {!! Form::button('Buy now',['class'=>'btn btn-block custom-button','type'=>'image','name'=>'upload'])!!}

                                        @else

                                            <a class="btn btn-block custom-button" href="javascript:void(0)">Register and buy</a>

                                        @endif
                                            
                                                {!! Form::close() !!}

                                            
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>

                                <div class="item  fadeInUp delay-2 animated">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Unlimited access to all courses</li>
                                                <li>Free Membership of juke</li>
                                                <li>No contract or commitments</li>
                                                <li>Unlimited access to screencasts</li>
                                            </ul>

                                            <button class="btn btn-block custom-button">Buy Now</button>
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>

                                <div class="item  fadeInUp delay-2 animated">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Unlimited access to all courses</li>
                                                <li>Free Membership of juke</li>
                                                <li>No contract or commitments</li>
                                                <li>Unlimited access to screencasts</li>
                                            </ul>

                                            
                                            

                                            <button class="btn btn-block custom-button">Buy Now</button>
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>

                                <div class="item  fadeInUp delay-2 animated">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Unlimited access to all courses</li>
                                                <li>Free Membership of juke</li>
                                                <li>No contract or commitments</li>
                                                <li>Unlimited access to screencasts</li>
                                            </ul>

                                            <button class="btn btn-block custom-button">Buy Now</button>
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- pricing section ends -->

         <!-- pricing section starts -->
        <section id="pricing" class="pricing page">
            <div class="container">
                <div class="row">
                    <div class="main-heading clearfix">
                        <div class="col-md-12 text-center">
                            <h1 class="text-center">Package <span>&</span> Pricing</h1>
                            <h3 class="text-center">All Taskers are screened for quality and reliablity.</h3>
                        </div>
                    </div>
                    <div id="pricing-slider" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
                        <!-- Indicators -->
                        <div class="col-md-12 pricing-nav">
                            <ol class="carousel-indicators">
                                <li data-target="#pricing-slider" data-slide-to="0" class="active wow fadeInLeft" data-wow-delay="0.3s">Paperback</li>
                                <li data-target="#pricing-slider" data-slide-to="1" class="wow fadeInLeft" data-wow-delay="0.6s">Hardcover</li>
                                <li data-target="#pricing-slider" data-slide-to="2" class="wow fadeInLeft" data-wow-delay="0.9s">Ebook</li>
                                <li data-target="#pricing-slider" data-slide-to="3" class="wow fadeInLeft" data-wow-delay="1.2s">Audible</li>
                            </ol>
                        </div>

                        <!-- Wrapper for slides -->
                        <div class="col-md-10 col-md-offset-1 wow fadeInUp">
                            <div class="carousel-inner" role="listbox">
                                <div class="item  fadeInUp delay-2 animated active">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Lorem ipsum dolor sit amet set.</li>
                                                <li>Excepteur sint occaecat cupidatat non.</li>
                                                <li>Sunt in culpa qui officia deserunt mollit</li>
                                                <li>Lorem ipsum dolor sit amet set.</li>
                                            </ul>

                                            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                                            <input type="hidden" name="cmd" value="_cart">
                                            <input type="hidden" name="business" value="danilogacevic.pg-facilitator@gmail.com">
                                            <input type="hidden" name="currency_code" value="US">
                                                                                        
                                          
                                            
                                        
                                            
                                            <input type="hidden" name="item_name_1" value="Travel guide">
                                            <input type="hidden" name="item_number_1" value="1">
                                            <input type="hidden" name="amount_1" value="2">
                                            <input type="hidden" name="quantity_1" value="1">
                                            
                                            <input type="hidden" name="rm" value="2">

                                            <input type="hidden" name="return" value="">
                                                                        
                                        
                                                            
                                @if(Auth::user())       

                                <div class="col-sm-6 col-sm-offset-3">
{!! Form::select('custom', [''=>'Choose Language','http://jzuobkotor.me/thankyou?lang=english&product=guide'=>'English','http://jzuobkotor.me/thankyou?lang=french&product=guide'=>'French','http://jzuobkotor.me/thankyou?lang=spanish&product=guide'=>'Spanish','http://jzuobkotor.me/thankyou?lang=german&product=guide'=>'German','http://jzuobkotor.me/thankyou?lang=italian&product=guide'=>'Italian','http://jzuobkotor.me/thankyou?lang=russian&product=guide'=>'Russian','http://jzuobkotor.me/thankyou?lang=polish&product=guide'=>'Polish','http://jzuobkotor.me/thankyou?lang=czech&product=guide'=>'Czech','http://jzuobkotor.me/thankyou?lang=turkish&product=guide'=>'Turkish','http://jzuobkotor.me/thankyou?lang=arabic&product=guide'=>'Arabic','http://jzuobkotor.me/thankyou?lang=chinese&product=guide'=>'Chinese'], null, ['class'=>'form-control language','required'=>'required'])!!}
                                </div>
                                
                            
                                                                
                                                {!! Form::button('Buy now',['class'=>'btn btn-block custom-button','type'=>'image','name'=>'upload'])!!}

                                        @else

                                            <a class="btn btn-block custom-button" href="javascript:void(0)">Register and buy</a>

                                        @endif
                                            
                                                {!! Form::close() !!}

                                            <!-- <button class="btn btn-block custom-button">Buy Now</button> -->
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>

                                <div class="item  fadeInUp delay-2 animated">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Unlimited access to all courses</li>
                                                <li>Free Membership of juke</li>
                                                <li>No contract or commitments</li>
                                                <li>Unlimited access to screencasts</li>
                                            </ul>

                                            <button class="btn btn-block custom-button">Buy Now</button>
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>

                                <div class="item  fadeInUp delay-2 animated">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Unlimited access to all courses</li>
                                                <li>Free Membership of juke</li>
                                                <li>No contract or commitments</li>
                                                <li>Unlimited access to screencasts</li>
                                            </ul>

                                            
                                            

                                            <button class="btn btn-block custom-button">Buy Now</button>
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>

                                <div class="item  fadeInUp delay-2 animated">
                                    <div class="row">

                                        <div class="col-md-7">
                                            <div class="price text-center">
                                                <span class="pricing-dollar">$</span><span class="pricing-number">29</span>
                                            </div>

                                            <ul>
                                                <li>Unlimited access to all courses</li>
                                                <li>Free Membership of juke</li>
                                                <li>No contract or commitments</li>
                                                <li>Unlimited access to screencasts</li>
                                            </ul>

                                            <button class="btn btn-block custom-button">Buy Now</button>
                                        </div>

                                        <div class="col-md-5  hidden-xs hidden-sm pricing-book">
                                            <img src="images/book/book-front-large.png" class="img-responsive" alt='published-img'>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- pricing section ends -->

        <!-- Faq section starts -->
        <section id="faq" class="faqs page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center">Frequently asked questions</h3>
                    </div>
                    <div class="col-md-5 col-md-offset-1">

                        <div class="faq">
                            <h4 class="text-center">Lorem ipsum dolor sit amet?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                        </div>

                        <div class="faq">
                            <h4 class="text-center">Labore et dolore magna aliqua?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                        </div>

                        <div class="faq">
                            <h4 class="text-center">Lorem ipsum dolor sit amet?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                        </div>
                    </div>

                    <div class="col-md-5 ">
                        <div class="faq">
                            <h4 class="text-center">Lorem ipsum dolor sit amet?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                        </div>

                        <div class="faq">
                            <h4 class="text-center">Lorem ipsum dolor?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                        </div>

                        <div class="faq">
                            <h4 class="text-center">Labore et magna aliqua?</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis.</p>
                        </div>

                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- Faq section ends -->

        <!--Author section starts -->
        <section id="author" class="author page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="text-center">About the <span>author</span></h1>
                            </div>
                            <div class="col-md-5 col-md-offset-1 visible-xs visible-sm">
                                <img src="http://placehold.it/416X403" class="img-responsive" alt='published-img'>
                            </div>
                            <div class="col-md-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                            <div class="col-md-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <ul class="author-social">
                                    <li class="wow fadeInLeft" data-wow-delay="0.3s">
                                        <a href=""><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.5s">
                                        <a href=""><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.7s">
                                        <a href=""><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-delay="0.9s">
                                        <a href=""><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.1s">
                                        <a href=""><i class="fa fa-dribbble"></i></a>
                                    </li>
                                    <li class="wow fadeInLeft" data-wow-delay="1.3s">
                                        <a href=""><i class="fa fa-behance"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-xs hidden-sm">
                        <img src="images/author/1.jpg" class="img-responsive" alt='published-img'>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!--Author section starts -->

        <!-- Contributors section starts -->
        <section id="contributors" class="contributors page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Great Contributors</h3>
                    </div>

                    <div class="col-md-6">
                        <div class="contributor clearfix">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4 text-center">
                                    <div class="contributor-img">
                                        <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                                <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                    <h4>adam statham</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contributor clearfix">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4 text-center">
                                    <div class="contributor-img">
                                        <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                                <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                    <h4>adam statham</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contributor clearfix">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4 text-center">
                                    <div class="contributor-img">
                                        <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                                <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                    <h4>anabelle statham</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contributor clearfix">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4 text-center">
                                    <div class="contributor-img">
                                        <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                                <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                    <h4>Natalia Roger</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contributor clearfix">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4 text-center">
                                    <div class="contributor-img">
                                        <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                                <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                    <h4>Nadia Vostokb</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contributor clearfix">
                            <div class="row">
                                <div class="col-sm-5 col-lg-4 text-center">
                                    <div class="contributor-img">
                                        <img src="http://placehold.it/979X816" class="img-responsive" alt='published-img'>
                                    </div>
                                </div>
                                <div class="contributor-desc col-sm-7 col-lg-8 text-center">
                                    <h4>Orisum Nagasaki</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                                    <span class="contributor-url"><a href="">http://mywebsitename.com</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- Contributors section ends -->

        <!-- CTA section starts -->
        <section id="cta" class="cta page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <h1><span>Are you ready to </span>change your business?</h1>
                    </div>
                    <div class="col-sm-8 col-sm-offset-2">
                        <button class="btn btn-block custom-button">Order you copy Now</button>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- CTA section ends -->

        <!-- footer section starts -->
        <footer id="footer" class="footer page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-6 footer-left">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="footer-link footer-link-1">
                                    <h4>Lorem Ipsum Dolor</h4>
                                    <ul>
                                        <li><a href="">Lorem Imsum</a></li>
                                        <li><a href="">Sit Amet</a></li>
                                        <li><a href="">Suggest Ipsum</a></li>
                                        <li><a href="">View Dolors</a></li>
                                        <li><a href="">Discuss</a></li>
                                        <li><a href="">Lorem Ipsum</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="footer-link footer-link-2">
                                    <h4>Eiusmod tempor</h4>
                                    <ul>
                                        <li><a href="">Lorem Imsum</a></li>
                                        <li><a href="">Sit Amet</a></li>
                                        <li><a href="">Suggest Ipsum</a></li>
                                        <li><a href="">View Dolors</a></li>
                                        <li><a href="">Discuss</a></li>
                                        <li><a href="">Lorem Ipsum</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 col-md-offset-1 footer-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip,sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <span>© 2016 Made By Wahid LLC. Crafted lovingly in Dhaka, Bangladesh</span>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </footer>
        <!-- footer section ends -->
    </main>
    <!-- 4.Document wrapper ends-->


    <!-- 5. SCRIPTS -->

    <script src="js/jquery-1.11.2.min.js"></script>

   <script src="{{asset('js/template.js')}}"></script>

    <!-- 5. SCRIPTS ends -->

    @yield('scripts')

    @if(count($errors) > 0 )


   <script>
     
    $(document).ready(function() {



        setTimeout(function() {

          $('#myModal').modal('show');
        }, 1000); // milliseconds


        
                });

   </script>




@endif

            @if(!Auth::check() or Auth::user()->verified !== 1)
                

                <script>

                     $("#grid-items img").unwrap();
                     $("span.img-caption").css({'left':'3.9%','width':'92.5%'});
                     $(".img-hover").css({'left': '4%','width': '92%'});

                     var element = "<div class='bg-danger' style='position:fixed;top:50%;left:82%;font-weight:bold;' id='poruka'>You have to be registered<br> to take this action</div>";

                     $(".img-hover, #free-chapter").click(function(){

                        if($("#poruka").length){

                            $("#poruka").css('display','block');
                            $("#poruka").delay(2000).fadeOut();
                        } else {

                             $("body").append(element);
                        $("#poruka").delay(2000).fadeOut();
                        }

                       
                     });
                     
                     
                    
                </script>

                @endif

           
       

               
           

</body>

</html>


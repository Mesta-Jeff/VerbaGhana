@extends('layouts.main')

@section('title', 'Page Title')

@section('content')


<!-- Start Slider Area  -->
<div class="slider-area slider-style-1 variation-default slider-bg-image bg-banner1" data-black-overlay="1">
    <!-- <div class="bg-blend-top bg_dot-mask"></div> -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="inner text-center mt--60">
                    <h2 class="title display-one">To experience the magic of Ghanaian languages,
                        <span class="theme-gradient">VerbaGhana </span> is your <span class="color-off"> Ultimate Translator</span>
                    </h2>
                    <p class="b1 desc-text">Revolutionary AI-Powered Translation: Bridging Languages, Connecting Hearts</p>
                    <div class="button-group">
                        <a class="btn-default bg-light-gradient btn-large" href="{{ route('chat')}}">
                            <div class="has-bg-light"></div>
                            <span>Start writing for free</span>
                        </a>
                    </div>
                    {{-- <p class="color-gray mt--5">💳 No credit card required!</p> --}}
                </div>
            </div>
            <div class="col-lg-10 col-xl-10 order-1 order-lg-2">
                <div class="frame-image frame-image-bottom bg-flashlight video-popup icon-center">
                    <img src="{{ asset('root/assets/images/banner/banner-1.png') }}" alt="Banner Images">
                    <div class="video-icon">
                        <a class="btn-default rounded-player popup-video border bg-white-dropshadow" href="https://www.youtube.com/watch?v=tj9-MGHCs38">
                            <span><i class="feather-play"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="chatenai-separator has-position-bottom">
        <img class="w-100" src="{{ asset('root/assets/images/separator/separator-top.svg') }}" alt="">
    </div>
</div>
<!-- End Slider Area  -->

<!-- Start Service__Style--1 Area  -->
<div class="rainbow-service-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle">
                        <span class="theme-gradient">GET IN TOUCH FOR FREE</span>
                    </h4>
                    <h2 class="title w-600 mb--20">Instant Content Generation with AI</h2>
                    <p class="description b1">Provide Descriptions, Get Instant AI-Generated Content</p>
                </div>
            </div>
        </div>

        <div class="row row--15 service-wrapper">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                    <div class="icon">
                        <i class="feather-activity"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Effortless Content AI</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Let our AI-powered service take the hard work out of content creation. Get started today with AI.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                    <div class="icon">
                        <i class="feather-cast"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Your Words, Our Tech</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Discover how AI can transform your ideas into engaging with our qualitifull service for a better content.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                    <div class="icon">
                        <i class="feather-map"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">AI-Powered Writing </a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Access AI-generated content for your blogs, websites, and more with our qualitifull convenient service.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700">
                <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                    <div class="icon">
                        <i class="feather-loader"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">AI Generation Simple</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Experience the ease of content creation with our AI service. Write less, achieve more.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                    <div class="icon">
                        <i class="feather-speaker"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Quality AI Content</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Get professionally written content in no time with our AI service. Quality meets speed.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">
                <div class="service service__style--1 bg-color-blackest radius mt--25 text-center rbt-border-none variation-4 bg-flashlight">
                    <div class="icon">
                        <i class="feather-terminal"></i>
                    </div>
                    <div class="content">
                        <h4 class="title w-600">
                            <a href="#">Your Writing Assistant</a>
                        </h4>
                        <p class="description b1 color-gray mb--0">Collaborate with AI to generate content that resonates with your audience. Try it now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Service__Style--1 Area  -->

<!-- Start Seperator Area  -->

<hr class="splita">
<div class="separator-animated animated-true mt--50 mb--50"></div>
<!-- End Seperator Area  -->

<!-- Start Timeline-Style-Four  -->
<div class="rainbow-timeline-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle ">
                        <span class="theme-gradient">HOW IT WORKS</span>
                    </h4>
                    <h2 class="title w-600 mb--20">Guide Our AI to Create Your Copy</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1 mt--30">
                <div class="timeline-style-two bg-flashlight bg-color-blackest">
                    <div class="row row--0">
                        <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                            <div class="rainbow-timeline">
                                <h6 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">1.Select template</h6>
                                <div class="progress-line">
                                    <div class="line-inner"></div>
                                </div>
                                <div class="progress-dot">
                                    <div class="dot-level">
                                        <div class="dot-inner"></div>
                                    </div>
                                </div>
                                <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Easily Select Templates for Website Content.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                            <div class="rainbow-timeline">
                                <h6 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">2.Describe topic</h6>
                                <div class="progress-line">
                                    <div class="line-inner"></div>
                                </div>
                                <div class="progress-dot">
                                    <div class="dot-level">
                                        <div class="dot-inner"></div>
                                    </div>
                                </div>
                                <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">All Feature available features in Essentials.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 rainbow-timeline-single dark-line">
                            <div class="rainbow-timeline">
                                <h6 class="title" data-sal="slide-up" data-sal-duration="700" data-sal-delay="200">3.Generate content</h6>
                                <div class="progress-line">
                                    <div class="line-inner"></div>
                                </div>
                                <div class="progress-dot">
                                    <div class="dot-level">
                                        <div class="dot-inner"></div>
                                    </div>
                                </div>
                                <p class="description" data-sal="slide-up" data-sal-duration="700" data-sal-delay="300">Popular Feature available features in Essentials.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-group mt--50 text-center">
                    <a class="btn-default btn-large" href="{{ route('chat')}}">Start writing for free</a>
                    <a class="btn-default btn-large btn-border popup-video" href="https://www.youtube.com/watch?v=tj9-MGHCs38"><span>
                        <i class="feather-play"></i>
                    </span> See action in video</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Timeline-Style-Four  -->

<!-- Start Seperator Area  -->
{{-- <div class="chatenai-separator">
    <img class="w-100" src="{{ asset('root/assets/images/separator/separator-bottom.svg') }}" alt="">
</div> --}}
<hr class="splita">
<div class="separator-animated animated-true mt--50 mb--50"></div>
<!-- End Seperator Area  -->


<!-- Start Split Style-1 Area  -->
<div class="rainbow-split-area rainbow-section-gap">
    <div class="container">
        <div class="rainbow-splite-style">
            <div class="split-wrapper">
                <div class="row g-0 radius-10 align-items-center">
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="thumbnail">
                            <img class="radius" src="{{ asset('root/assets/images/banner/banner-2.png') }}" alt="split Images">
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-6 col-12">
                        <div class="split-inner">
                            <h4 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Instant Content with AI</h4>
                            <p class="description" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Unlock Conversion-Driven Content: Business Bios, Facebook Ads, Product Descriptions, Emails, Landing Pages, Social Ads, and Beyond.</p>
                            <ul class="split-list" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                <li>- Craft Articles in Under 20 Seconds.</li>
                                <li>- Reclaim Hundreds of Valuable Hours with AI</li>
                                <li>- Elevate Copywriting with Rewriter.</li>
                            </ul>
                            <div class="view-more-button mt--35" data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                <a class="btn-default" href="contact.html">Contact With Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Split Style-1 Area  -->



<!-- Start Seperator Area  -->
{{-- <div class="chatenai-separator">
    <img class="w-100" src="{{ asset('root/assets/images/separator/separator-top.svg') }}" alt="">
</div> --}}
<hr class="splita">
<div class="separator-animated animated-true mt--50 mb--50"></div>
<!-- End Seperator Area  -->

<!-- Start Accordion-2 Area  -->
<div class="rainbow-accordion-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Accordion</span></h4>
                    <h2 class="title w-600 mb--20">Frequently Asked Questions</h2>
                </div>
            </div>
        </div>
        <div class="row mt--35 row--20">
            <div class="col-lg-10 offset-lg-1">
                <div class="rainbow-accordion-style  accordion">
                    <div class="accordion" id="accordionExamplea">
                        <div class="accordion-item card bg-flashlight">
                            <h2 class="accordion-header card-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is VerbaGhana ? How does it work?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    VerbaGhana is an AI-powered messaging platform that understands and responds to your natural language queries. Ask anything you'd typically ask a human assistant—get weather updates, news, restaurant recommendations, and more!
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card bg-flashlight">
                            <h2 class="accordion-header card-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What kind of questions can I ask VerbaGhana?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    VerbaGhana, an AI-driven messaging platform, adeptly communicates with users using natural language understanding. It delivers helpful responses to your inquiries and requests.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card bg-flashlight">
                            <h2 class="accordion-header card-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I get update regularly and For how long do I get updates?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    Yes, We will get update the VerbaGhana. And you can get it any time. Next
                                    time we will comes with more feature. You can be get update for
                                    unlimited times. Our dedicated team works for update.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item card bg-flashlight">
                            <h2 class="accordion-header card-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How can I get the customer support?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    After purchasing the product need you any support you can be share with
                                    us with sending mail to rainbowit10@gmail.com.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card bg-flashlight">
                            <h2 class="accordion-header card-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    HIs my data safe with VerbaGhana?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    Feel free to toss any questions at VerbaGhana, just like you would with a human helper—whether it's about the weather, the latest news, restaurant suggestions, or anything else you fancy!
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item card bg-flashlight">
                            <h2 class="accordion-header card-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Is VerbaGhana available in multiple languages?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExamplea">
                                <div class="accordion-body card-body">
                                    Yes, VerbaGhana is designed to support multiple languages, offering a versatile and inclusive communication experience for users worldwide.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Accordion-2 Area  -->

<!-- Start Seperator Area  -->
{{-- <div class="chatenai-separator">
    <img class="w-100" src="{{ asset('root/assets/images/separator/separator-bottom.svg') }}" alt="">
</div> --}}
<hr class="splita">
<div class="separator-animated animated-true mt--50 mb--50"></div>
<!-- End Seperator Area  -->

<!-- Start Brands Area -->
<div class="rainbow-brand-area rainbow-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h4 class="subtitle "><span class="theme-gradient">Our Awesome Client</span></h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt--10">
                <ul class="brand-list brand-style-2">
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-01.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-02.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-03.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-04.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-05.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-06.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-07.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-08.png') }}" alt="Brand Image"></a></li>
                    <li><a href="#"><img src="{{ asset('root/assets/images/brand/brand-01.png') }}" alt="Brand Image"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End Brands Area -->

<!-- Start Seperator Area  -->
{{-- <div class="chatenai-separator">
    <img class="w-100" src="{{ asset('root/assets/images/separator/separator-top.svg') }}" alt="">
</div> --}}
<hr class="splita">
<div class="separator-animated animated-true mt--50 mb--50"></div>
<!-- End Seperator Area  -->

<!-- Start Call TO Action Area  -->
<div class="rainbow-callto-action-area">
    <div class="wrapper">
        <div class="rainbow-callto-action clltoaction-style-default rainbow-section-gap">
            <div class="container">
                <div class="row row--0">
                    <div class="col-lg-12">
                        <div class="align-items-center content-wrapper">
                            <div class="inner">
                                <div class="content text-center">
                                    <span class="theme-gradient b2 mb--30 d-inline-block">Boost your writing productivity</span>
                                    <h2 class="title" data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">Overcome Writer's Block Today</h2>
                                    <p class="description" data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">Gain Access to a Team of Copywriting Experts.</p>
                                    <div class="call-to-btn" data-sal="slide-up" data-sal-duration="400" data-sal-delay="350">
                                        <a class="btn-default bg-light-gradient btn-large" href="{{ route('chat')}}">
                                            <div class="has-bg-light"></div>
                                            <span>Start writing for free</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Call TO Action Area  -->


    
@endsection

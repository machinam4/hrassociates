@extends('layouts.base')
@section('contents')
    <div class="templateux-cover" style="background-image: url( {{ asset('assets/images/hero_1.jpg') }});">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">We Are Your Partners in <strong>Human
                            Resource</strong></h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">As a business owner or
                        manager when
                        you have a HR problem or need some expert HR advice, we know having someone you can consult
                        to makes all
                        the difference.</p>
                    <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-primary py-3 px-4 mr-3">Get
                            Started</a> <a href="#" class="text-white">Learn More</a></p>
                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->

    <div class="templateux-section pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12 templateux-overlap">
                    <div class="row">
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="600">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('assets/images/flaticon/svg/001-consultation.svg') }}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Corporate Collaboration</h3>

                                </div>
                            </div> <!-- .block-icon-1 -->
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="700">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('assets/images/flaticon/svg/002-discussion.svg') }}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Strategic Partners</h3>

                                </div>
                            </div> <!-- .block-icon-1 -->
                        </div>
                        <div class="col-md-4" data-aos="fade-up" data-aos-delay="800">
                            <div class="media block-icon-1 d-block text-left">
                                <div class="icon mb-3">
                                    <img src="{{ asset('assets/images/flaticon/svg/003-turnover.svg') }}" alt="Image"
                                        class="img-fluid">
                                </div>
                                <div class="media-body">
                                    <h3 class="h5 mb-4">Infinite Posibilities</h3>
                                </div>
                            </div> <!-- .block-icon-1 -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section">

        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-5">Our Agency</h2>
                    <div class="owl-carousel wide-slider">
                        <div class="item">
                            <img src="{{ asset('assets/images/slider-1.jpg') }}" alt="Free template by TemplateUX.com"
                                class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/slider-2.jpg') }}" alt="Free template by TemplateUX.com"
                                class="img-fluid">
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/slider-3.jpg') }}" alt="Free template by TemplateUX.com"
                                class="img-fluid">
                        </div>
                    </div> <!-- .owl-carousel -->
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <h2 class="mb-5">Why Us?</h2>
                    <div class="accordion" id="accordionExample">


                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Why would you want us ?</a>
                            </h2>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        Being able to speak with a friendly qualified HR consultant about issues
                                        with your employees, how
                                        to approach a dismissal, disciplinary or redundancy can be a daunting task
                                        to do on your own.
                                        As a business owner or manager when you have a HR problem or need some
                                        expert HR advice, we know
                                        having someone you can consult to makes all the difference.

                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" class="collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Services we offer
                                </a>
                            </h2>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ol>
                                        <li>Executive Search and Talent Recruitment Process Outsourcing (RPO) </li>
                                        <li>HR Consultant Services </li>
                                        <li>Management of Human Capital for Organisations</li>
                                        <li>Organisational Development and Restructuring</li>
                                        <li>Formulating of Company Policies and Procedures</li>
                                        <li>Employee and Customer Satisfaction Surveys</li>
                                        <li>Employee Assistance Programmes and Employment Clinic</li>
                                        <li>Formulation of Strategic Plans for Corporations</li>
                                        <li>Corporate Training and Team Building</li>
                                        <li>Youth Business and Development programmes </li>
                                    </ol>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div> <!-- .templateux-section -->

    <div class="templateux-section bg-light py-5" id="templateux-counter-section">
        <div class="container">
            <div class="row">
                <div class="col-md">
                    <div class="templateux-counter text-center">
                        <span class="templateux-number" data-number="100">0</span>
                        <span class="templateux-label">Number of Clients</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="templateux-counter text-center">
                        <span class="templateux-number" data-number="50">0</span>
                        <span class="templateux-label">Number of Personnel</span>
                    </div>
                </div>
                <div class="col-md">
                    <div class="templateux-counter text-center">
                        <span class="templateux-number" data-number="5">0</span>
                        <span class="templateux-label">Years Of Experience</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div> <!-- .templateux-section -->

    </div> <!-- .templateux-section -->
@endsection

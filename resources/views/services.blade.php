@extends('layouts.base')
@section('contents')
    <div class="templateux-cover" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">
                        Services
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- .templateux-cover -->

    <div class="templateux-section bg-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center mb-5">
                    <h2>Our Services</h2>
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/images/flaticon/svg/004-gear.svg') }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">
                                Executive Search and Talent Recruitment Process Outsourcing
                                (RPO)
                            </h3>
                            <button class="btn btn-primary"><a href="executive_search.html">Learn More</a></button>
                        </div>
                    </div>
                    <!-- .block-icon-1 -->
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/images/flaticon/svg/005-conflict.svg') }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">HR Consultancy Services</h3>
                            <button class="btn btn-primary"><a href="#">Learn More</a></button>

                        </div>
                    </div>
                    <!-- .block-icon-1 -->
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/images/flaticon/svg/006-meeting.svg') }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Employee Assistance Programme</h3>
                            <button class="btn btn-primary"><a href="employee_assistance.html">Learn
                                    More</a></button>

                        </div>
                    </div>
                    <!-- .block-icon-1 -->
                </div>

                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/images/flaticon/svg/007-brainstorming.svg') }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">
                                Youth Business and Development programmes
                            </h3>
                            <button class="btn btn-primary"><a href="#">Learn More</a></button>

                        </div>
                    </div>
                    <!-- .block-icon-1 -->
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/images/flaticon/svg/001-consultation.svg') }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">
                                Formulation of Strategic Plans for Corporations
                            </h3>
                            <button class="btn btn-primary"><a href="#">Learn More</a></button>

                        </div>
                    </div>
                    <!-- .block-icon-1 -->
                </div>
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3">
                            <img src="{{ asset('assets/images/flaticon/svg/009-brainstorming-2.svg') }}" alt="Image"
                                class="img-fluid" />
                        </div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Corporate Training and Team Building</h3>
                            <button class="btn btn-primary"><a href="corporate_training.html">Learn
                                    More</a></button>

                        </div>
                    </div>
                    <!-- .block-icon-1 -->
                </div>
            </div>
        </div>
    </div>
    <!-- .templateux-section -->
@endsection

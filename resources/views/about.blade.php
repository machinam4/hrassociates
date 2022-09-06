@extends('layouts.base')
@section('contents')
    <div class="templateux-cover" style="background-image: url({{ asset('assets/images/hero_1.jpg') }})">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">
                        About Us
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- .templateux-cover -->

    <div class="templateux-section">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="mb-5">Our Agency</h2>
                    <div class="owl-carousel wide-slider">
                        <div class="item">
                            <img src="{{ asset('assets/images/slider-1.jpg') }}" alt="Free template by TemplateUX.com"
                                class="img-fluid" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/slider-2.jpg') }}" alt="Free template by TemplateUX.com"
                                class="img-fluid" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('assets/images/slider-3.jpg') }}" alt="Free template by TemplateUX.com"
                                class="img-fluid" />
                        </div>
                    </div>
                    <!-- .owl-carousel -->
                </div>
                <div class="col-lg-5 pl-lg-5">
                    <h2 class="mb-5">Why Us?</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="mb-0 rounded mb-2">
                                <a href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    About Us</a>
                            </h2>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>
                                        HR Associates Ltd was incorporated in 2013 in Kenya to
                                        offer Human Resource Consultancy Services in Kenya and
                                        beyond. Every organisation's success is dependent on its
                                        Human Resource and how the individuals are managed at
                                        the onset of their engagement and throughout the time
                                        they work for that institution. HR Associates limited
                                        will take care of the needs by offering services that
                                        are critical to the success of the organisation
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- .templateux-section -->

    <div class="templateux-section pb-0">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>Our Team</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url({{ asset('assets/images/placeholder.png') }})">
                        <a href="#" class="desc">
                            <h3>PAUL NDIRIMA</h3>
                            <span>CEO and Co-Founder</span>
                            <div class="parag">
                                <p>
                                    Even the all-powerful Pointing has no control about the
                                    blind texts
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url({{ asset('assets/images/placeholder.png') }})">
                        <a href="#" class="desc">
                            <h3>Jean Smith</h3>
                            <span>CEO and Co-Founder</span>
                            <div class="parag">
                                <p>
                                    Even the all-powerful Pointing has no control about the
                                    blind texts
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url({{ asset('assets/images/placeholder.png') }})">
                        <a href="#" class="desc">
                            <h3>David Wilson</h3>
                            <span>CEO and Co-Founder</span>
                            <div class="parag">
                                <p>
                                    Even the all-powerful Pointing has no control about the
                                    blind texts
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url({{ asset('assets/images/placeholder.png') }})">
                        <a href="#" class="desc">
                            <h3>Bob Miller</h3>
                            <span>CEO and Co-Founder</span>
                            <div class="parag">
                                <p>
                                    Even the all-powerful Pointing has no control about the
                                    blind texts
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url({{ asset('assets/images/placeholder.png') }})">
                        <a href="#" class="desc">
                            <h3>Jean Smith</h3>
                            <span>CEO and Co-Founder</span>
                            <div class="parag">
                                <p>
                                    Even the all-powerful Pointing has no control about the
                                    blind texts
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4 mb-4">
                    <div class="staff" class="staff-img"
                        style="background-image: url({{ asset('assets/images/placeholder.png') }})">
                        <a href="#" class="desc">
                            <h3>David Wilson</h3>
                            <span>CEO and Co-Founder</span>
                            <div class="parag">
                                <p>
                                    Even the all-powerful Pointing has no control about the
                                    blind texts
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="templateux-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2>Customer Testimonial</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-8 testimonial-wrap">
                    <div class="quote">&ldquo;</div>
                    <div class="owl-carousel wide-slider-testimonial">
                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>
                                    &ldquo;I really enjoyed the way they handle their work and the amount of time they took
                                    to deliver&rdquo;
                                </p>
                                <p><cite>Peter</cite></p>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>
                                    &ldquo;Splendid job!.&rdquo;
                                </p>
                                <p><cite>Wesley Smith, </cite></p>
                            </blockquote>
                        </div>

                        <div class="item">
                            <blockquote class="block-testomonial">
                                <p>
                                    &ldquo;Looking forward to working with you more.&rdquo;
                                </p>
                                <p><cite>Bob Rober</cite></p>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- .container -->
    </div>
    <!-- .templateux-section -->
@endsection

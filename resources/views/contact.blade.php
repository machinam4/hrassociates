@extends('layouts.base')
@section('contents')
    <div class="templateux-cover" style="background-image: url({{ asset('assets/images/slider-1.jpg') }});">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">Contact us</h1>
                    <p class="lead mb-5 text-white" data-aos="fade-up" data-aos-delay="100">Feel free to reach out in case you
                        have any questions and one of our members will be sure to get back to you.</p>
                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->



    <div class="templateux-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-7 pr-md-7 mb-5">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary py-3 px-5" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="ion-ios-location-outline"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">Nairobi Kenya</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="ion-ios-telephone-outline"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">+254701005077</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                    <div class="media block-icon-1 d-block text-center">
                        <div class="icon mb-3"><span class="ion-ios-email-outline"></span></div>
                        <div class="media-body">
                            <h3 class="h5 mb-4">hrassociates2005@yahoo.com</h3>
                        </div>
                    </div> <!-- .block-icon-1 -->

                </div>
            </div> <!-- .row -->

        </div>
    </div> <!-- .templateux-section -->
@endsection

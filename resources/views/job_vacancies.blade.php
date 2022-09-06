@extends('layouts.base')
@section('contents')
    <div class="templateux-cover" style="background-image: url({{ asset('assets/images/hero_1.jpg') }});">
        <div class="container">
            <div class="row align-items-lg-center">

                <div class="col-lg-6 order-lg-1 text-center mx-auto">
                    <h1 class="heading mb-3 text-white" data-aos="fade-up">Browse Vacancies</h1>
                </div>

            </div>
        </div>
    </div> <!-- .templateux-cover -->


    <div id="blog" class="templateux-section">
        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <h2 class="mb-3">Job Vacancies</h2>
                    <p>
                    <ol>
                        <li><h4><b><a href="{{route('usr_index')}}"> Sales Marketer</a> &nbsp;- Naivas</b></h4>
                        <p>Increased productivity. Workers with depressive symptoms are more likely to be absent due to
                            illness or accidents, and even when they are at work, they can be checked out (a phenomenon
                            known as presenteeism). EAPs can give these workers the help they need so they can be back at
                            full productivity.</p>
                        </li>
                        <li><h4><b><a href="{{route('usr_index')}}"> Branch Manager</a> &nbsp;- Naivas</b></h4>
                        <p>Increased productivity. Workers with depressive symptoms are more likely to be absent due to
                            illness or accidents, and even when they are at work, they can be checked out (a phenomenon
                            known as presenteeism). EAPs can give these workers the help they need so they can be back at
                            full productivity.</p>
                        </li>
                        <li><h4><b><a href="{{route('usr_index')}}"> Delivery manager</a> &nbsp;- Naivas</b></h4>
                        <p>Increased productivity. Workers with depressive symptoms are more likely to be absent due to
                            illness or accidents, and even when they are at work, they can be checked out (a phenomenon
                            known as presenteeism). EAPs can give these workers the help they need so they can be back at
                            full productivity.</p>
                        </li>
                        <li><h4><b><a href="{{route('usr_index')}}"> Sales Marketer</a> &nbsp;- Jumia</b></h4>
                        <p>Increased productivity. Workers with depressive symptoms are more likely to be absent due to
                            illness or accidents, and even when they are at work, they can be checked out (a phenomenon
                            known as presenteeism). EAPs can give these workers the help they need so they can be back at
                            full productivity.</p>
                        </li>
                    </ol>
                    </p>





                </div> <!-- .col-md-8 -->


            </div>
        </div>
    @endsection

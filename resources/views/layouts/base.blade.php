<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HR-Associates Ltd</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="js-animsition animsition" id="site-wrap" data-animsition-in-class="fade-in"
        data-animsition-out-class="fade-out">


        <header class="templateux-navbar" role="banner">

            <div class="container" data-aos="fade-down">
                <div class="row">

                    <div class="col-3 templateux-logo">
                        <a href="{{ route('home') }}" class="animsition-link">HR-ASSOCIATES LTD</a>
                    </div>
                    <nav class="col-9 site-nav">
                        <button
                            class="d-block d-md-none hamburger hamburger--spin templateux-toggle templateux-toggle-light ml-auto templateux-toggle-menu"
                            data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button> <!-- .templateux-toggle -->

                        <ul class="sf-menu templateux-menu d-none d-md-block">
                            <li class="active">
                                <a href="{{ route('home') }}" class="animsition-link">Home</a>
                            </li>
                            <li><a href="{{ route('about') }}" class="animsition-link">About</a></li>
                            <li>
                                <a href="{{ route('services') }}" class="animsition-link">Services</a>
                                <ul>
                                    <li><a href="{{ route('executive_search') }}">Executive Search</a></li>
                                    <li><a href="{{ route('leadership_training') }}">Leadership Training</a></li>
                                    <li><a href="{{ route('employee_assistance') }}">Employee Asisstance Program</a>
                                    </li>
                                    <li><a href="{{ route('corporate_training') }}">Corporate Training</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="animsition-link">Vacancies</a>
                                <ul>
                                    <li><a href="{{ route('jobs_index') }}">Post a job</a></li>
                                    <li><a href="{{ route('job_vacancies') }}">Browse Vacancies</a></li>
                                    <li><a href="{{ route('usr_index') }}">Upload CV</a></li>
                                </ul>
                            </li>
                            <!-- End of section -->
                            <li>
                                <a href="#">Corporate Training</a>
                                <ul>
                                    <li> <a href="{{ route('project_management') }}">Project Management</a></li>
                                    <li> <a href="{{ route('digital_marketing') }}">Digital Marketing</a></li>
                                    <li> <a href="{{ route('hr_skills') }}">HR Skills</a></li>
                                    <li> <a href="{{ route('hr_policies') }}">HR Policies</a></li>
                                    <li> <a href="{{ route('labour_laws') }}">Labour Laws</a></li>
                                    <li> <a href="{{ route('customer_care') }}">Customer Care</a></li>
                                    <li> <a href="{{ route('performance_management') }}">Performance Management</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- <li><a href="blog.html" class="animsition-link">Blog</a></li> -->
                            <li><a href="{{ route('contact') }}" class="animsition-link">Contact</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('admin/dashboard') }}" class="animsition-link">Dashboard</a></li>
                                @else
                                    <li><a href="{{ route('login') }}" class="animsition-link">Log
                                            in</a></li>

                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}" class="animsition-link">Register</a></li>
                                    @endif
                                @endauth
                            @endif
                        </ul> <!-- .templateux-menu -->

                    </nav> <!-- .site-nav -->


                </div> <!-- .row -->
            </div> <!-- .container -->
        </header> <!-- .templateux-navba -->
        @yield('contents')

        <footer class="templateux-footer bg-light">
            <div class="container">

                <div class="row mb-5">
                    <div class="col-md-4 pr-md-5">
                        <div class="block-footer-widget">
                            <p>HR-Associates Ltd &reg;</p>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="block-footer-widget">
                                    <h3>Learn More</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">How it works?</a></li>
                                        <li><a href="#">Useful Tools</a></li>
                                        <li><a href="#">Pricing</a></li>
                                        <li><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="block-footer-widget">
                                    <h3>Support</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Contact Us</a></li>
                                        <li><a href="#">Help Desk</a></li>
                                        <li><a href="#">Knowledgebase</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="block-footer-widget">
                                    <h3>About Us</h3>
                                    <ul class="list-unstyled">
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="block-footer-widget">
                                    <h3>Connect With Us</h3>
                                    <ul class="list-unstyled block-social">
                                        <li><a href="https://www.facebook.com/hrassociatesltd21/" class="p-1"><span
                                                    class="icon-facebook-square"></span></a></li>
                                        <li><a href="#" class="p-1"><span class="icon-twitter"></span></a></li>
                                        <li><a href="#" class="p-1"><span class="icon-linkedin"></span></a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div> <!-- .row -->

                    </div>
                </div> <!-- .row -->



            </div>
        </footer> <!-- .templateux-footer -->


    </div> <!-- .js-animsition -->


    <script src="{{ asset('assets/js/scripts-all.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Font Awesome icons (free version)-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet">
        <!-- Fonts CSS-->
        <link rel="stylesheet" href="{{asset('css/heading.css')}}">
        <link rel="stylesheet" href="{{asset('css/body.css')}}">
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="#page-top">MUSHFIQ</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{route('admin.dashboard')}}">EDIT</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">PORTFOLIO</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">ABOUT ME</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">CONTACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image--><img class="masthead-avatar mb-5" src="{{url($main->image)}}" alt="">
                <!-- Masthead Heading-->
            <h1 class="masthead-heading mb-0">{{$main->person_name}}</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="pre-wrap masthead-subheading font-weight-light mb-0">{{$main->quality}}</p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary mb-0 d-inline-block">PORTFOLIO</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row justify-content-center">
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-toggle="modal" href="#portfolioModal<?php echo $portfolio->id?>">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="{{url($portfolio->small_image)}}" alt="" />
                                    </a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
<!-- Portfolio Modal-->
             <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $portfolio->id?>" tabindex="-1" role="dialog" aria-labelledby="#portfolioModal0Label" aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times"></i></span></button>
                        <div class="modal-body text-center">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <!-- Portfolio Modal - Title-->
                                        <h2 class="portfolio-modal-title text-secondary mb-0">{{$portfolio->title}}</h2>
                                        <!-- Icon Divider-->
                                        <div class="divider-custom">
                                            <div class="divider-custom-line"></div>
                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                            <div class="divider-custom-line"></div>
                                        </div>
                                        <!-- Portfolio Modal - Image--><img class="img-fluid d-block mx-auto" src="{{url($portfolio->big_image)}}" alt="" />
                                        <!-- Portfolio Modal - Text-->
                                        <p class="mb-5">{{$portfolio->description}}</p>
                                        <button class="btn btn-primary" href="#" data-dismiss="modal"><i class="fas fa-times fa-fw"></i>Close Window</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="page-section portfolio" id="about">
                <div class="container">
                    <!-- Portfolio Section Heading-->
                    <div class="text-center">
                        <h2 class="page-section-heading text-secondary mb-0 d-inline-block">ABOUT</h2>
                    </div>
                    <!-- Icon Divider-->
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <div class="row justify-content-center">
                        @if (count($abouts) > 0)
                            @foreach ($abouts as $about)
                            <div class="col-md-6 col-lg-4 mb-5">
                                <div class="timeline-body"><p class="text-muted">{{$about->description}}</p></div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </section>
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <div class="text-center">
                    <h2 class="page-section-heading text-secondary d-inline-block mb-0">CONTACT</h2>
                </div>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Content-->
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="fas fa-mobile-alt"></i></div>
                            <div class="text-muted">Phone</div>
                            <div class="lead font-weight-bold">+8801521333631</div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex flex-column align-items-center">
                            <div class="icon-contact mb-3"><i class="far fa-envelope"></i></div>
                            <div class="text-muted">Email</div><a class="lead font-weight-bold" href="mailto:mushfiqurrb@gmail.com">mushfiqurrb@gmail.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">LOCATION</h4>
                        <p class="pre-wrap lead mb-0">31, Shakhari Nagar Lane, Gandaria, Dhaka</p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="mb-4">AROUND THE WEB</h4><a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/mushfiqur.rahman.3511/"><i class="fab fa-fw fa-facebook-f"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/mushfiqrb"><i class="fab fa-fw fa-twitter"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="mb-4">Github</h4>
                        <p class="pre-wrap lead mb-0">https://github.com/mushfiqurrb </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <section class="copyright py-4 text-center text-white">
            <div class="container"><small class="pre-wrap">Copyright ©  mushfiqurrb </small></div>
        </section>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed"><a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a></div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>
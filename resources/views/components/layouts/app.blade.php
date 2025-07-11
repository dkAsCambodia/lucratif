    <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>{{ $title ?? 'Investment - Lucratif LLC' }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <link href="{{ URL::to('web/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('web/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ URL::to('web/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ URL::to('web/assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ URL::to('web/assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Topbar Start -->
        <div class="container-fluid topbar px-0 d-none d-lg-block">
            <div class="container px-0">
                <div class="row gx-0 align-items-center" style="height: 45px;">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <a href="https://www.google.com/maps/place/Tamouh+Tower+-+Al+Reem+Island+-+RT1+-+Abu+Dhabi/@24.488115,54.395024,16z/data=!4m6!3m5!1s0x3e5e67b5cc74be05:0xdf92995f815f96d8!8m2!3d24.4881152!4d54.3950242!16s%2Fg%2F12hv47tvg?hl=en&entry=ttu&g_ep=EgoyMDI1MDYxNy4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="text-muted me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+971 2 692 6876</a>
                            <a href="#" class="text-muted me-0"><i class="fas fa-envelope text-primary me-2"></i>lucratif@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex align-items-center justify-content-end">
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-facebook-f text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-twitter text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-3"><i class="fab fa-instagram text-white"></i></a>
                            <a href="#" class="btn btn-primary btn-square rounded-circle nav-fill me-0"><i class="fab fa-linkedin-in text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- =========================Header=========================== -->
        <livewire:website.header />

        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h4 class="modal-title mb-0" id="exampleModalLabel">Search by keyword</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

        {{ $slot }}
    
         <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Newsletter</h4>
                                <p class="mb-3">Investment involves risk. Past performance and the predictions, projections, or forecasts on the economy, securities markets or the economic trends of the markets are not necessarily indicative of the future or likely performance of Eastspring or any of the funds managed by Eastspring.</p>
                                <div class="position-relative mx-auto rounded-pill">
                                    <form>
                                    <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="email" placeholder="Enter your email" required>
                                    <button type="submit" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="/" wire:navigate><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="/investment-insights" wire:navigate><i class="fas fa-angle-right me-2"></i> Investment Services</a>
                            <a href="/about-us/company-overview" wire:navigate><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="https://gconlive.com"><i class="fas fa-angle-right me-2"></i> GCON</a>
                            <a href="/contactus" wire:navigate><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                            <a href="/disclaimer" wire:navigate><i class="fas fa-angle-right me-2"></i> Disclaimer & copyright</a>
                            <a href="/privacypolicy" wire:navigate><i class="fas fa-angle-right me-2"></i>Privacy policy</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href="/contactus" wire:navigate><i class="fa fa-map-marker-alt me-2"></i> Unit No. 2403, 24th Floor, Tamouh Tower, Al Reem Island, Abu Dhabi, United Arab Emirates</a>
                            <a href="/contactus" wire:navigate><i class="fas fa-envelope me-2"></i> lucratif@gmail.com</a>
                            <a href="/contactus" wire:navigate><i class="fas fa-envelope me-2"></i> lucratif@gmail.com</a>
                            <a href="/contactus" wire:navigate><i class="fas fa-phone me-2"></i> +971 2 692 6876</a>
                            <a href="/contactus" wire:navigate class="mb-3"><i class="fas fa-print me-2"></i> +971 2 692 6876</a>
                            <div class="d-flex align-items-center">
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-light btn-md-square me-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-light btn-md-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item-post d-flex flex-column">
                            <h4 class="text-white mb-4">Popular Post</h4>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Investment</p>
                                <a href="#" class="text-body">Best of the Best Awards by Asia Asset Management</a>
                            </div>
                            <div class="d-flex flex-column mb-3">
                                <p class="text-uppercase text-primary mb-2">Business</p>
                                <a href="#" class="text-body">Committed to providing accessibility to our teams and solutions, you may find us in an office near you</a>
                            </div>
                            <div class="footer-btn text-start">
                                <a href="#" class="btn btn-light rounded-pill px-4">View All Post <i class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="https://zaffrantech.com/" target="_blank" class="border-bottom text-primary"><i class="fas fa-copyright text-light me-2"></i>https://zaffrantech.com</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-primary" href="https://zaffrantech.com/">ZaffranTech</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ URL::to('web/assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ URL::to('web/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ URL::to('web/assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ URL::to('web/assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ URL::to('web/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ URL::to('web/assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <!-- Template Javascript -->
    <script src="{{ URL::to('web/assets/js/main.js') }}"></script>
    </body>

</html>


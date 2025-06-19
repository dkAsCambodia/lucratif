
<!-- Navbar & Hero Start -->
<div class="container-fluid sticky-top px-0">
    <div class="position-absolute bg-dark" style="left: 0; top: 0; width: 100%; height: 100%;">
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-expand-lg navbar-dark bg-white py-3 px-4">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fas fa-donate me-3"></i>LUCRATIF LLC</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="/" wire:navigate class="nav-item nav-link {{ Route::is('home') ? 'active' : '' }}">Home</a>
                    <a href="/about-us/company-overview" wire:navigate class="nav-item nav-link {{ Route::is('aboutus') ? 'active' : '' }}">About</a>
                    <a href="/investment-insights" wire:navigate class="nav-item nav-link {{ Route::is('investinsight') ? 'active' : '' }}">Investment Insights</a>
                    <a href="https://gconlive.com" class="nav-item nav-link">GCON</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="blog.html" class="dropdown-item">Our Blog</a>
                            <a href="team.html" class="dropdown-item">Our Team</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="faqs.html" class="dropdown-item">FAQs</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="/contactus" wire:navigate class="nav-item nav-link {{ Route::is('contactus') ? 'active' : '' }}">Contact</a>
                </div>
                <div class="d-flex align-items-center flex-nowrap pt-xl-0">
                    <button class="btn btn-primary btn-md-square mx-2" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button>
                    <a href="#" class="btn btn-primary rounded-pill text-white py-2 px-4 ms-2 flex-wrap flex-sm-shrink-0">Start Investment</a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar & Hero End -->


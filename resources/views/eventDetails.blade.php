@extends('layouts.app')
@section('content')
    @include('includes.navTemp')

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Member Login</h5>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column">
            <form class="custom-form member-login-form" action="#" method="post" role="form">

                <div class="member-login-form-body">
                    <div class="mb-4">
                        <label class="form-label mb-2" for="member-login-number">Membership No.</label>

                        <input type="text" name="member-login-number" id="member-login-number" class="form-control"
                            placeholder="11002560" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label mb-2" for="member-login-password">Password</label>

                        <input type="password" name="member-login-password" id="member-login-password"
                            pattern="[0-9a-zA-Z]{4,10}" class="form-control" placeholder="Password" required="">
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">

                        <label class="form-check-label" for="flexCheckDefault">
                            Remember me
                        </label>
                    </div>

                    <div class="col-lg-5 col-md-7 col-8 mx-auto">
                        <button type="submit" class="form-control">Login</button>
                    </div>

                    <div class="text-center my-4">
                        <a href="#">Forgotten password?</a>
                    </div>
                </div>
            </form>

            <div class="mt-auto mb-5">
                <p>
                    <strong class="text-white me-3">Any Questions?</strong>

                    <a href="tel: 010-020-0340" class="contact-link">
                        010-020-0340
                    </a>
                </p>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#3D405B" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </div>


    <section class="hero-section hero-50 d-flex justify-content-center align-items-center" id="section_1">

        <div class="section-overlay"></div>

        <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="#3D405B" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0">
            </path>
            <path fill="#3D405B" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0">
            </path>
            <path fill="#3D405B" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0">
            </path>
            <path fill="#3D405B" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0">
            </path>
            <path fill="#3D405B" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z"
                stroke-width="0"></path>
            <path fill="#3D405B" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z"
                stroke-width="0"></path>
            <path fill="#3D405B" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z"
                stroke-width="0"></path>
        </svg>

        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">

                    <h1 class="text-white mb-4 pb-2">Event Detail.</h1>

                    <a href="#section_2" class="btn custom-btn smoothscroll me-3">Learn more</a>
                </div>

            </div>
        </div>

        <svg viewBox="0 0 1962 178" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path fill="#ffffff" d="M 0 114 C 118.5 114 118.5 167 237 167 L 237 167 L 237 0 L 0 0 Z" stroke-width="0">
            </path>
            <path fill="#ffffff" d="M 236 167 C 373 167 373 128 510 128 L 510 128 L 510 0 L 236 0 Z" stroke-width="0">
            </path>
            <path fill="#ffffff" d="M 509 128 C 607 128 607 153 705 153 L 705 153 L 705 0 L 509 0 Z" stroke-width="0">
            </path>
            <path fill="#ffffff" d="M 704 153 C 812 153 812 113 920 113 L 920 113 L 920 0 L 704 0 Z" stroke-width="0">
            </path>
            <path fill="#ffffff" d="M 919 113 C 1048.5 113 1048.5 148 1178 148 L 1178 148 L 1178 0 L 919 0 Z"
                stroke-width="0"></path>
            <path fill="#ffffff" d="M 1177 148 C 1359.5 148 1359.5 129 1542 129 L 1542 129 L 1542 0 L 1177 0 Z"
                stroke-width="0"></path>
            <path fill="#ffffff" d="M 1541 129 C 1751.5 129 1751.5 138 1962 138 L 1962 138 L 1962 0 L 1541 0 Z"
                stroke-width="0"></path>
        </svg>
    </section>


    <section class="events-section events-detail-section section-padding" id="section_2">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-8 col-12 mx-auto">
                    <h2 class="mb-lg-5 mb-4">Tiya Club's Group Tournaments</h2>

                    <div class="custom-block-image-wrap">
                        <img src="{{ asset('images/professional-golf-player.jpg') }}" class="custom-block-image img-fluid"
                            alt="">
                    </div>

                    <div class="custom-block-info">
                        <h3 class="mb-3">Golf Club based in Orlando</h3>

                        <p>Tiya Golf Club is Bootstrap v5.3.0 HTML CSS template for your golf related websites. Anyone can
                            download, edit and use this layout for commercial purposes.</p>

                        <p>Tiya is 100% free CSS template provided by TemplateMo website. Please tell your friends about our
                            website. Thank you for visiting.</p>

                        <div class="events-detail-info row my-5">
                            <div class="col-lg-12 col-12">
                                <h4 class="mb-3">Event Detail</h4>
                            </div>

                            <div class="col-lg-4 col-12">
                                <span class="custom-block-span">Date:</span>

                                <p class="mb-0">18 Mar 2048</p>
                            </div>

                            <div class="col-lg-4 col-12 my-3 my-lg-0">
                                <span class="custom-block-span">Location:</span>

                                <p class="mb-0">Tiya Golf Club</p>
                            </div>

                            <div class="col-lg-4 col-12">
                                <span class="custom-block-span">Ticket:</span>

                                <p class="mb-0">$150</p>
                            </div>
                        </div>

                        <div class="contact-info">
                            <div class="contact-info-item">
                                <div class="contact-info-body">
                                    <strong>London, United Kingdom</strong>

                                    <p class="mt-2 mb-1">
                                        <a href="tel: 010-020-0340" class="contact-link">
                                            (020)
                                            010-020-0340
                                        </a>
                                    </p>

                                    <p class="mb-0">
                                        <a href="mailto:info@company.com" class="contact-link">
                                            info@company.com
                                        </a>
                                    </p>
                                </div>

                                <div class="contact-info-footer">
                                    <a href="#">Directions</a>
                                </div>
                            </div>

                            <img src="{{ asset('images/WorldMap.svg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 me-auto mb-5 mb-lg-0">
                    <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
                        <img src="{{ asset('images/logo.png') }}" class="navbar-brand-image img-fluid" alt="">
                        <span class="navbar-brand-text">
                            Tiya
                            <small>Golf Club</small>
                        </span>
                    </a>
                </div>

                <div class="col-lg-3 col-12">
                    <h5 class="site-footer-title mb-4">Join Us</h5>

                    <p class="d-flex border-bottom pb-3 mb-3 me-lg-3">
                        <span>Mon-Fri</span>
                        6:00 AM - 6:00 PM
                    </p>

                    <p class="d-flex me-lg-3">
                        <span>Sat-Sun</span>
                        6:30 AM - 8:30 PM
                    </p>
                    <br>
                    <p class="copyright-text">Copyright © 2048 Tiya Golf Club</p>
                </div>

                <div class="col-lg-2 col-12 ms-auto">
                    <ul class="social-icon mt-lg-5 mt-3 mb-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>

                    <p class="copyright-text">Design: <a rel="nofollow" href="https://templatemo.com"
                            target="_blank">TemplateMo</a></p>
                </div>

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#81B29A" fill-opacity="1"
                d="M0,224L34.3,192C68.6,160,137,96,206,90.7C274.3,85,343,139,411,144C480,149,549,107,617,122.7C685.7,139,754,213,823,240C891.4,267,960,245,1029,224C1097.1,203,1166,181,1234,160C1302.9,139,1371,117,1406,106.7L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
            </path>
        </svg>
    </footer>





    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
@endsection

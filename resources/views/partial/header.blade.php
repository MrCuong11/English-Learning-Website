<header class="main-header main-header--one clearfix engspire-header">
    <!-- Top Header Section with Logo and Contact Info -->
    <div class="main-header--one__top clearfix engspire-top-bar">
        <div class="container">
            <div class="main-header--one__top-inner clearfix engspire-flex-container">
                <div class="main-header--one__top-left">
                    <div class="main-header--one__top-logo engspire-logo-container">
                        <a href="{{ url('/') }}" class="engspire-logo-link">
                            <img src="{{ asset('images/resources/demo.png') }}" alt="EngSpire Logo" class="engspire-logo" />
                        </a>
                    </div>
                </div>

                <div class="main-header--one__top-right clearfix">
                    <!-- Social Media Links with Hover Effects -->
                    <ul class="main-header--one__top-social-link list-unstyled clearfix engspire-social-icons">
                        <li class="engspire-social-item">
                            <a href="#" class="engspire-social-link engspire-twitter"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li class="engspire-social-item">
                            <a href="#" class="engspire-social-link engspire-facebook"><i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="engspire-social-item">
                            <a href="#" class="engspire-social-link engspire-pinterest"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li class="engspire-social-item">
                            <a href="#" class="engspire-social-link engspire-instagram"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>

                    <!-- Contact Information with Enhanced Styling -->
                    <div class="main-header--one__top-contact-info clearfix engspire-contact-container">
                        <ul class="main-header--one__top-contact-info-list list-unstyled engspire-contact-list">
                            <li class="main-header--one__top-contact-info-list-item engspire-contact-item">
                                <div class="icon engspire-contact-icon">
                                    <span class="icon-phone-call-1"></span>
                                </div>
                                <div class="text engspire-contact-text">
                                    <h6 class="engspire-contact-title">Call Agent</h6>
                                    <p><a href="tel:92888666000" class="engspire-phone-link">92 888 666 0000</a></p>
                                </div>
                            </li>
                            <li class="main-header--one__top-contact-info-list-item engspire-contact-item">
                                <div class="icon engspire-contact-icon">
                                    <span class="icon-message"></span>
                                </div>
                                <div class="text engspire-contact-text">
                                    <h6 class="engspire-contact-title">Email Us</h6>
                                    <p>
                                        <a href="mailto:needhelp@company.com" class="engspire-email-link">needhelp@company.com</a>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Section with Enhanced Menu -->
    <div class="main-header-one__bottom clearfix engspire-nav-container">
        <div class="container">
            <div class="main-header-one__bottom-inner clearfix engspire-nav-inner">
                <nav class="main-menu main-menu--1 engspire-main-menu">
                    <div class="main-menu__inner engspire-menu-wrapper">
                        <a href="#" class="mobile-nav__toggler engspire-mobile-toggler"><i class="fa fa-bars"></i></a>

                        <div class="left engspire-menu-left">
                            <ul class="main-menu__list engspire-menu-list">
                                <li class="{{ Request::is('/') ? 'current' : '' }} engspire-menu-item">
                                    <a href="{{ url('/') }}" class="engspire-menu-link">Home</a>
                                </li>
                                <li class="dropdown engspire-menu-item engspire-dropdown
                                    {{ (Request::is('skill/*') && !Request::is('skill/grammar*')) ? 'current' : '' }}
                                    {{ Request::is('skill') ? 'current' : '' }}">
                                    <a href="{{ route('skill.outerPage') }}" class="engspire-menu-link">Skills</a>
                                    <ul class="engspire-dropdown-menu">
                                        <li class="engspire-dropdown-item {{ Request::is('skill/listening*') ? 'current-tag' : '' }}">
                                            <a href="{{ route('skill.index', ['slug' => 'listening']) }}" class="engspire-dropdown-link">Listening</a>
                                        </li>
                                        <li class="engspire-dropdown-item {{ Request::is('skill/reading*') ? 'current-tag' : '' }}">
                                            <a href="{{ route('skill.index', ['slug' => 'reading']) }}" class="engspire-dropdown-link">Reading</a>
                                        </li>
                                        <li class="engspire-dropdown-item {{ Request::is('skill/speaking*') ? 'current-tag' : '' }}">
                                            <a href="{{ route('skill.index', ['slug' => 'speaking']) }}" class="engspire-dropdown-link">Speaking</a>
                                        </li>
                                        <li class="engspire-dropdown-item {{ Request::is('skill/writing*') ? 'current-tag' : '' }}">
                                            <a href="{{ route('skill.index', ['slug' => 'writing']) }}" class="engspire-dropdown-link">Writing</a>
                                        </li>
                                    </ul>

                                </li>




                                <li class="dropdown engspire-menu-item engspire-dropdown {{ Request::is('skill/grammar/course/*') ? 'current' : '' }}
                                {{ Request::is('grammar') ? 'current' : '' }}">
                                    <a href="{{ route('grammar.page', ['slug' => 'grammar']) }}" class="engspire-menu-link">Grammar</a>
                                    <ul class="engspire-dropdown-menu">
                                        <li class="engspire-dropdown-item {{ Request::is('skill/grammar/course/a1-a2-grammar') ? 'current-tag' : '' }}">
                                            <a href="{{ url('skill/grammar/course/a1-a2-grammar') }}"
                                                class="engspire-dropdown-link">
                                                A1-A2 grammar
                                            </a>
                                        </li>
                                        <li class="engspire-dropdown-item {{ Request::is('skill/grammar/course/b1-b2-grammar') ? 'current-tag' : '' }}">
                                            <a href="{{ url('skill/grammar/course/b1-b2-grammar') }}"
                                                class="engspire-dropdown-link ">
                                                B1-B2 grammar
                                            </a>
                                        </li>
                                        <li class="engspire-dropdown-item {{ Request::is('skill/grammar/course/c1-grammar') ? 'current-tag' : '' }}">
                                            <a href="{{ url('skill/grammar/course/c1-grammar') }}"
                                                class="engspire-dropdown-link ">
                                                C1 grammar
                                            </a>
                                        </li>
                                        <li class="engspire-dropdown-item {{ Request::is('skill/grammar/course/english-grammar-reference') ? 'current-tag' : '' }}">
                                            <a href="{{ url('skill/grammar/course/english-grammar-reference') }}"
                                                class="engspire-dropdown-link ">
                                                English grammar reference
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="{{ Request::is('vocabulary') ? 'current' : '' }} engspire-menu-item">
                                    <a href="{{ url('vocabulary') }}" class="engspire-menu-link">Dictionary</a>
                                </li>

                                <li class="{{ Request::is('test/*') ? 'current' : '' }} engspire-menu-item">
                                    <a href="{{ url('test/1') }}" class="engspire-menu-link">Test Level</a>
                                </li>
                            </ul>
                        </div>

                        <div class="right engspire-menu-right">
                            <div class="main-menu__right engspire-user-section">
                                @auth
                                <div class="main-menu__right-login-register d-flex align-items-center engspire-user-info engspire-user-avatar-dropdown">
                                    <div class="engspire-avatar-dropdown-trigger">
                                        <img src="{{ Auth::user()->avatar ? Auth::user()->avatar : asset('images/favicons/profile.png') }}"
                                            alt="Avatar" class="rounded-circle engspire-user-avatar" width="40" height="40">
                                        <div class="engspire-avatar-dropdown-menu">
                                            <div class="dropdown-header engspire-dropdown-username">{{ Auth::user()->name }}</div>
                                            <a href="{{ url('profile') }}" class="dropdown-item engspire-profile-link">Profile Detail</a>
                                            <form action="{{ route('logout') }}" method="POST" class="dropdown-item engspire-dropdown-logout-form" style="margin: 0; padding: 0;">
                                                @csrf
                                                <button type="submit" class="log-out-btn engspire-logout-btn">Logout</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                @endauth

                                @guest
                                <div class="main-menu__right-login-register d-flex align-items-center engspire-auth-links">
                                    <ul class="list-unstyled d-flex mb-0 engspire-auth-list">
                                        <li class="mr-3 engspire-auth-item"><a href="{{ route('login') }}" class="engspire-login-link">Login</a></li>
                                        <li class="engspire-auth-item"><a href="{{ route('registerDB') }}" class="engspire-register-link">Register</a></li>
                                    </ul>
                                </div>
                                @endguest

                                <div class="main-menu__right-cart-search engspire-search-section">
                                    <div class="main-menu__right-search-box engspire-search-box">
                                        <a href="#" class="thm-btn search-toggler engspire-search-btn">Search</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<div class="stricky-header stricked-menu main-menu engspire-sticky-header">
    <div class="sticky-header__content engspire-sticky-content"></div>
    <!-- /.sticky-header__content -->
</div>
<!-- /.stricky-header -->
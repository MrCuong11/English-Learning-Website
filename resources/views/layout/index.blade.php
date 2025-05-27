<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <!-- favicons Icons -->
    <link
        rel="apple-touch-icon"
        sizes="180x180"
        href="assets/images/favicons/apple-touch-icon.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="32x32"
        href="assets/images/favicons/favicon-32x32.png" />
    <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        .engspire-user-avatar-dropdown {
            position: relative;
        }

        .engspire-avatar-dropdown-trigger {
            display: flex;
            align-items: center;
            cursor: pointer;
            position: relative;
            z-index: 20;
        }

        .engspire-user-avatar {
            box-shadow: 0 2px 10px rgba(40, 40, 40, 0.08);
            border: 2px solid #e8f4ee;
            transition: box-shadow 0.18s, border 0.18s;
        }

        .engspire-user-avatar:hover {
            box-shadow: 0 8px 26px rgba(15, 103, 65, 0.11);
            border: 2px solid #098143;
        }

        .engspire-avatar-dropdown-menu {
            display: none;
            position: absolute;
            top: calc(100% + 16px);
            right: 0;
            min-width: 230px;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(38, 51, 45, 0.17), 0 2px 8px rgba(8, 88, 43, 0.04);
            border: 1px solid #e9efea;
            z-index: 50;
            padding: 0;
            overflow: hidden;
            backdrop-filter: blur(7px);
            font-family: 'Segoe UI', 'Arial', sans-serif;
            animation: dropdownFadeIn 0.24s cubic-bezier(.39, .58, .57, 1) both;
        }

        @keyframes dropdownFadeIn {
            from {
                opacity: 0;
                transform: translateY(-8px) scale(0.98);
            }

            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .engspire-avatar-dropdown-trigger.open .engspire-avatar-dropdown-menu {
            display: block;
        }

        .engspire-avatar-dropdown-menu::before {
            content: '';
            display: block;
            position: absolute;
            top: -11px;
            right: 40px;
            width: 22px;
            height: 22px;
            background: #fff;
            border-left: 1px solid #e9efea;
            border-top: 1px solid #e9efea;
            transform: rotate(45deg);
            z-index: 51;
            box-shadow: -3px -3px 9px 0 rgba(8, 88, 43, .05);
        }

        .engspire-dropdown-username {
            font-weight: 700;
            padding: 18px 28px 10px 28px;
            color: #1a1d2d;
            font-size: 1.08rem;
            letter-spacing: 0.01em;
            background: transparent;
            margin: 0;
        }

        .engspire-avatar-dropdown-divider {
            height: 1px;
            background: linear-gradient(to right, #e1ecd6 10%, #fff 100%);
            border: none;
            margin: 0 0 0 0;
        }

        .engspire-avatar-dropdown-menu .dropdown-item {
            padding: 12px 28px 12px 28px;
            background: none;
            color: #27352d;
            font-size: 1.01rem;
            text-decoration: none;
            outline: none;
            border: none;
            cursor: pointer;
            transition: background 0.18s, color 0.18s, transform 0.19s;
            display: flex;
            align-items: center;
            position: relative;
            user-select: none;
        }

        .engspire-avatar-dropdown-menu .dropdown-item:hover {
            background: #e6f5eb;
            color: #098143;
            transform: translateX(2px) scale(1.03);
        }

        /* Profile detail link with icon effect if needed */
        .engspire-profile-link:before {
            content: '\1F464';
            /* generic profile icon */
            font-size: 1.09em;
            margin-right: 11px;
            opacity: 0.70;
        }

        .engspire-profile-link {
            font-weight: 500;
        }

        /* Divider above logout for separation */
        .engspire-dropdown-logout-form {
            border-top: 1px solid #e7f3ea;
            margin-top: 2px;
            padding-top: 3px;
        }

        .engspire-logout-btn {
            background: none;
            border: none;
            color: #dc3545;
            font-weight: 500;
            padding: 0;
            width: 100%;
            text-align: left;
            font-size: 1.01rem;
            transition: color .15s, background .15s, transform .18s;
            outline: none;
        }

        .engspire-logout-btn:before {
            content: '\f2f5';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            margin-right: 9px;
            opacity: .65;
        }

        .engspire-logout-btn:hover {
            color: #fff !important;
            background: #dc3545;
            border-radius: 8px;
            transform: translateX(2px) scale(1.03);
        }

        @media (max-width: 600px) {
            .engspire-avatar-dropdown-menu {
                right: auto;
                left: 0;
                min-width: 165px;
                border-radius: 12px;
            }

            .engspire-dropdown-username,
            .engspire-avatar-dropdown-menu .dropdown-item {
                padding-left: 14px;
                padding-right: 14px;
            }

            .engspire-avatar-dropdown-menu::before {
                left: 28px;
                right: auto;
            }
        }
    </style>


    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
</head>

<body>
    <div class="page-wrapper">
        @include('partial.header')


        <!--Content here  -->

        <!-- Breadcrumb -->
        <!-- <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                </ol>
            </nav>
        </div> -->
        <!-- End Breadcrumb -->

        <!-- Slider -->
        <div style="padding: 0" class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide" id="carousel-554496">
                        <ol class="carousel-indicators">
                            <li data-slide-to="0" data-target="#carousel-554496"></li>
                            <li data-slide-to="1" data-target="#carousel-554496"></li>
                            <li
                                data-slide-to="2"
                                data-target="#carousel-554496"
                                class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img
                                    class="d-block w-100"
                                    alt="Carousel Bootstrap First"
                                    src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/1280x500/public/RS8118_GettyImages-935659716-hig.jpeg?itok=WzCouPgo" />
                                <div class="carousel-caption">
                                    <h4>Your Benefit</h4>
                                    <p>
                                        Learn English online and improve your skills through our high-quality courses and resources.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <img
                                    class="d-block w-100"
                                    alt="Carousel Bootstrap Second"
                                    src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/1280x500/public/2023-04/RS8759_GettyImages-1214822065.jpg?itok=Bd6PHuBC" />
                                <div class="carousel-caption">
                                    <h4>Step Into Confidence</h4>
                                    <p>
                                        Learning English isn't just about grammar and vocabulary — it's about believing in your voice. Through guided practice and real-world communication, we help you express yourself with clarity and confidence.
                                    </p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img
                                    class="d-block w-100"
                                    alt="Carousel Bootstrap Third"
                                    src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/1280x500/public/2022-07/GettyImages-1180037246-1280x500.jpg?itok=g39tFn3I" />
                                <div class="carousel-caption">
                                    <h4>Unlock Your Potential</h4>
                                    <p>
                                        English is more than just a language — it's a key that unlocks doors to new opportunities, cultures, and connections. With each lesson, you're not just learning words; you're building a future filled with possibility.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <a
                            class="carousel-control-prev"
                            href="#carousel-554496"
                            data-slide="prev"><span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span></a>
                        <a
                            class="carousel-control-next"
                            href="#carousel-554496"
                            data-slide="next"><span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>


            <!-- Hero section  -->
            <div class="hero-section">
                <div class="section-heading heading-lg heading-md">
                    We provide you with the right tools to help you<br />
                    interact confidently in the real world.
                </div>
                <div class="container mb-5">
                    <div class="row hero-box">
                        <div class="col-md-6 pl-0 hero-image">
                            <img
                                src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/630x680/public/2023-04/RS9171_GettyImages-1391836113_1440x960_0.jpg?itok=5DFIIUea" />
                        </div>
                        <div class="col-md-6 hero-content">
                            <h2 class="hero-title title-main">Skills</h2>
                            <p>
                                Practise your listening, reading, writing and speaking and
                                learn useful language to use at work or to communicate
                                effectively with friends.
                            </p>
                            <ul>
                                <li>Audio and video to practise your listening and speaking skills.</li>
                                <li>Model texts for all types of writing tasks.</li>
                                <li>Work on your reading skills to read more quickly and understand more.</li>
                            </ul>
                            <button class="thm-btn btn-purple mt-3" onclick="window.location.href='{{ route('skill.outerPage') }}'">Start learning</button>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Hero section  -->

            <!-- Hero section 2  -->
            <div class="hero-section hero-section-2">
                <div class="section-heading heading-lg heading-md">
                    Gain the skills and support you need to communicate clearly <br> and confidently in real-life situations.
                </div>
                <div class="container mb-5">
                    <div class="row hero-box">
                        <div class="col-md-6 hero-content">
                            <h2 class="hero-title title-main">Grammar</h2>
                            <p>
                                Master your grammar skills with easy-to-follow lessons designed to improve your language proficiency and boost your confidence.
                            </p>
                            <ul>
                                <li>Clear and simple grammar explanations to help you understand key concepts and structures.</li>
                                <li>Interactive exercises that allow you to test your knowledge and reinforce your learning.</li>
                                <li>Comprehensive grammar references for deeper understanding and additional practice.</li>
                            </ul>
                            <!-- Sử dụng blade để đưa route vào JS -->
                            <button class="thm-btn btn-purple mt-3" onclick="window.location.href='{{ route('grammar.page', ['slug' => 'grammar']) }}'">Start learning</button>
                        </div>
                        <div class="col-md-6 pr-0 hero-image">
                            <img
                                src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/630x680/public/2023-04/RS8037_GettyImages-985388610_square.jpg?itok=IhmUSJuJ" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Hero section 2  -->

        <!-- Hero section 3  -->
        <div class="hero-section hero-section-3">
            <div class="section-heading heading-lg heading-md">
                Expand your vocabulary with practical words and phrases you can use every day — at work, at school <br>
                or while traveling the world
            </div>
            <div class="container mb-5">
                <div class="row hero-box">
                    <div class="col-md-6 pl-0 hero-image">
                        <img
                            src="https://learnenglish.britishcouncil.org/sites/podcasts/files/styles/630x680/public/2023-04/RS8020_GettyImages-965461824_square.jpg?itok=KxPJn752" />
                    </div>
                    <div class="col-md-6 hero-content">
                        <h2 class="hero-title title-main">Dictionary</h2>
                        <p>
                            Expand your vocabulary and master new words to communicate effectively in English.
                        </p>
                        <ul>
                            <li>Learn word meanings, pronunciation, and spelling with interactive dictionary features.</li>
                            <li>Explore words across various topics and contexts for broader knowledge.</li>
                            <li>Enjoy word games to reinforce your vocabulary in a fun way.</li>
                        </ul>
                        <!-- Điều hướng đến URL 'vocabulary' -->
                        <button class="thm-btn btn-purple mt-3" onclick="window.location.href='{{ url('vocabulary') }}'">Start learning</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Hero section 3  -->
    </div>
    <!-- End Slider -->



    <!-- /.Content here  -->

    @include('partial.footer')
    <!-- /.page-wrapper -->








    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html" aria-label="logo image"><img src="{{ asset('images/resources/demo.png') }}" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="icon-phone-call"></i>
                    <a href="mailto:needhelp@packageName__.com">needhelp@index.com</a>
                </li>
                <li>
                    <i class="icon-letter"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul>
            <!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
                <!-- /.mobile-nav__social -->
            </div>
            <!-- /.mobile-nav__top -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn2">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jarallax@2.0.1/dist/jarallax.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.appear/1.1.1/jquery.appear.min.js"></script>

    <!-- template js -->
    <script src="{{ asset('js/index.js') }}"></script>
    <script>
        (function() {
            var triggers = document.querySelectorAll('.engspire-avatar-dropdown-trigger');

            triggers.forEach(function(trigger) {
                // Toggle on click
                trigger.addEventListener('click', function(e) {
                    e.stopPropagation();
                    // Close any other open dropdowns
                    triggers.forEach(function(other) {
                        if (other !== trigger) other.classList.remove('open');
                    });
                    trigger.classList.toggle('open');
                });
                // Close when menu item clicked
                var menu = trigger.querySelector('.engspire-avatar-dropdown-menu');
                if (menu) {
                    menu.addEventListener('click', function(e) {
                        // If a menu item or link (not the menu itself) was clicked, close
                        if (e.target.classList.contains('dropdown-item') || e.target.closest('.dropdown-item')) {
                            trigger.classList.remove('open');
                        }
                    });
                }
            });

            // Click outside closes all
            document.addEventListener('click', function(e) {
                triggers.forEach(function(trigger) {
                    trigger.classList.remove('open');
                });
            });
        })();
    </script>
</body>

</html>
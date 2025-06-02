<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skill-pages.css') }}">

    <!-- Custom CSS for Flexbox -->
    <style>
        .custom-flex-row {
            display: flex;
            align-items: stretch;
            /* Đảm bảo chiều cao của cả hai cột bằng nhau */
        }

        .left-col,
        .right-col {
            flex: 1;
            /* Mỗi cột sẽ chiếm một phần không gian của container */
            display: flex;
            flex-direction: column;
        }

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
            color: #fff;
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
</head>

<body>
    <div class="page-wrapper">
        <!-- Include header -->
        @include('partial.header')

        <div class="container mt-5 mb-5">
            <div id="course" class="skills-section-heading heading-lg" style="margin-top: -20px">
                {{ $course->title }}
            </div>
            <div class="custom-flex-row">
                <div class="left-col">


                    <div id="course" class="corner-image">
                        @if (!empty($course->imageUrl))
                        <img src="{{ $course->imageUrl }}" alt="Skill Image" />
                        @endif
                    </div>



                    <div class="listening-description mt-3">
                        {!! $course->introduce !!}
                    </div>

                    <div class="course-highlight position-relative text-center py-5" style="margin-top: 40px">
                        <div class="background-layer"></div>

                        <div class="course-content p-5 mx-auto shadow">

                            <p>
                                Improve your English speaking, listening,
                                reading <br> and writing skills with our selection of <br>
                                online courses.

                            </p>
                            <div class="text-center mt-3">
                                <button class="explore-btn">Discovery your level</button>
                            </div>
                        </div>
                    </div>


                    <div class="skills-section-heading heading-lg" style="margin-top: 40px">
                        Choose a lesson
                    </div>


                    <div id="lesson">
                        @foreach ($lessons as $lesson)
                        <a href="{{ route('lesson.show', [
                                'skillSlug' => $skillSlug,
                                'courseSlug' => $course->slug,
                                'lessonSlug' => $lesson->slug,
                            ]) }}"
                            class="container-course text-decoration-none text-dark">

                            <div class="image-side">
                                @if (!empty($lesson->content['imageUrl']))
                                <img src="{{ $lesson->content['imageUrl'] }}" alt="{{ $lesson->title }}" />
                                @endif
                            </div>

                            <div class="text-side">
                                <h2>{{ $lesson->title }}</h2>
                                <p>{{ $lesson->description }}</p>
                            </div>
                        </a>
                        @endforeach
                    </div>




                    <div class="skills-section-heading heading-lg">
                        Learn to listen with confidence
                    </div>

                    <div class="listening-description" style="margin-top: -30px">
                        <p>
                            Our online English classes feature lots of useful learning materials and activities to
                            help you
                            listen and respond with confidence in a safe and inclusive learning environment.</p>

                        <p>
                            Practise listening to your classmates in live group classes, get listening support from
                            a personal
                            tutor in one-to-one lessons or practise by yourself at your own speed with a self-study
                            course.
                        </p>
                    </div>

                    <div class=" mt-3">
                        <button class="btn">Explore courses</button>
                    </div>
                </div>



                <div class="right-col">
                    @include('partial.side-bar', [
                    'allSkills' => $allSkills,
                    'skill' => $skill,
                    'courses' => $courses,
                    ])
                </div>




            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partial.footer')
    </div>

    <!-- Optional JS: jQuery, Popper.js, and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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
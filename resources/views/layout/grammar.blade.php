<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Crsine HTML Template For Car Services" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <!-- Link CSS files -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style-responsive.css') }}">
    @vite('resources/css/app.css')
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
        @include('partial.header')
        <div class="relative bg-red-200 w-full h-auto">
            <div class="z-0">
                <img src=" {{ $skill->imageUrl }}" class="w-full">
            </div>

            <div class=" absolute bottom-0 left-0 bg-white z-10 ml-16 pl-24 pt-8 pr-40 rounded-tr-4xl">
                <div class=" text-5xl font-bold text-blue-900 mb-8">{{ $skill->title }}</div>
                <div>
                    <p class=" text-4xl text-black">
                        {!! $skill->introduce !!}

                    </p>
                </div>
            </div>
        </div>
        <div class=" flex w-full max-w-screen-2xl mx-auto bg-white px-24 py-8">
            <div class="  w-75 pr-8 mr-8">
                <div class=" flex flex-col text-black">
                    {!! $skill->description !!}


                </div>
                <div class=" text-4xl font-bold text-blue-900 pb-8">
                    Choose a section
                </div>
                @foreach ($courses as $course)
                <div class=" relative mb-16 ">
                    <a
                        href="{{ route('course.show', ['skillSlug' => $skill->slug, 'courseSlug' => $course->slug]) }}">
                        <img class=" w-lg h-sm rounded-bl-4xl" src=" {{ $course->imageUrl }}">
                    </a>
                    <div
                        class=" absolute right-0 bottom-0 w-3/5 h-4/5 bg-white text-black z-10 pl-12 pt-8 rounded-tl-4xl pb-12">
                        <a
                            href="{{ route('course.show', ['skillSlug' => $skill->slug, 'courseSlug' => $course->slug]) }}">
                            <p class=" text-3xl font-bold text-blue-900 hover:underline">
                                {{ $course->title }}
                            </p>
                        </a>
                        <p>
                            {{ $course->introduce }}

                        </p>
                    </div>
                </div>
                @endforeach

                <div class=" pt-16">
                    <p class=" text-4xl font-bold text-blue-900">
                        Learn to use grammar correctly and confidently
                    </p>
                    <p class=" text-black">
                        Our online English classes feature lots of useful learning materials and activities to help you
                        improve your understanding of
                        grammar in a safe and inclusive learning environment.
                    </p>
                    <p class=" text-black">
                        Practise using grammar with your classmates in live group classes, get grammatical support from
                        a personal tutor in one-to-one
                        lessons or practise grammar by yourself at your own pace with a self-study course.
                    </p>
                    <div
                        class=" bg-blue-900 text-white px-8 py-2 rounded-4xl w-fit hover:bg-green-600 hover:text-black">
                        <button> Explore Courses</button>
                    </div>

                </div>
            </div>
            <div class=" w-25">
                <div
                    class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit mb-4">
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ A1-A2 grammar</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ B1-B2 grammar</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ C1 grammar</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ English grammar reference</p>
                </div>
                <div
                    class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit mb-4">
                    <p class=" text-2xl font-bold">Our websites</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ LearnEnglish Kids for
                        children aged 5 to 12</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ LearnEnglish Teens for
                        children aged 13 to 17</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ TeachingEnglish for teachers
                        and teacher educators</p>
                </div>
                <div class="px-4 py-2 text-purple-950 rounded-bl-4xl rounded-tr-4xl border-8 border-gray-200 h-fit">
                    <p class=" text-2xl font-bold">Help</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Free online English test</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Sign up for our newsletter
                    </p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer">✔ Frequently asked questions
                    </p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer"> Getting started</p>
                    <p class="hover:text-green-600 hover:underline hover:cursor-pointer"> House rules</p>
                </div>

            </div>
        </div>
        @include('partial.footer')
    </div>
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
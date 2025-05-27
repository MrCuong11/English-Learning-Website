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
            align-items: stretch; /* Đảm bảo chiều cao của cả hai cột bằng nhau */
        }

        .left-col, .right-col {
            flex: 1; /* Mỗi cột sẽ chiếm một phần không gian của container */
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <!-- Include header -->
        @include('partial.header')

        <div class="container mt-5 mb-5">
            <div id = "course" class="skills-section-heading heading-lg" style="margin-top: -20px">
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
</body>

</html>

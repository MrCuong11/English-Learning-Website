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

        <div class="container mt-5 mb-5">
            <div id="lesson" class="skills-section-heading heading-lg" style="margin-top: -20px">
                {{ $lesson->title }}
            </div>
            <div class="custom-flex-row">
                <div class="left-col">
                    <div id="lesson" class="corner-image">
                        @if ($skillTitle !== 'Speaking' && $skillTitle !== 'Vocabulary' && !empty($lesson->content['imageUrl']))
                        <img src="{{ $lesson->content['imageUrl'] }}" alt="{{ $lesson->image }}" />
                        @endif
                    </div>


                    <div class="listening-description mt-3">
                        {!! $lesson->content['introduce'] !!}
                    </div>




                    <div class="accordion" id="accordionTask2">
                        <div class="card">
                            <div class="card-header" id="headingTask2">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTask2" aria-expanded="false" aria-controls="collapseTask2"
                                    style="color: #23085A;">
                                    Preparation
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTask2" class="collapse" aria-labelledby="headingTask2"
                                data-parent="#accordionTask2">
                                <div class="card-body">
                                    @foreach ($lesson->tasks as $task)
                                    @if ($task->task_order == 2)
                                    @include('layout.preparation', ['task' => $task])
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                    $youtubeLink = $lesson->content['videoUrl'] ?? null;
                    $videoId = null;

                    if ($youtubeLink && preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $youtubeLink, $matches)) {
                    $videoId = $matches[1];
                    }
                    @endphp

                    @if ($videoId)
                    <div class="video-section mt-3 mb-3"
                        style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                        <iframe src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen style="position: absolute; top:0; left: 0; width: 100%; height: 100%;">
                        </iframe>
                    </div>
                    @endif



                    @if (!empty($lesson->content['audioUrl']))
                    <div class="audio-section mt-3 mb-">
                        <audio controls style="width: 100%; margin-bottom: 10px;">
                            <source src="{{ $lesson->content['audioUrl'] }}" type="audio/mpeg">
                        </audio>
                    </div>
                    @endif

                    @if (!empty($lesson->content['transcriptHtml']))
                    <div class="accordion" id="accordionTranscription">
                        <div class="card">
                            <div class="card-header" id="headingTranscription">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTranscription" aria-expanded="true"
                                    aria-controls="collapseTranscription" style="color: #23085A;">
                                    Transcription
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTranscription" class="collapse show"
                                aria-labelledby="headingTranscription" data-parent="#accordionTranscription">
                                <div class="card-body">
                                    <div class="listening-description" id="lesson-transcript"
                                        style="margin-top: 24px;">
                                        {!! $lesson->content['transcriptHtml'] !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif


                    <div id="lesson">
                        @if ($skillTitle == 'Writing')
                        <div class="skills-section-heading heading-md">
                            Tips
                        </div>

                        <div class="listening-description" style="margin-top: -40px;">
                            {!! $lesson->content['tips'] !!}
                        </div>
                        @endif
                    </div>


                    <!-- Task 0 -->
                    @if ($skillTitle !== 'Speaking')
                    <div class="accordion" id="accordionTask0">
                        <div class="card">
                            <div class="card-header" id="headingTask0">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTask0" aria-expanded="false" aria-controls="collapseTask0"
                                    style="color: #23085A;">
                                    Task 0
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTask0" class="collapse" aria-labelledby="headingTask0"
                                data-parent="#accordionTask0">
                                <div class="card-body">
                                    <!-- Nội dung Task 0 -->
                                    @foreach ($lesson->tasks as $task)
                                    @if ($task->task_order == 0)
                                    @include('layout.task0', ['task' => $task])
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif


                    <!-- Task 1 -->
                    <div class="accordion" id="accordionTask1">
                        <div class="card">
                            <div class="card-header" id="headingTask1">
                                <a href="#" class="listening-description" data-toggle="collapse"
                                    data-target="#collapseTask1" aria-expanded="false" aria-controls="collapseTask1"
                                    style="color: #23085A;">
                                    Task 1
                                    <span class="arrow-icon">▼</span>
                                </a>
                            </div>

                            <div id="collapseTask1" class="collapse" aria-labelledby="headingTask1"
                                data-parent="#accordionTask1">
                                <div class="card-body">
                                    @foreach ($lesson->tasks as $task)
                                    @if ($task->task_order == 1)
                                    @include('layout.task1', ['task' => $task])
                                    @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="skills-section-heading heading-md">
                        Discussion
                    </div>

                    <div class="listening-description" style="margin-top: -40px;">
                        {{ $lesson->content['discussion'] }}
                    </div>

                    @if (!empty($lesson->content['documentUrl']))
                    <div class="accordion-download" id="accordionDownload">
                        <div class="card">
                            <div class="card-header" id="headingDownload">
                                <div class="listening-description" style="color: #23085A; cursor: default;">
                                    Download Lesson PDF
                                </div>
                            </div>

                            <div id="collapseDownload" class="collapse show" aria-labelledby="headingDownload"
                                data-parent="#accordionDownload">
                                <div class="card-body">
                                    <div
                                        style="display: flex; align-items: center; background-color: white; border-radius: 0 80px 80px 0; overflow: hidden;">
                                        <div
                                            style="background-color: #2b0060; padding: 24px; display: flex; align-items: center; justify-content: center;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                                                fill="white" viewBox="0 0 24 24">
                                                <path
                                                    d="M12 2a5 5 0 00-5 5v4H5l7 7 7-7h-2V7a5 5 0 00-5-5zm-3 5a3 3 0 116 0v4h-6V7zm-5 13h14v2H4v-2z" />
                                            </svg>
                                        </div>
                                        <div style="padding: 0 24px;">
                                            <a href="{{ $lesson->content['documentUrl'] }}" target="_blank"
                                                style="color: #23085A; font-size: 18px; text-decoration: underline;">
                                                Worksheet
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif





                    <div style="margin-top: 40px;">
                        <button class="btn">Try another listening</button>
                    </div>

                    <!-- comment here  -->
                    <div style="margin-top: 48px;">
                        <h2 style="color: #23085A; font-size: 2rem; font-weight: bold; margin-bottom: 16px;">Language level</h2>
                        <div style="display: flex; align-items: center; gap: 16px; margin-bottom: 8px;">
                            <span style="background-color: #008738; color: white; padding: 8px 18px; border-radius: 4px; font-size: 1.1rem; font-weight: 500;">A1 Elementary</span>
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 8px;">
                            <!-- Interactive Stars -->
                            <span id="star-1" data-star="1" class="rating-star" style="cursor:pointer; color: #bbb; font-size: 1.5rem;">★</span>
                            <span id="star-2" data-star="2" class="rating-star" style="cursor:pointer; color: #bbb; font-size: 1.5rem;">★</span>
                            <span id="star-3" data-star="3" class="rating-star" style="cursor:pointer; color: #bbb; font-size: 1.5rem;">★</span>
                            <span id="star-4" data-star="4" class="rating-star" style="cursor:pointer; color: #bbb; font-size: 1.5rem;">★</span>
                            <span id="star-5" data-star="5" class="rating-star" style="cursor:pointer; color: #bbb; font-size: 1.5rem;">★</span>
                            <span style="margin-left: 8px; color: #444; font-size: 0.95rem;">Average: 4.2 (138 votes)</span>
                        </div>

                        <!-- Comments List -->
                        <div style="margin-top: 16px;">
                            <!-- ALL comment đã post -->
                            <div id="comments-container">
                                @foreach ($lesson->comments->whereNull('parent_id')->sortByDesc('created_at')->values() as $index => $comment)
                                <div class="comment-wrapper" style="{{ $index >= 7 ? 'display:none;' : '' }}">
                                    @include('partial.comment', ['comment' => $comment])
                                </div>
                                @endforeach
                            </div>

                            @if ($lesson->comments->count() > 7)
                            <div id="load-more-wrapper" style="width:100%; text-align:center; background:#d2cfdf; padding: 20px 0 22px 0; border-radius: 0 0 28px 28px; margin-bottom: 26px;">
                                <button id="load-more-btn" style="background:#2b0060; color:#fff; border:none; outline:none; padding:10px 34px; font-size:1.11rem; font-weight:500; border-radius: 22px; cursor:pointer;">Load more comments</button>
                            </div>
                            @endif
                            <form id="comment-form">
                                @csrf
                                <div style="background:#f5f7fa; padding:40px 16px 32px 16px; border-radius: 0 0 32px 32px; margin-bottom:40px;">
                                    <h2 style="font-size:2rem; font-weight:900; color:#2b0060; margin-bottom:18px;">Add new comment</h2>

                                    <label for="ckeditor-comment" style="display:block; font-size:1.1rem; font-weight:700; color:#211658; margin-bottom:9px;">
                                        Comment<span style="color:#f44336;">*</span>
                                    </label>

                                    <textarea id="ckeditor-comment" name="comment" rows="7"></textarea>

                                    <div id="comment-error" style="color: red; margin-top: 8px;"></div>

                                    @auth
                                    <button type="submit" style="margin-top:24px; background:#2b0060; color:#fff; border:none; outline:none; padding:13px 48px; border-radius: 22px; font-size:1.13rem; font-weight:600; cursor:pointer;">
                                        Save
                                    </button>
                                    @endauth
                                    @guest
                                    <button onclick="window.location.href='{{ route('login') }}'" style="margin-top:24px; background:#2b0060; color:#fff; border:none; outline:none; padding:13px 48px; border-radius: 22px; font-size:1.13rem; font-weight:600; cursor:pointer;">
                                        Login to post a comment
                                    </button>

                                    @endguest
                                </div>
                            </form>
                            <!-- Hiển thị lỗi -->
                            <div id="comment-error" style="color: red; margin-top: 10px;"></div>
                        </div>
                    </div>

                </div>



                <div class="right-col">
                    @include('partial.side-bar', ['lessonSlug' => $lessonSlug])
                </div>



            </div>
        </div>
    </div>

    <!-- Footer -->
    @include('partial.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


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


        //cosllapse button
        $(document).ready(function() {
            $('.collapse').on('shown.bs.collapse', function() {
                // Debug: console.log để kiểm tra event được gọi hay không
                console.log('Collapse shown', this);
                $(this).closest('.card').find('.card-header .arrow-icon').text('▲');
            });
            $('.collapse').on('hidden.bs.collapse', function() {
                console.log('Collapse hidden', this);
                $(this).closest('.card').find('.card-header .arrow-icon').text('▼');
            });
        });


        // add comment
        $('#comment-form').submit(function(e) {
            e.preventDefault();

            let commentText = CKEDITOR.instances['ckeditor-comment'].getData();
            let url = "{{ route('comments.store', ['lessonId' => $lesson->id]) }}";
            let token = $('input[name="_token"]').val();
            console.log(token);

            $.ajax({
                url: url,
                method: 'POST',
                data: {
                    _token: token,
                    comment: commentText
                },
                success: function(response) {
                    if (response.success) {
                        $('#comments-container').prepend(renderComment(response.comment));
                        CKEDITOR.instances['ckeditor-comment'].setData(''); // Clear CKEditor sau khi gửi
                        $('#comment-error').text('');
                    }
                },
                error: function(xhr) {
                    let res = xhr.responseJSON;
                    if (res && res.errors && res.errors.comment) {
                        $('#comment-error').text(res.errors.comment[0]);
                    }
                }
            });
        });


        function renderComment(comment, parentId = null) {
            let avatar = comment.user.avatar ?? "{{ asset('images/favicons/profile.png') }}";
            let name = comment.user.name ?? 'Anonymous';
            let html = `
        <div class="comment-card" style="display: flex; background: #f4f4f4; border: 1px solid #e0e0e0; border-radius: 8px; margin-bottom: 18px; ${parentId ? 'margin-left: 50px;' : ''}">
            <div style="min-width: 90px; max-width: 90px; background: #2b0060; display: flex; align-items: center; justify-content: center; border-radius: 8px 0 0 8px;">
                <img src="${avatar}" alt="Avatar" style="width: 48px; height: 48px; border-radius: 50%;">
            </div>
            <div style="flex: 1; padding: 14px 18px; background: #fff; border-radius: 0 8px 8px 0;">
                <div style="font-size: 1rem; color: #333; margin-bottom: 6px;">
                    <span>Submitted by <strong>${name}</strong> on <strong>just now</strong></span>
                </div>
                <div style="margin-bottom: 12px; color: #222; font-size: 1.02rem; line-height: 1.7;">
                    ${comment.comment}
                </div>
                <hr style="margin:14px 0; border:none; border-top:1px solid #e0e0e0" />
                <div style="font-size: 0.96rem; color: #333;">
                    <a href="#" class="reply-btn text-success" data-comment-id="${comment.id}" style="color: #43B02A;">Reply</a>
                    <div class="reply-form" id="reply-form-${comment.id}" style="display: none; margin-top: 15px;">
                        <textarea class="reply-textarea" rows="3" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;"></textarea>
                        <button class="submit-reply" data-comment-id="${comment.id}" style="margin-top: 10px; background: #2b0060; color: #fff; border: none; padding: 8px 20px; border-radius: 4px; cursor: pointer;">Submit Reply</button>
                    </div>
                </div>
            </div>
        </div>
    `;
            return html;
        }


        // rating stars

        (function() {
            const stars = document.querySelectorAll('.rating-star');
            let selected = Number(localStorage.getItem('myRating')) || 0;

            function setStars(rating) {
                stars.forEach(star => {
                    if (Number(star.dataset.star) <= rating) {
                        star.style.color = '#43B02A';
                    } else {
                        star.style.color = '#bbb';
                    }
                });
            }

            // On hover
            stars.forEach(star => {
                star.addEventListener('mouseenter', function() {
                    setStars(Number(this.dataset.star));
                });
                star.addEventListener('mouseleave', function() {
                    setStars(selected);
                });
                star.addEventListener('click', function() {
                    selected = Number(this.dataset.star);
                    localStorage.setItem('myRating', selected);
                    setStars(selected);
                });
            });

            setStars(selected);
        })();


        // init CKEditor();
        CKEDITOR.replace('ckeditor-comment', {
            height: 170,
            removePlugins: 'elementspath',
            resize_enabled: false,
        });


        // Load more comments   
        let shown = 7;
        const increment = 7;

        document.getElementById('load-more-btn')?.addEventListener('click', function() {
            const allComments = document.querySelectorAll('.comment-wrapper');
            let shownThisRound = 0;

            for (let i = shown; i < allComments.length && shownThisRound < increment; i++) {
                allComments[i].style.display = 'block';
                shownThisRound++;
            }

            shown += shownThisRound;

            if (shown >= allComments.length) {
                document.getElementById('load-more-wrapper').style.display = 'none';
            }
        });


        $(document).ready(function() {
            $(document).on('click', '.reply-btn', function(e) {
                e.preventDefault();
                const commentId = $(this).data('comment-id');
                $(`#reply-form-${commentId}`).toggle();
            });

            // Submit reply handler
            $(document).on('click', '.submit-reply', function() {
                const commentId = $(this).data('comment-id');
                const replyText = $(this).siblings('.reply-textarea').val();
                const url = "{{ route('comments.store', ['lessonId' => $lesson->id]) }}";

                $.ajax({
                    url: url,
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        comment: replyText,
                        parent_id: commentId
                    },
                    success: function(response) {
                        if (response.success) {
                            const replyHtml = renderComment(response.comment, 50);
                            $(`#reply-form-${commentId}`).after(replyHtml);
                            $(`#reply-form-${commentId}`).hide();
                            $(`#reply-form-${commentId} .reply-textarea`).val('');
                        }
                    },
                    error: function(xhr) {
                        alert('Error posting reply');
                    }
                });
            });
        });
    </script>
</body>

</html>
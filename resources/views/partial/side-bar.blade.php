{{-- Sidebar chính --}}
<div class="sidebar-wrapper d-flex flex-column h-100 justify-content-start">

    {{-- DANH SÁCH KỸ NĂNG (ẩn nếu có $lessonSlug) --}}
    @if (!isset($lessonSlug))
        <div class="sidebar-box shadow-sm" style="margin-top: -10px;">
            <ul class="list-skills-text">
                @foreach ($allSkills as $sidebarSkill)
                    <li>
                        <span class="{{ isset($skill) && $skill->slug === $sidebarSkill->slug ? 'text-success' : '' }}">
                            ✔ <a href="{{ route('skill.index', ['slug' => $sidebarSkill->slug]) }}" class="skill-link">
                                {{ $sidebarSkill->title }}
                            </a>
                        </span>

                        @if (isset($skill) && isset($courses) && $skill->slug === $sidebarSkill->slug)
                            <ul class="list-skills-text-md">
                                @foreach ($courses as $course)
                                    @php
                                        $isActiveCourse = request()->route('courseSlug') === $course->slug;
                                    @endphp
                                    <li>
                                        - <a href="{{ route('course.show', [
                                            'skillSlug' => $sidebarSkill->slug,
                                            'courseSlug' => $course->slug,
                                        ]) }}"
                                            class="course-link {{ $isActiveCourse ? 'text-success' : '' }}">
                                            {{ $course->title }}
                                        </a>
                                    </li>
                                @endforeach

                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- CÁC DIV CÒN LẠI (gói chung trong wrapper) --}}
    <div style="margin-top: {{ isset($lessonSlug) ? '-28px' : '0' }};">
        {{-- Hình khóa học --}}
        <div class="sidebar-box-1 shadow-sm">
            <img style="cursor: pointer" src="{{ asset('images/listening-page/online-english-course-image.avif') }}"
                class="img-fluid rounded mb-2">
            <p class="online-english-course-title">Online English courses</p>
        </div>

        {{-- Các trang web khác --}}
        <div class="sidebar-box shadow-sm mt-3">
            <ul class="list-skills-text">
                <li><span class="right-row-header">Our websites</span></li>
                <li>✔ LearnEnglish Kids for children aged 5 to 12</li>
                <li>✔ LearnEnglish Teens for children aged 13 to 17</li>
                <li>✔ TeachingEnglish for teachers and teacher educators</li>
            </ul>
        </div>

        {{-- Trợ giúp --}}
        <div class="sidebar-box-1 shadow-sm mt-3" style="padding: 24px 12px">
            <ul class="list-skills-text">
                <li><span class="right-row-header">Help</span></li>
                <li>✔ Free online English test</li>
                <li>✔ Sign up for our newsletter</li>
                <li>✔ Frequently asked questions</li>
                <li>✔ Getting started</li>
                <li>✔ House rules</li>
            </ul>
        </div>
    </div>
</div>

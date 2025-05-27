<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Skill;

class CourseController extends Controller
{
    //hiển thị khóa học a1, a2,.. theo slug
    public function showCourse($skillSlug, $courseSlug)
    {
        $skill = Skill::where('slug', $skillSlug)
            ->select('id', 'title', 'slug') 
            ->firstOrFail();

        $course = Course::where('slug', $courseSlug)
            ->where('skill_id', $skill->id)
            ->select('id', 'title', 'slug', 'imageUrl', 'description', 'introduce')
            ->firstOrFail();

        $lessons = Lesson::where('course_id', $course->id)
            ->get();

        // Add $allSkills for the sidebar
        $allSkills = Skill::select('id', 'title', 'slug')->get();

        // Add $courses for the active skill to display in the sidebar
        $courses = Course::where('skill_id', $skill->id)
            ->select('id', 'title', 'slug')
            ->get();

        return view('layout.course', [
            'skillSlug' => $skillSlug,
            'courseSlug' => $courseSlug,
            'skill' => $skill,
            'course' => $course,
            'lessons' => $lessons,
            'allSkills' => $allSkills,
            'courses' => $courses
        ]);
    }
}

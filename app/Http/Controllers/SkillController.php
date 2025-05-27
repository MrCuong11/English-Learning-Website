<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Skill;

class SkillController extends Controller
{
    // Trong CourseController.php
    public function index($slug)
    {
        $skill = Skill::where('slug', $slug)->firstOrFail(); // Lấy skill theo slug
        $courses = Course::where('skill_id', $skill->id)->get(); // Lấy courses theo skill_id
        $allSkills = Skill::all(); // Get all skills for the sidebar
        if($slug == "grammar") {
            return view('layout.grammar', [
                'skill' => $skill,
                'courses' => $courses,
                'allSkills' => $allSkills 
            ]);
        }
        return view('layout.skill', [
            'skill' => $skill,
            'courses' => $courses,
            'allSkills' => $allSkills 
        ]);
    }


    public function grammar($slug)
    {
        $skill = Skill::where('slug', $slug)->firstOrFail(); // Lấy skill theo slug
        $courses = Course::where('skill_id', $skill->id)->get(); // Lấy courses theo skill_id
        $allSkills = Skill::all(); // Get all skills for the sidebar
        return view('layout.grammar', [
            'skill' => $skill,
            'courses' => $courses,
            'allSkills' => $allSkills 
        ]);
    }

    
    public function skillOuterPage() {
        return view('layout.skill-outer');
    }

    
}

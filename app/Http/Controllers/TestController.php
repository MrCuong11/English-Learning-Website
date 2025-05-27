<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $questions = Question::with(['options' => function ($query) {
            $query->orderBy('option_order');
        }])->where('task_id', 3)->get();

        // Lưu vào session để chấm điểm sau này
        session(['questions' => $questions]);

        return view('test.question', [
            'questions' => $questions,
            'currentIndex' => 0,
            'totalQuestions' => $questions->count()
        ]);
    }

    public function showQuestion(Request $request)
    {
        $index = $request->query('index', 0);

        $questions = Question::with(['options' => function ($query) {
            $query->orderBy('option_order');
        }])->where('task_id', 3)->get();

        if ($index < 0) $index = 0;
        if ($index >= $questions->count()) $index = $questions->count() - 1;

        $currentQuestion = $questions[$index];

        session(['questions' => $questions]);

        return view('test.question', [
            'questions' => $questions,
            'currentQuestion' => $currentQuestion,
            'currentIndex' => $index,
            'totalQuestions' => $questions->count()
        ]);
    }

    public function submitTest(Request $request)
    {
        $answers = $request->input('answers'); // { question_id: selected_option_id }
    
        $questions = Question::with('options')->where('task_id', 3)->get();
        $detailedResults = [];
        $score = 0;
    
        foreach ($questions as $q) {
            $correctOption = $q->options->firstWhere('is_correct', 1);
            $userAnswer = $answers[$q->id] ?? null;
    
            $isCorrect = $userAnswer == $correctOption->id;
            if ($isCorrect) $score++;
    
            $detailedResults[] = [
                'id' => $q->id,
                'question' => $q->question,
                'options' => $q->options->map(function ($opt) {
                    return [
                        'id' => $opt->id,
                        'text' => $opt->text,
                        'is_correct' => $opt->is_correct
                    ];
                }),
                'user_answer' => $userAnswer,
                'correct_answer' => $correctOption->id,
                'is_correct' => $isCorrect
            ];
        }
    
        return response()->json([
            'success' => true,
            'score' => $score,
            'total' => count($questions),
            'results' => $detailedResults
        ]);
    }
    

    public function result()
    {
        $total = session('total_questions', 0);
        $correct = session('correct_answers', 0);
        $percentage = $total > 0 ? round(($correct / $total) * 100, 2) : 0;

        return view('test.question', compact('total', 'correct', 'percentage'));
    }
}
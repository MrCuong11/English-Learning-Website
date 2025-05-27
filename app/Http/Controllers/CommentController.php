<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, $lessonId)
    {
        $request->validate([
            'comment' => 'required|string|max:2000',
            'parent_id' => 'nullable|exists:comments,id'
        ]);

        $comment = Comments::create([
            'lesson_id' => $lessonId,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
            'parent_id' => $request->parent_id
        ]);

        $comment->load('user');

        return response()->json([
            'success' => true,
            'comment' => $comment
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Vocabulary;
use Illuminate\Http\Request;

class VocabularyController extends Controller
{
    public function index()
    {
        $vocabularies = Vocabulary::with('senses.example')->get(); // Nạp sense cho mỗi từ vựng
        return view('layout.vocabulary', compact('vocabularies'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
{
    // Validate the form data
    $request->validate([
        'questions.*' => 'required',
        'options.*' => 'required|array|size:3',
        'answers.*' => 'required|in:0,1,2',
    ]);

    // Loop through the submitted data to store in the database
    foreach ($request->questions as $key => $question) {
        // Store each question along with options and answers in the database
        $newQuestion = new Question();
        $newQuestion->text = $question;
        $newQuestion->options = $request->options[$key];
        $newQuestion->answer = $request->answers[$key];
        $newQuestion->save();
    }

    return redirect('/create-question')->with('success', 'Questions saved successfully');
}
}

<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $questions = $request->input('question');
        $options = $request->input('option');
        $answers = $request->input('answer');

    for ($i = 1; $i < count($questions); $i++) {
        $question = new Question();
        $question->question = $questions[$i];
        $question->option1 = $options[$i][0];
        $question->option2 = $options[$i][1];
        $question->option3 = $options[$i][2];
        $question->answer = $answers[$i];
        $question->save();
    }

        return redirect(route('questions.list'))->with('success', 'Questions inserted successfully');
    }





    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        //
    }
}

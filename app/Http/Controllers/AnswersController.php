<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Http\Controllers\Controller;
use App\Http\Requests\AnswerAddRequest;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswersController extends Controller
{
    public function postAnswer(Request $request)
    {
        $questions = Question::find($request->id);
        return view('Answers.add_answer', compact('questions'));
    }

    public function store(AnswerAddRequest $request)
    {
        if ($request->file('image') == null) {
            $path = "";
        }else{
            $path = $request->file('image')->store('images'); 
        }
        $data = array_merge($request->except('image'), ['image' => $path], ['answer_id' => $request->id]);
        Answer::create($data);
        return redirect('questions');
    }

    public function show(Request $request)
    {
        $answers =Answer::where('answer_id','=',$request->id)->get();
        $questions = Question::find($request->id);
        return view('Answers.view_answers', compact('questions','answers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Answer $answer)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Answer $answer)
    {
        //
    }
}

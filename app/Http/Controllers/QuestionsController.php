<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionAddRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions =Question::join('categories', 'questions.category', '=', 'categories.id')->select('questions.*', 'name')->get();
        // dd($questions);
        // $categories=Category::pluck('name','id');
        return view('Questions.question_list', compact('questions' , ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('Questions.add_question', ['categories' =>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionAddRequest $request)
    {
        $path=$request->file('image')->store('images');
        $data = array_merge($request->except('image'), ['image' => $path]);
        Question::create($data);
        return redirect('questions');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        $category=Category::find($question->category)->name;
        return view('Questions.view_question',compact('question','category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $categories=Category::all();
        $category=Category::find($question->category)->name;
        return view('Questions.edit_question',compact('question','category','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionAddRequest $request, Question $question)
    {
        $question->question=$request->question;
        $question->category=$request->category;
        $path=$request->file('image')->store('images');
        $question->image=$path;
        $question->save();
        return redirect('questions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('questions');
    }
}

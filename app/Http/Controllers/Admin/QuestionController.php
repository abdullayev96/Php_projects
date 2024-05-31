<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\QuestionRequest;
use App\Models\Question;
use App\Models\Category;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $question = Question::all();
        return view('admin.question.index',['questions'=>$question]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.question.create',['categorys'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(QuestionRequest $request)
    {
        $questionData = $request->all();
        
        Question::create($questionData);

        return redirect()->route('admin.question.index')->with('created','Question created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question)
    {
        return view('admin.question.show',compact('question'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Question $question)
    {
        $categorys = Category::all();
        return view('admin.question.edit',compact('question','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(QuestionRequest $request, Question $question)
    {

        $questionData = $request->all();

        $question->update($questionData);

        return redirect()->route('admin.question.index')->with('updated','Question updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question)
    {
        $question->delete();

        return redirect()->back()->with('deleted','Question delete successfully');
    }
}

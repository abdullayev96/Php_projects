<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StepRequest;
use App\Models\Step;
use App\Models\Category;

class StepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $step = Step::all();
        return view('admin.step.index',['steps'=>$step]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.step.create',['categorys'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StepRequest $request)
    {

        $stepData = $request->all();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = rand().'.'.$file->getClientOriginalName();
            $file->move('set/img/',$file_name);
            $requestData['image'] = $file_name;
        }

        Step::create($stepData);

        return redirect()->route('admin.step.index')->with('created','Step created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Step $step)
    {
        return view('admin.step.show',compact('step'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Step $step)
    {
        $categorys = Category::all();
        return view('admin.step.edit',compact('step','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StepRequest $request, Step $step)
    {
        $stepData = $request->all();

        
        if($request->hasFile("image")){
            $file = $request->file("image");
            $imageName = rand().'.'.$file->getClientOriginalName();
            $file->move('set/img/',$imageName);
            $requestData['image'] = $imageName;
        }

        $step->update($stepData);

        return redirect()->route('admin.step.index')->with('updated','Step updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Step $step)
    {
        $step->delete();

        return back()->with('deleted','Step deleted successfully!');
    }
}

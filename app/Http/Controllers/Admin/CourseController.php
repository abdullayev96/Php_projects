<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::all();
        return view('admin.course.index',['courses'=>$course]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.course.create',['categorys'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CourseRequest $request)
    {

        $courseData = $request->all();

        if($request->hasFile('course_image')){
            $file = $request->file('course_image');
            $file_name = rand().'.'.$file->getClientOriginalExtension();
            $file->move('set/img/',$file_name);
            $requestData['course_image'] = $file_name;
        }

        Course::create($courseData);

        return redirect()->route('admin.course.index')->with('created','Course created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('admin.course.show',compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        $categorys = Category::all();
        return view('admin.course.edit',compact('course','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CourseRequest $request, Course $course)
    {

        $courseData = $request->all();

        if($request->hasFile("course_image")){
            $file = $request->file("course_image");
            $imageName = time().'.'.$file->getClientOriginalName();
            $file->move('set/img/',$imageName);
            $requestData['course_image'] = $imageName;
        }

        $course->update($courseData);

        return redirect()->route('admin.course.index')->with('updated','Course updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return back()->with('deleted','Course deleted successfully!');
    }
}

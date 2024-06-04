<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CourseRequest;
use App\Models\Course;
use App\Models\Category;
use App\Exports\CoursesExport;

use Maatwebsite\Excel\Facades\Excel;

class CourseController extends Controller
{

    public function index()
    {
        $course = Course::all();
        return view('admin.course.index',['courses'=>$course]);
    }


    public function create()
    {
        $category = Category::all();
        return view('admin.course.create',['categorys'=>$category]);
    }


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


    public function show(Course $course)
    {
        return view('admin.course.show',compact('course'));
    }


    public function edit(Course $course)
    {
        $categorys = Category::all();
        return view('admin.course.edit',compact('course','categorys'));
    }


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


    public function destroy(Course $course)
    {
        $course->delete();

        return back()->with('deleted','Course deleted successfully!');
    }

    public function export()
    {
        return Excel::download(new CoursesExport, 'courses.xlsx');
    }
}

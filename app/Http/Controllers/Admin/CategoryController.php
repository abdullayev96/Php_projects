<?php

namespace App\Http\Controllers\Admin;

use App\Exports\CategoryExport;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryRequest;
use App\Models\Category;
use Str;
use Maatwebsite\Excel\Facades\Excel;



class CategoryController extends Controller
{

    public function index()
    {
        return view('admin.category.index',['categorys'=>Category::all()]);
    }


    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {

        $requestData = $request->all();

        if($request->hasFile('image')){
            $file = $request->file('image');
            $file_name = rand().'.'.$file->getClientOriginalName();
            $file->move('set/img/',$file_name);
            $requestData['image'] = $file_name;
        }

        $requestData['slug'] = Str::slug($requestData['name']);

        Category::create($requestData);

        return redirect()->route('admin.category.index')->with('created','Category created successfully');


    }

    public function show(Category $category)
    {

        return view("admin.category.show",compact('category'));
    }


    public function edit(Category $category)
    {
        return view("admin.category.edit",compact('category'));
    }


    public function update(CategoryRequest $request, Category $category)
    {
        $requestData = $request->all();
        $requestData['slug'] = Str::slug($request->name);

        if($request->hasFile("image")){
            $file = $request->file("image");
            $imageName = rand().'.'.$file->getClientOriginalName();
            $file->move('set/img/',$imageName);
            $requestData['image'] = $imageName;
        }

        $category->update($requestData);

        return redirect()->route('admin.category.index')->with('updated','Update successfully');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->back()->with('deleted','Category delete successfully');
    }

    public function export()
    {
        return Excel::download(new CategoryExport, 'category.xlsx');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ModulRequest;
use App\Models\Modul;
use App\Models\Category;

class ModulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modul = Modul::all();
        return view('admin.modul.index',['moduls'=>$modul]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.modul.create',['categorys'=>$category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ModulRequest $request)
    {

        $modulData = $request->all();

        Modul::create($modulData);

        return redirect()->route('admin.modul.index')->with('created','Modul created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Modul $modul)
    {
        return view('admin.modul.show',compact('modul'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Modul $modul)
    {
        $categorys = Category::all();
        return view('admin.modul.edit',compact('modul','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ModulRequest $request, Modul $modul)
    {

        $modulData = $request->all();
       
        $modul->update($modulData);

        return redirect()->route('admin.modul.index')->with('updated','Modul updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Modul $modul)
    {
        $modul->delete();

        return redirect()->back()->with('deleted','Modul delete successfully');
    }
}

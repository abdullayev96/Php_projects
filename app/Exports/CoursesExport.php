<?php

namespace App\Exports;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;




//class CoursesExport implements FromCollection
//{
//
//    public function collection()
//    {
//        return Course::all();
//    }
//}
//





class CoursesExport implements FromView
{
//    public function collection()
//    {
////        return Category::all(['id', 'name','slug']);
//        return view('exports.invoices', [
//            'category' => Category::all()
//        ]);
//    }

    public function view(): View
    {
        return view('exports.course', [
            'course' => Course::all()
        ]);
    }
}

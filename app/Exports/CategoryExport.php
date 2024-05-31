<?php

namespace App\Exports;

use App\Models\Category;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CategoryExport implements FromView
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
        return view('exports.invoices', [
            'category' => Category::all()
        ]);
    }
}

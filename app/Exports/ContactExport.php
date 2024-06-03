<?php

namespace App\Exports;

use App\Models\Category;
use App\Models\Contact;
use Maatwebsite\Excel\Concerns\FromCollection;

//class ContactExport implements FromCollection
//{
//
//    public function collection()
//    {
//        return Contact::all();
//    }
//}


use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ContactExport implements FromView
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
        return view('exports.contact', [
            'contact' => Contact::all()
        ]);
    }
}

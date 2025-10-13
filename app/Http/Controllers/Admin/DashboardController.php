<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Record;
use Illuminate\Support\Facades\DB;
use App\Models\AboutUs;
use App\Models\ContactUs;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $categories = Category::with('records')->get();
        $categoriesCount = Category::count();
        $recordsCount    = Record::count();
        $contactsCount   = ContactUs::count();
        $galleryCount   = Gallery::count();
        $aboutUsCount    = AboutUs::latest()->first();

        return view('admin.index',compact('categories','categoriesCount','recordsCount','contactsCount','aboutUsCount','galleryCount'));
    }
}

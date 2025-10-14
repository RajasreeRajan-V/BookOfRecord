<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use App\Models\Record;
use App\Models\Gallery;
use App\Models\Category;
class UserController extends Controller
{
   public function index()
   {
       $records = Record::latest()->take(4)->get();
       $galleries = Gallery::latest()->take(6)->get();
       $categories = Category::first()->take(6)->get();
       $about = AboutUs::latest()->first();
       $categorious = Category::all();
       return view('users.index', compact('records','galleries','categories','about','categorious'));
   }
   public function about()
   {
       $about = AboutUs::latest()->first();
       $records = Record::latest()->take(4)->get();
       $categorious = Category::all();
       return view('users.about_us',compact('about','records','categorious'));
   }
     public function category()
    {
       $categories = Category::all();
       return view('users.record_category',compact('categories'));
    } 
    public function gallery()
    {
      $galleries = Gallery::all();
      $categorious = Category::all();
       return view('users.gallery', compact('galleries','categorious'));
    }
   //   public function records()
   //  {
     
   //     return view('users.record_category', );
   //  }
   //   public function single()
   //  {
   //     return view('users.single_records');
   //  }
   public function showRecord(string $id)
    {
       $category = Category::findOrFail($id);
       $records = Record::where('category_id', $id)->get();
        return view('users.categoryRecord', compact('category', 'records'));
    }
   public function showSingleRecord(string $id)
   {
     $record = Record::with('category')->findOrFail($id);
    return view('users.single_records', compact('record',));
   }
    
}

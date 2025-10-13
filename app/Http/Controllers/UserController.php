<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index()
   {
       return view('users.index');
   }
   public function about()
   {
       return view('users.about_us');
   }
    public function contact()
    {
       return view('users.contact_us');
    }
     public function category()
    {
       return view('users.record_category');
    } 
    public function gallery()
    {
       return view('users.gallery');
    }
     public function records()
    {
       return view('users.record_category');
    }
     public function single()
    {
       return view('users.single_records');
    }
    
}

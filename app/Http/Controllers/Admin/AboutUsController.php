<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAboutUsRequest;
use App\Http\Requests\UpdateAboutUsRequest;
class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $about = AboutUs::latest()->first();
        return view("admin.about_us", compact("about"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        AboutUs::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAboutUsRequest $request)
    {   
        $data = $request->validated();
        if ($request->hasFile('img1')) {
        $data['img1'] = $request->file('img1')->store('about_us', 'public');
        }

        if ($request->hasFile('img2')) {
            $data['img2'] = $request->file('img2')->store('about_us', 'public');
        }
        AboutUs::create($data);

        return redirect()->back()->with('success', 'About Us section saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateAboutUsRequest $request, string $id)
    {
        $aboutUs = AboutUs::findOrFail($id);
        $aboutUs->title = $request->title;
        $aboutUs->desc  = $request->desc;
        $aboutUs->tag1  = $request->tag1;
        $aboutUs->tag2  = $request->tag2;
        $aboutUs->tag3  = $request->tag3;
        $aboutUs->tag4  = $request->tag4;

        if ($request->hasFile('img1')) {
            if ($aboutUs->img1 && file_exists(storage_path('app/public/'.$aboutUs->img1))) {
                unlink(storage_path('app/public/'.$aboutUs->img1));
            }
            $aboutUs->img1 = $request->file('img1')->store('about_us', 'public');
        }

        if ($request->hasFile('img2')) {
            if ($aboutUs->img2 && file_exists(storage_path('app/public/'.$aboutUs->img2))) {
                unlink(storage_path('app/public/'.$aboutUs->img2));
            }
            $aboutUs->img2 = $request->file('img2')->store('about_us', 'public');
        }

        $aboutUs->save();

        return redirect()->route('admin.aboutUs.index')->with('success', 'About Us updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

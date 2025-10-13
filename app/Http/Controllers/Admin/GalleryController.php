<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; 
class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view("admin.gallery", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Gallery::create();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('img')) {
        $data['img'] = $request->file('img')->store('gallery', 'public');
        }
        Gallery::create($data);
        return redirect()->back()->with('success', 'Gallery section saved successfully!');
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
        $gallery = Gallery::findOrFail($id);
        return response()->json($gallery); 
    }

    /**
     * Update the specified resource in storage.
     */
   public function update(UpdateGalleryRequest $request, string $id)
    {
        $gallery = Gallery::findOrFail($id);
        $validated = $request->validated();
        $gallery->title = $validated['title'];
        $gallery->desc  = $validated['desc'];
        if ($request->hasFile('img')) {
            if ($gallery->img && Storage::disk('public')->exists($gallery->img)) {
                Storage::disk('public')->delete($gallery->img);
            }

            $path = $request->file('img')->store('gallery', 'public');
            $gallery->img = $path;
        }
        $gallery->save();
        return redirect()->back()->with('success', 'Gallery updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

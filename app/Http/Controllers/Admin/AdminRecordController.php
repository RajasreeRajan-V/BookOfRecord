<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRecordRequest;
use App\Http\Requests\UpdateRecordRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Record;
use Illuminate\Support\Facades\Storage;
class AdminRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $records = Record::all();
       return view("admin.records",compact('categories','records'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(StoreRecordRequest $request)
    {
    $data = $request->validated();
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('records', 'public');
    }
    Record::create($data);
    return redirect()->back()->with('success', 'Record saved successfully!');
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
    public function update(UpdateRecordRequest $request, string $id)
    {
        $record = Record::findOrFail($id);
        $validated = $request->validated();
        if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->file('image')->extension();
        $request->file('image')->storeAs('public/records', $imageName);
        $validated['image'] = $imageName;
    } else {
        // Keep the old image if no new image is uploaded
        $validated['image'] = $record->image;
    }
      $record->update($validated);
     return redirect()->back()->with('success', 'Record updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(string $id)
    {
    $record = Record::findOrFail($id);
    if ($record->image && Storage::exists('public/' . $record->image)) {
        Storage::delete('public/' . $record->image);
    }
    $record->delete();
    return redirect()->back()->with('success', 'Record deleted successfully!');
    }

}

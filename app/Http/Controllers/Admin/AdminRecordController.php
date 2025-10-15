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
    public function update(Request $request, string $id)
    {
         $validated = $request->validate([
                'name' => 'sometimes|required|string|max:255',
                'holder_name' => 'sometimes|required|string|max:255',
                'description' => 'nullable|string',
                'record_no' => 'nullable|string|unique:records,record_no,' . $id,
                'category_id' => 'sometimes|required|exists:categories,id',
                'details' => 'nullable|string',
                'years' => ['nullable', 'regex:/^\d{4}(-\d{4})?$/'],
                'providers' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

         $record = Record::findOrFail($id);
         if ($request->hasFile('image')) {
        if ($record->image && Storage::disk('public')->exists($record->image)) {
            Storage::disk('public')->delete($record->image);
        }

        $validated['image'] = $request->file('image')->store('records', 'public');
    } else {
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

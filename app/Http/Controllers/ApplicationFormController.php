<?php

namespace App\Http\Controllers;

use App\Models\ApplicationForm;
use App\Http\Requests\StoreApplicationFormRequest;
use App\Http\Requests\UpdateApplicationFormRequest;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("users.application");
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
      public function store(StoreApplicationFormRequest $request)
    {
        // dd('Validation passed!');

        $uploadedFiles = [];

        if ($request->hasFile('evidence_files')) {
            foreach ($request->file('evidence_files') as $file) {
                $path = $file->store('evidence', 'public');
                $uploadedFiles[] = $path;
            }
        }

        $record = ApplicationForm::create([
            'full_name' => $request->full_name,
            'mobile' => $request->mobile,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'email' => $request->email,
            'occupation' => $request->occupation,
            'address' => $request->address,
            'description' => $request->description,
            'evidence_files' => !empty($uploadedFiles) ? $uploadedFiles : null,
            'google_drive_link' => $request->google_drive_link,
            'terms' => $request->boolean('terms'),
        ]);

        return redirect()->back()->with('success', 'Your record attempt application has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplicationForm $applicationForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ApplicationForm $applicationForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationFormRequest $request, ApplicationForm $applicationForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ApplicationForm $applicationForm)
    {
        //
    }
}

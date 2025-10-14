<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function index(Request $request)
    {
        $categories = Category::with('records')->get();
        $query = ContactUs::query();

        if ($request->has('search') && $request->search != '') {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                ->orWhere('email', 'like', "%{$search}%")
                ->orWhere('message', 'like', "%{$search}%");
            });
        }
        $contacts = $query->latest()->paginate(10);
        return view('admin.contactUs', compact('contacts','categories'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
     public function show(string $id)
    {
        $contact = ContactUs::findOrFail($id);

        if ($contact->status === 'pending') {
            $contact->status = 'read';
            $contact->save();
        }

        return response()->json($contact);
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
     public function destroy(string $id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();

        return redirect()->route('admin.contactUs.index')
                        ->with('success', 'Contact deleted successfully.');
    }

    public function reply(Request $request)
    {
        $request->validate([
            'contact_id' => 'required|exists:contact_us,id',
            'message' => 'required|string|max:5000',
        ]);

        $contact = ContactUs::findOrFail($request->contact_id);
        $contact->reply = $request->message;
        $contact->save();

        // Send email (example)
        Mail::raw($request->message, function($mail) use ($contact) {
            $mail->to($contact->email)
                ->subject("Reply from Book of Records");
        });
        $contact->save();
        return redirect()->back()->with('success', 'Reply sent successfully.');
    }
}

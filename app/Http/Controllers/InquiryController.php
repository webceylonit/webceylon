<?php

namespace App\Http\Controllers;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
     public function index()
    {
        $inquiries = Inquiry::all();
        return view('AdminDashboard.Inquiry.index', compact('inquiries'));
    }


    //frontend
      public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:15',
            'subject' => 'nullable|string|max:255',
        ]);

        Inquiry::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'status' => 'new', 
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}

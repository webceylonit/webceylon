<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'email' => 'required|email|max:255',
            'contact_number' => 'nullable|string|max:20',
            'feedback' => 'required|string',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,svg',
        ]);

        $logoPath = null;

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('feedback_logos', 'public');
        }
 
        Feedback::create([
            'name' => $request->name,
            'designation' => $request->designation,
            'company' => $request->company,
            'email' => $request->email,
            'contact_number' => $request->contact_number,
            'feedback' => $request->feedback,
            'company_logo' => $logoPath,
            'status' => 'Pending',
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }



    public function index()
    {
        $feedbacks = Feedback::latest()->get();
        return view('AdminDashboard.Feedback.index', compact('feedbacks'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Pending,Approved,Canceled',
        ]);

        $feedback = FeedBack::findOrFail($id);
        $feedback->status = $request->status;
        $feedback->save();

        return redirect()->back()->with('success', 'Feedback status updated successfully.');
    }
}

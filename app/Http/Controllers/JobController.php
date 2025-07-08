<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career;
class JobController extends Controller
{
    public function index()
    {
        $careers = Career::all();
        return view('AdminDashboard.Career.index', compact('careers'));
    }


     public function create()
    {
        return view('AdminDashboard.Career.create');
    }


       public function store(Request $request)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'deadline_date' => 'required|date',
        ]);

        Career::create([
            'job_title' => $request->job_title,
            'location' => $request->location,
            'description' => $request->description,
            'deadline_date' => $request->deadline_date,
        ]);

        return redirect()->route('careers.index')->with('success', 'Job opening created successfully.');
    }

    public function edit(Career $career)
    {
        return view('AdminDashboard.Career.edit', compact('career'));
    }

    public function update(Request $request, Career $career)
    {
        $request->validate([
            'job_title' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'description' => 'required|string',
            'deadline_date' => 'required|date',
        ]);

        $career->update([
            'job_title' => $request->job_title,
            'location' => $request->location,
            'description' => $request->description,
            'deadline_date' => $request->deadline_date,
        ]);

        return redirect()->route('careers.index')->with('success', 'Job opening updated successfully.');
    }

    public function destroy(Career $career)
    {
        $career->delete();

        return redirect()->route('careers.index')->with('success', 'Job opening deleted successfully.');
    }


    //frontend
      public function jobs()
    {
        $careers = Career::all();
        return view('frontend.careers', compact('careers'));
    }
}

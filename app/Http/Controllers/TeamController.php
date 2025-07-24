<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();
        return view('AdminDashboard.Team.index', compact('team'));
    }


    public function create()
    {
        return view('AdminDashboard.Team.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'fb_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'portfolio_link' => 'nullable|url',
        ]);

        // Upload image
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team', 'public');
        }

        // Create team member
        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imagePath ?? null,
            'fb_link' => $request->fb_link,
            'linkedin_link' => $request->linkedin_link,
            'portfolio_link' => $request->portfolio_link,
        ]);

        return redirect()->route('team.index')->with('success', 'Team member added successfully.');
    }


    public function edit(Team $team)
    {
        return view('AdminDashboard.Team.edit', compact('team'));
    }


    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'fb_link' => 'nullable|url',
            'linkedin_link' => 'nullable|url',
            'portfolio_link' => 'nullable|url',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($team->image && Storage::disk('public')->exists($team->image)) {
                Storage::disk('public')->delete($team->image);
            }

            $imagePath = $request->file('image')->store('team', 'public');
            $team->image = $imagePath;
        }

        // Update other fields
        $team->name = $request->name;
        $team->position = $request->position;
        $team->fb_link = $request->fb_link;
        $team->linkedin_link = $request->linkedin_link;
        $team->portfolio_link = $request->portfolio_link;

        $team->save();

        return redirect()->route('team.index')->with('success', 'Team member updated successfully.');
    }


    public function destroy(Team $team)
    {
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team memeber deleted successfully.');
    }
}

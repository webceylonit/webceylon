<?php

namespace App\Http\Controllers;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('AdminDashboard.Project.index', compact('projects'));
    }


    public function create()
    {
        return view('AdminDashboard.Project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'main_image' => 'nullable|image',
            'subimage1' => 'nullable|image',
            'subimage2' => 'nullable|image',
            'started_date' => 'nullable|date',
            'completed_date' => 'nullable|date',
            'client' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:100',
            'technologies_used' => 'nullable|string',
        ]);

        // Handle images
        $mainImagePath = $request->file('main_image')?->store('projects', 'public');
        $subImage1Path = $request->file('subimage1')?->store('projects', 'public');
        $subImage2Path = $request->file('subimage2')?->store('projects', 'public');

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'main_image' => $mainImagePath,
            'subimage1' => $subImage1Path,
            'subimage2' => $subImage2Path,
            'started_date' => $request->started_date,
            'completed_date' => $request->completed_date,
            'client' => $request->client,
            'location' => $request->location,
            'type' => $request->type,
            'technologies_used' => $request->technologies_used
                ? array_map('trim', explode(',', $request->technologies_used))
                : [],
        ]);

        return redirect()->route('projects.index')->with('success', 'Project created successfully.');
    }



    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('AdminDashboard.Project.edit', compact('project'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'main_image' => 'nullable|image',
            'subimage1' => 'nullable|image',
            'subimage2' => 'nullable|image',
            'started_date' => 'nullable|date',
            'completed_date' => 'nullable|date',
            'client' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'type' => 'nullable|string|max:100',
            'technologies_used' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);

        // Handle image updates if uploaded
        if ($request->hasFile('main_image')) {
            $project->main_image = $request->file('main_image')->store('projects', 'public');
        }

        if ($request->hasFile('subimage1')) {
            $project->subimage1 = $request->file('subimage1')->store('projects', 'public');
        }

        if ($request->hasFile('subimage2')) {
            $project->subimage2 = $request->file('subimage2')->store('projects', 'public');
        }

        $project->update([
            'title' => $request->title,
            'description' => $request->description,
            'started_date' => $request->started_date,
            'completed_date' => $request->completed_date,
            'client' => $request->client,
            'location' => $request->location,
            'type' => $request->type,
            'technologies_used' => $request->technologies_used ? array_map('trim', explode(',', $request->technologies_used)) : [],
        ]);

        return redirect()->route('projects.index')->with('success', 'Project updated successfully.');
    }


    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Project deleted successfully.');
    }



    //frontend

      public function projectDetails($id)
    {
        $project = Project::findOrFail($id);
        return view('frontend.project-details', compact('project'));
    }

    public function portfolio()
    {
        $projects = Project::all();
        return view('frontend.portfolio', compact('projects'));
    }


}

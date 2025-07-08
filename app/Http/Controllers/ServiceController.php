<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('AdminDashboard.Service.index', compact('services'));
    }


    public function create()
    {
        return view('AdminDashboard.Service.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        // Convert comma-separated technologies to array
        if (!empty($validated['technologies'])) {
            $validated['technologies'] = array_map('trim', explode(',', $validated['technologies']));
        }

        Service::create($validated);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }


    public function edit(Service $service)
    {
        return view('AdminDashboard.Service.edit', compact('service'));
    }


    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'additional_info' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('services', 'public');
        }

        if (!empty($validated['technologies'])) {
            $validated['technologies'] = array_map('trim', explode(',', $validated['technologies']));
        }

        $service->update($validated);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }


    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }



    //frontend
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('frontend.service-details', compact('service'));
    }

     public function services()
    {
        $services = Service::latest()->get();
        return view('frontend.services', compact('services'));
    }

}

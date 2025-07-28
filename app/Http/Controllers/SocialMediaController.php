<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{

    public function index()
    {
        $socialMedia = SocialMedia::first();
        return view('AdminDashboard.SocialMedia.index', compact('socialMedia'));
    }

    public function storeOrUpdate(Request $request)
    {
        $validated = $request->validate([
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'youtube' => 'nullable|url',
            'tiktok' => 'nullable|url',
            'whatsapp' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'contact' => 'nullable|string|max:255',
        ]);

        $socialMedia = SocialMedia::first();

        if ($socialMedia) {
            $socialMedia->update($validated);
        } else {
            SocialMedia::create($validated);
        }

        return back()->with('success', 'Social media links saved successfully.');
    }
}

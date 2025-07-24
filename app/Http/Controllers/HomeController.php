<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\FeedBack;
use App\Models\Project;
use App\Models\Service;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $projects = Project::latest()->take(7)->get();
        $blogs = Blog::latest()->take(3)->get();
        $services = Service::latest()->take(4)->get();
        $feedbacks = FeedBack::where('status', 'Approved')->latest()->get();
        return view('frontend.index', compact('projects', 'blogs', 'services', 'feedbacks'));
    }

    public function aboutUs()
    {
        $team = Team::all();
        return view('frontend.about', compact('team'));
    }
}

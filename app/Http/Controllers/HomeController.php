<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $projects = Project::latest()->take(7)->get();
        $blogs = Blog::latest()->take(3)->get();
        $services = Service::latest()->take(4)->get(); 

        return view('frontend.index', compact('projects', 'blogs', 'services'));
    }



  
}

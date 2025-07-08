<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $projects = Project::latest()->take(6)->get();
        $blogs = Blog::latest()->take(3)->get(); 

        return view('frontend.index', compact('projects', 'blogs'));
    }


  
}

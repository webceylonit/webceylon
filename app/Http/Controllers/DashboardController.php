<?php

namespace App\Http\Controllers;
  use App\Models\Blog;
use App\Models\Career;
use App\Models\Service;
use App\Models\Project;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  

    public function index()
    {
        $totalBlogs = Blog::count();
        $totalCareers = Career::count(); 
        $totalServices = Service::count();
        $totalProjects = Project::count();

        return view('AdminDashboard.Home', compact('totalBlogs', 'totalCareers', 'totalServices', 'totalProjects'));
    }


}

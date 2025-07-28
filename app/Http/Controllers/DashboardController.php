<?php

namespace App\Http\Controllers;
  use App\Models\Blog;
use App\Models\Career;
use App\Models\Service;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Models\FeedBack;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  

    public function index()
    {
        $totalBlogs = Blog::count();
        $totalCareers = Career::count(); 
        $totalFeedbacks = FeedBack::count();
        $totalProjects = Project::count();

        return view('AdminDashboard.home', compact('totalBlogs', 'totalCareers', 'totalFeedbacks', 'totalProjects'));
    }


}

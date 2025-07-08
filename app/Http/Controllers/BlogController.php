<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function index()
    {
        $blogs = Blog::all();
        return view('AdminDashboard.Blog.index', compact('blogs'));
    }


     public function create()
    {
        return view('AdminDashboard.Blog.create');
    }


        public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'date' => 'required|date',
            'category' => 'required|string|max:100',
            'tags' => 'nullable|string', // comma-separated
            'description' => 'required|string',
            'main_image' => 'nullable|image',
            'subimage1' => 'nullable|image',
            'subimage2' => 'nullable|image',
        ]);

        // Image upload
        $mainImagePath = $request->file('main_image')?->store('blogs', 'public');
        $subImage1Path = $request->file('subimage1')?->store('blogs', 'public');
        $subImage2Path = $request->file('subimage2')?->store('blogs', 'public');

        \App\Models\Blog::create([
            'title' => $request->title,
            'author' => $request->author,
            'date' => $request->date,
            'category' => $request->category,
            'tags' => $request->tags
                ? array_map('trim', explode(',', $request->tags))
                : [],
            'description' => $request->description,
            'main_image' => $mainImagePath,
            'subimage1' => $subImage1Path,
            'subimage2' => $subImage2Path,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog created successfully.');
    }



    public function edit(Blog $blog)
    {
        return view('AdminDashboard.Blog.edit', compact('blog'));
    }

    
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'tags' => 'nullable|string',
            'date' => 'required|date',
            'description' => 'required|string',
            'main_image' => 'nullable|image',
            'subimage1' => 'nullable|image',
            'subimage2' => 'nullable|image',
        ]);

        // Handle uploads
        if ($request->hasFile('main_image')) {
            $blog->main_image = $request->file('main_image')->store('blogs', 'public');
        }
        if ($request->hasFile('subimage1')) {
            $blog->subimage1 = $request->file('subimage1')->store('blogs', 'public');
        }
        if ($request->hasFile('subimage2')) {
            $blog->subimage2 = $request->file('subimage2')->store('blogs', 'public');
        }

        $blog->update([
            'title' => $request->title,
            'author' => $request->author,
            'category' => $request->category,
            'tags' => $request->tags ? array_map('trim', explode(',', $request->tags)) : [],
            'date' => $request->date,
            'description' => $request->description,
            'main_image' => $blog->main_image,
            'subimage1' => $blog->subimage1,
            'subimage2' => $blog->subimage2,
        ]);

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully.');
    }

    
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return back()->with('success', 'Blog deleted successfully.');
    }




    //frontend

    public function blogs()
    {
        $blogs = Blog::latest()->paginate(5); 
        return view('frontend.blog', compact('blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        
        // Retrieve related blogs (by the same author or category)
        $relatedBlogs = Blog::where('id', '!=', $id) // Exclude the current blog
            ->where(function($query) use ($blog) {
                $query->where('author', $blog->author)
                    ->orWhere('category', $blog->category);
            })
            ->latest()
            ->take(5)
            ->get();
        
        return view('frontend.blog-details', compact('blog', 'relatedBlogs'));
    }

}

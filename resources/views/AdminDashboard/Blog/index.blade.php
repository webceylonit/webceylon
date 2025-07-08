@extends('AdminDashboard.master')

@section('title', 'Blog')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Blog List</h4>
      </div>
      
    </div>
  </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <div class="list-blog-header">
            <div>
              <div class="light-box">
                <a data-bs-toggle="collapse" href="#collapseblog" role="button" aria-expanded="false" aria-controls="collapseblog">
                </a>
              </div>
              <a class="btn btn-primary mb-2" href="{{ route('blogs.create') }}">
                <i class="fa fa-plus"></i> Add Blog
              </a>
            </div>
          </div>

          <div class="list-blog">
            <table class="table" id="blog-list">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Author</th>
                  <th>Image</th>
                  <th>Date</th>
                  <th>Category</th>
                  <th>Tags</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($blogs as $blog)
                  <tr>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->author }}</td>
                    <td><img src="{{ asset('storage/' . $blog->main_image) }}" width="100"></td>
                    <td>{{ $blog->date->toDateString() }}</td>
                    <td>{{ $blog->category }}</td>
                   <td>{{ is_array($blog->tags) ? implode(', ', $blog->tags) : $blog->tags }}</td>
                    <td>
                      <div class="blog-action">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-warning btn-sm me-2">
                          <i class="fa fa-edit"></i> 
                        </a>
                        <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?')">
                            <i class="fa fa-trash"></i> 
                          </button>
                        </form>
                      </div>
                    </td>

                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

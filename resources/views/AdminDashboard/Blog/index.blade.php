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
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Date</th>
                    <th>Category</th>
                    <th>Tags</th>
                    <th>Actions</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($blogs as $blog)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('public/storage/' . $blog->main_image) }}" width="100"></td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->author }}</td>
                    <td>{{ $blog->date->toDateString() }}</td>
                    <td>{{ $blog->category }}</td>
                    <td>{{ is_array($blog->tags) ? implode(', ', $blog->tags) : $blog->tags }}</td>
                    <td>
                    <ul class="action">
                      
                      <li class="edit">
                        <a href="{{ route('blogs.edit', $blog->id) }}">
                          <i class="icon-pencil-alt"></i>
                        </a>
                      </li>

                      <li class="delete">
                        <form id="delete-form-{{ $blog->id }}" action="{{ route('blogs.destroy', $blog->id) }}" method="POST" class="delete-form">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="delete-btn" onclick="confirmDelete('delete-form-{{ $blog->id }}');" style="border:none; background:none; cursor:pointer; padding:0;">
                            <i class="icon-trash" style="color:red;"></i>
                          </button>
                        </form>
                      </li>

                    </ul>
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
</div>

@endsection
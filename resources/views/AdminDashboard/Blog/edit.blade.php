@extends('AdminDashboard.master')

@section('title', 'Edit Blog')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Edit Blog</h4>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">

              <div class="col-md-6 mb-3">
                <label class="form-label">Blog Title *</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $blog->title) }}" required>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Author *</label>
                <input type="text" name="author" class="form-control" value="{{ old('author', $blog->author) }}" required>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Category *</label>
                <input type="text" name="category" class="form-control" value="{{ old('category', $blog->category) }}" required>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Tags (comma separated)</label>
                <input type="text" name="tags" class="form-control" value="{{ old('tags', is_array($blog->tags) ? implode(', ', $blog->tags) : $blog->tags) }}" >
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Published Date *</label>
                <input type="date" name="date" class="form-control" value="{{ old('date', $blog->date->toDateString()) }}" required>
              </div>

              <div class="col-md-12 mb-3">
                <label class="form-label">Description *</label>
                <textarea name="description" class="form-control" required>{{ old('description', $blog->description) }}</textarea>
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Main Image</label>
                <input type="file" name="main_image" class="form-control">
                @if ($blog->main_image)
                  <img src="{{ asset('public/storage/' . $blog->main_image) }}" class="img-thumbnail mt-2" width="150">
                @endif
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Sub Image 1</label>
                <input type="file" name="subimage1" class="form-control">
                @if ($blog->subimage1)
                  <img src="{{ asset('public/storage/' . $blog->subimage1) }}" class="img-thumbnail mt-2" width="150">
                @endif
              </div>

              <div class="col-md-6 mb-3">
                <label class="form-label">Sub Image 2</label>
                <input type="file" name="subimage2" class="form-control">
                @if ($blog->subimage2)
                  <img src="{{ asset('public/storage/' . $blog->subimage2) }}" class="img-thumbnail mt-2" width="150">
                @endif
              </div>

            </div>

            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Update Blog</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

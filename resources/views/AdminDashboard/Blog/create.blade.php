@extends('AdminDashboard.master')

@section('title', 'Create Blog')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Create Blog</h4>
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
          <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="row">

                <div class="col-md-6 mb-3">
                  <label class="form-label">Blog Title</label>
                  <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                  @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Author</label>
                  <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                  @error('author') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Date</label>
                  <input type="date" name="date" class="form-control" value="{{ old('date') }}">
                  @error('date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Category</label>
                  <input type="text" name="category" class="form-control" value="{{ old('category') }}">
                  @error('category') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Tags (comma separated)</label>
                  <input type="text" name="tags" class="form-control" placeholder="Tech, Laravel, SEO" value="{{ old('tags') }}">
                  @error('tags') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                  @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Main Image</label>
                  <input type="file" name="main_image" class="form-control">
                  @error('main_image') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Sub Image 1</label>
                  <input type="file" name="subimage1" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Sub Image 2</label>
                  <input type="file" name="subimage2" class="form-control">
                </div>

              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Create Blog</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

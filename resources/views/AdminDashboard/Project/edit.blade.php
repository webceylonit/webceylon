@extends('AdminDashboard.master')

@section('title', 'Edit Project')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Edit Project</h4>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{ route('projects.update', $project->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

              <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Project Title</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}">
                            @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Client</label>
                            <input type="text" name="client" class="form-control" value="{{ old('client', $project->client) }}">
                            @error('client') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control">{{ old('description', $project->description) }}</textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Project Type</label>
                            <select name="type" class="form-control">
                                <option value="Web Development" {{ $project->type == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                                <option value="ERP System Development" {{ $project->type == 'ERP System Development' ? 'selected' : '' }}>ERP System Development</option>
                                <option value="SEO (Search Engine Optimization)" {{ $project->type == 'SEO (Search Engine Optimization)' ? 'selected' : '' }}>SEO (Search Engine Optimization)</option>
                                <option value="Digital Marketing" {{ $project->type == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Technologies Used (comma separated)</label>
                            <input type="text" name="technologies_used" class="form-control" value="{{ old('technologies_used', implode(',', $project->technologies_used)) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Started Date</label>
                            <input type="date" name="started_date" class="form-control" value="{{ old('started_date', $project->started_date->toDateString()) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Completed Date</label>
                            <input type="date" name="completed_date" class="form-control" value="{{ old('completed_date', $project->completed_date->toDateString()) }}">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Location</label>
                            <input type="text" name="location" class="form-control" value="{{ old('location', $project->location) }}">
                        </div>

                        <!-- Display existing main image if available -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Main Image</label>
                            <input type="file" name="main_image" class="form-control">
                            @if($project->main_image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $project->main_image) }}" alt="Main Image" class="img-thumbnail" width="100">
                                </div>
                            @endif
                        </div>

                        <!-- Display existing subimage1 if available -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Sub Image 1</label>
                            <input type="file" name="subimage1" class="form-control">
                            @if($project->subimage1)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $project->subimage1) }}" alt="Sub Image 1" class="img-thumbnail" width="100">
                                </div>
                            @endif
                        </div>

                        <!-- Display existing subimage2 if available -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Sub Image 2</label>
                            <input type="file" name="subimage2" class="form-control">
                            @if($project->subimage2)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $project->subimage2) }}" alt="Sub Image 2" class="img-thumbnail" width="100">
                                </div>
                            @endif
                        </div>

                    </div>
                </div>

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Update Project</button>
                </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

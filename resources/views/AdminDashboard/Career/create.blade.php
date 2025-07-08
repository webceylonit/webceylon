@extends('AdminDashboard.master')

@section('title', 'Create Job Opening')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Create Job Opening</h4>
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
          <form method="POST" action="{{ route('careers.store') }}">
            @csrf
            <div class="card-body">
              <div class="row">

                <div class="col-md-6 mb-3">
                  <label class="form-label">Job Title</label>
                  <input type="text" name="job_title" class="form-control" value="{{ old('job_title') }}">
                  @error('job_title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Location</label>
                  <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                  @error('location') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                  @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Deadline Date</label>
                  <input type="date" name="deadline_date" class="form-control" value="{{ old('deadline_date') }}">
                  @error('deadline_date') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Create Job Opening</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

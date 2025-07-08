@extends('AdminDashboard.master')

@section('title', 'Create Service')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Create Service</h4>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('services.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Service Name</label>
                        <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                        @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control">{{ old('description') }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Technologies Used (comma separated)</label>
                        <input type="text" name="technologies" class="form-control" placeholder="Laravel, Vue.js, MySQL">
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Additional Info</label>
                        <textarea name="additional_info" class="form-control">{{ old('additional_info') }}</textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                </div>

                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Create Service</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

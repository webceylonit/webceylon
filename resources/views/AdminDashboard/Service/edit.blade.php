@extends('AdminDashboard.master')

@section('title', 'Edit Service')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Edit Service</h4>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <form method="POST" action="{{ route('services.update', $service->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
              <div class="row">

                <div class="col-md-12 mb-3">
                  <label class="form-label">Service Name</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name', $service->name) }}">
                  @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Description</label>
                  <textarea name="description" class="form-control">{{ old('description', $service->description) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Technologies Used (comma separated)</label>
                  <input type="text" name="technologies" class="form-control" value="{{ old('technologies', is_array($service->technologies) ? implode(',', $service->technologies) : $service->technologies) }}">
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Additional Info</label>
                  <textarea name="additional_info" class="form-control">{{ old('additional_info', $service->additional_info) }}</textarea>
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Image</label>
                  <input type="file" name="image" class="form-control">
                  @if ($service->image)
                    <div class="mt-2">
                      <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" class="img-thumbnail" width="100">
                    </div>
                  @endif
                </div>

              </div>
            </div>

            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Update Service</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

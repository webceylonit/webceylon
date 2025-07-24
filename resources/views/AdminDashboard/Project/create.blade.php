@extends('AdminDashboard.master')

@section('title', 'Project')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Project Create</h4>
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
          <form class="card" method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="row">

                <div class="col-md-6 mb-3">
                  <label class="form-label">Project Title *</label>
                  <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                  @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Client </label>
                  <input type="text" name="client" class="form-control" value="{{ old('client') }}">
                  @error('client') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Description *</label>
                  <textarea name="description" class="form-control" rows="4" required>{{ old('description') }}</textarea>
                  @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Project Type *</label>
                  <select name="type" class="form-control" required>
                    <option value="">Select Type</option>
                    <option value="Web Development">Web Development</option>
                    <option value="ERP System Development">ERP System Development</option>
                    <option value="SEO (Search Engine Optimization)">SEO (Search Engine Optimization)</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                  </select>
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Technologies Used (comma separated)</label>
                  <input type="text" name="technologies_used" class="form-control" placeholder="Laravel, Vue.js, MySQL">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Started Date</label>
                  <input type="date" name="started_date" class="form-control" value="{{ old('started_date') }}">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Completed Date</label>
                  <input type="date" name="completed_date" class="form-control" value="{{ old('completed_date') }}">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Location</label>
                  <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Main Image *</label>
                  <input type="file" name="main_image" class="form-control" id="mainImageInput" required>
                  <img id="mainImagePreview" src="#" alt="Main Image Preview" class="mt-2 rounded shadow-sm d-none" style="max-height: 150px;">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Sub Image 1</label>
                  <input type="file" name="subimage1" class="form-control" id="subImage1Input">
                  <img id="subImage1Preview" src="#" alt="Sub Image 1 Preview" class="mt-2 rounded shadow-sm d-none" style="max-height: 150px;">
                </div>

                <div class="col-md-6 mb-3">
                  <label class="form-label">Sub Image 2</label>
                  <input type="file" name="subimage2" class="form-control" id="subImage2Input">
                  <img id="subImage2Preview" src="#" alt="Sub Image 2 Preview" class="mt-2 rounded shadow-sm d-none" style="max-height: 150px;">
                </div>


              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Create Project</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>
</div>

@endsection


@section('scripts')
<script>
  function previewImage(inputId, previewId) {
    const input = document.getElementById(inputId);
    const preview = document.getElementById(previewId);

    input.addEventListener('change', function() {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          preview.classList.remove('d-none');
        };
        reader.readAsDataURL(file);
      } else {
        preview.classList.add('d-none');
        preview.src = "#";
      }
    });
  }

  previewImage("mainImageInput", "mainImagePreview");
  previewImage("subImage1Input", "subImage1Preview");
  previewImage("subImage2Input", "subImage2Preview");
</script>
@endsection
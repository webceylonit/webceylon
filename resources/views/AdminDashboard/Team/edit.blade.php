@extends('AdminDashboard.master')

@section('title', 'Edit Team Member')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Edit Team Member</h4>
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
          <form method="POST" action="{{ route('team.update', $team->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card-body">
              <div class="row">

                <!-- Name -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Name *</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name', $team->name) }}" required>
                </div>

                <!-- Position -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Position *</label>
                  <input type="text" name="position" class="form-control" value="{{ old('position', $team->position) }}" required>
                </div>

                <!-- Image Upload -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Image</label>
                  <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)">
                  <div class="mt-3">
                    <img id="imagePreview" src="{{ asset('storage/' . $team->image) }}" style="max-height: 200px;">
                  </div>
                </div>

                <!-- Facebook -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Facebook Link</label>
                  <input type="url" name="fb_link" class="form-control" value="{{ old('fb_link', $team->fb_link) }}">
                </div>

                <!-- LinkedIn -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">LinkedIn Link</label>
                  <input type="url" name="linkedin_link" class="form-control" value="{{ old('linkedin_link', $team->linkedin_link) }}">
                </div>

                <!-- Portfolio -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Portfolio Link</label>
                  <input type="url" name="portfolio_link" class="form-control" value="{{ old('portfolio_link', $team->portfolio_link) }}">
                </div>

              </div>
            </div>

            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('scripts')
<!-- Preview JS -->
<script>
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      const output = document.getElementById('imagePreview');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>
@endsection

@extends('AdminDashboard.master')

@section('title', 'Create Team Member')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Create Team Member</h4>
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
          <form method="POST" action="{{ route('team.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="row">

                <!-- Name -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Name *</label>
                  <input type="text" name="name" class="form-control" placeholder="Add Name" value="{{ old('name') }}" required>
                  @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Position -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Position *</label>
                  <input type="text" name="position" class="form-control" placeholder="Ex: Web Developer" value="{{ old('position') }}" required>
                  @error('position') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Image Upload with Preview -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Image *</label>
                  <input type="file" name="image" class="form-control" accept="image/*" onchange="previewImage(event)" required>
                  @error('image') <small class="text-danger">{{ $message }}</small> @enderror
                  <div class="mt-3">
                    <img id="imagePreview" src="#" alt="Image Preview" style="max-height: 200px; display: none;">
                  </div>
                </div>

                <!-- Facebook Link -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Facebook Link</label>
                  <input type="url" name="fb_link" class="form-control" placeholder="https://facebook.com/username" value="{{ old('fb_link') }}">
                  @error('fb_link') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- LinkedIn Link -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">LinkedIn Link</label>
                  <input type="url" name="linkedin_link" class="form-control" placeholder="https://linkedin.com/in/username" value="{{ old('linkedin_link') }}">
                  @error('linkedin_link') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <!-- Portfolio Link -->
                <div class="col-md-6 mb-3">
                  <label class="form-label">Portfolio Link</label>
                  <input type="url" name="portfolio_link" class="form-control" placeholder="https://yourportfolio.com" value="{{ old('portfolio_link') }}">
                  @error('portfolio_link') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

              </div>
            </div>

            <!-- Submit -->
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection

@section('scripts')
<!-- Image Preview Script -->
<script>
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function () {
      const output = document.getElementById('imagePreview');
      output.src = reader.result;
      output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
  }
</script>
@endsection

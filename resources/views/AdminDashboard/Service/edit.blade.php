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
                  <label class="form-label">Service Name *</label>
                  <input type="text" name="name" class="form-control" value="{{ old('name', $service->name) }}" required>
                  @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12 mb-3">
                  <label class="form-label">Description *</label>
                  <div id="quill-editor" style="height: 300px;"></div>
                  <input type="hidden" name="description" id="description" value="{{ old('description', $service->description) }}" required>
                  @error('description')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>


                <div class="col-md-12 mb-3">
                  <label class="form-label">Technologies Used (comma separated)</label>
                  <input type="text" name="technologies" class="form-control"
                    value="{{ old('technologies', is_array($service->technologies) ? implode(',', $service->technologies) : $service->technologies) }}">
                </div>

                <!-- <div class="col-md-12 mb-3">
                  <label class="form-label">Additional Info</label>
                  <textarea name="additional_info" class="form-control">{{ old('additional_info', $service->additional_info) }}</textarea>
                </div> -->

                <div class="col-md-12 mb-3">
                  <label class="form-label">Image</label>
                  <input type="file" name="image" class="form-control">
                  @if ($service->image)
                  <div class="mt-2">
                    <img src="{{ asset('public/storage/' . $service->image) }}" alt="Service Image" class="img-thumbnail" width="300">
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

@section('scripts')
<!-- Quill Editor CDN -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

<script>
  $(document).ready(function () {
    const quill = new Quill('#quill-editor', {
      theme: 'snow',
      placeholder: 'Enter service description...',
      modules: {
        toolbar: [
          [{ 'font': [] }],
          [{ 'size': ['small', false, 'large', 'huge'] }],
          ['bold', 'italic', 'underline', 'strike'],
          [{ 'color': [] }, { 'background': [] }],
          [{ 'script': 'sub' }, { 'script': 'super' }],
          [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
          [{ 'align': [] }],
          ['blockquote', 'code-block'],
          [{ 'list': 'ordered' }, { 'list': 'bullet' }],
          [{ 'indent': '-1' }, { 'indent': '+1' }],
          ['link', 'image', 'video'],
          ['clean']
        ]
      }
    });

    // Set existing description into editor
    const existingDescription = {!! json_encode(old('description', $service->description)) !!};
    quill.root.innerHTML = existingDescription;

    // Sync content on form submit
    $("form").on("submit", function () {
      $("#description").val(quill.root.innerHTML.trim());
    });
  });
</script>

@endsection

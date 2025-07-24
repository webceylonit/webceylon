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
                                    <input type="text" name="title" class="form-control" value="{{ old('title', $project->title) }}" required>
                                    @error('title') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Client</label>
                                    <input type="text" name="client" class="form-control" value="{{ old('client', $project->client) }}">
                                    @error('client') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-12 mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" rows="4" class="form-control" required>{{ old('description', $project->description) }}</textarea>
                                    @error('description') <small class="text-danger">{{ $message }}</small> @enderror
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Project Type</label>
                                    <select name="type" class="form-control" required>
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

                                {{-- Main Image --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Main Image</label>
                                    <input type="file" name="main_image" class="form-control" id="mainImageInput">
                                    @if($project->main_image)
                                    <p class="mt-2">Current Image:</p>
                                    <img src="{{ asset('storage/' . $project->main_image) }}" id="mainImagePreviewOld" alt="Current Main Image" class="img-thumbnail mb-2" style="max-height: 150px;">
                                    @endif
                                    <img id="mainImagePreview" src="#" alt="Preview" class="img-thumbnail d-none" style="max-height: 150px;">
                                </div>

                                {{-- Sub Image 1 --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Sub Image 1</label>
                                    <input type="file" name="subimage1" class="form-control" id="subImage1Input">
                                    @if($project->subimage1)
                                    <p class="mt-2">Current Image:</p>
                                    <img src="{{ asset('storage/' . $project->subimage1) }}" id="subImage1PreviewOld" alt="Current Sub Image 1" class="img-thumbnail mb-2" style="max-height: 150px;">
                                    @endif
                                    <img id="subImage1Preview" src="#" alt="Preview" class="img-thumbnail d-none" style="max-height: 150px;">
                                </div>

                                {{-- Sub Image 2 --}}
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Sub Image 2</label>
                                    <input type="file" name="subimage2" class="form-control" id="subImage2Input">
                                    @if($project->subimage2)
                                    <p class="mt-2">Current Image:</p>
                                    <img src="{{ asset('storage/' . $project->subimage2) }}" id="subImage2PreviewOld" alt="Current Sub Image 2" class="img-thumbnail mb-2" style="max-height: 150px;">
                                    @endif
                                    <img id="subImage2Preview" src="#" alt="Preview" class="img-thumbnail d-none" style="max-height: 150px;">
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

@section('scripts')
<script>
    function handleImagePreview(inputId, previewId) {
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

    handleImagePreview("mainImageInput", "mainImagePreview");
    handleImagePreview("subImage1Input", "subImage1Preview");
    handleImagePreview("subImage2Input", "subImage2Preview");
</script>
@endsection
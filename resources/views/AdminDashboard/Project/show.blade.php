@extends('AdminDashboard.master')

@section('title', 'Project Details')

@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6 mt-3">
                <h4>Project Details</h4>
            </div>
            <div class="col-6 mt-3 text-end">
                <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning me-2">
                    <i class="fa fa-edit"></i> Edit
                </a>

                <form action="{{ route('projects.destroy', $project->id) }}" method="POST" class="d-inline"
                    onsubmit="return confirm('Are you sure you want to delete this project?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
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

                    @if($project)
                    <div class="row">
                        <!-- Left column -->
                        <div class="col-md-6">
                            <h5><strong>Title:</strong></h5>
                            <p>{{ $project->title }}</p>

                            <h5><strong>Client:</strong></h5>
                            <p>{{ $project->client ?? '-' }}</p>

                            <h5><strong>Project Type:</strong></h5>
                            <p>{{ $project->type ?? '-' }}</p>

                            <h5><strong>Technologies Used:</strong></h5>
                            <p>{{ implode(', ', $project->technologies_used ?? []) }}</p>


                            <h5><strong>Started Date:</strong></h5>
                            <p>{{ $project->started_date ?? '-' }}</p>

                            <h5><strong>Completed Date:</strong></h5>
                            <p>{{ $project->completed_date ?? '-' }}</p>

                            <h5><strong>Location:</strong></h5>
                            <p>{{ $project->location ?? '-' }}</p>

                            <h5><strong>Description:</strong></h5>
                            <p>{{ $project->description }}</p>
                        </div>

                        <!-- Right column -->
                        <div class="col-md-6">


                            <h5><strong>Main Image:</strong></h5>
                            @if($project->main_image)
                            <img src="{{ asset('public/storage/' . $project->main_image) }}" class="img-fluid rounded mb-3" style="max-height: 200px;">
                            @else
                            <p>No main image uploaded.</p>
                            @endif

                            <h5><strong>Sub Images:</strong></h5>
                            <div class="d-flex gap-3 flex-wrap">
                                @if($project->subimage1)
                                <img src="{{ asset('public/storage/' . $project->subimage1) }}" class="img-thumbnail" style="max-height: 120px;">
                                @endif
                                @if($project->subimage2)
                                <img src="{{ asset('public/storage/' . $project->subimage2) }}" class="img-thumbnail" style="max-height: 120px;">
                                @endif
                                @if(!$project->subimage1 && !$project->subimage2)
                                <p>No sub images uploaded.</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    @else
                    <p>No project data available.</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
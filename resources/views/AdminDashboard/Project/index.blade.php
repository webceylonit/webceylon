@extends('AdminDashboard.master')

@section('title', 'Project')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Project List</h4>
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
          <div class="list-project-header">
            <div>
              <div class="light-box">
                <a data-bs-toggle="collapse" href="#collapseproject" role="button" aria-expanded="false" aria-controls="collapseproject">
                </a>
              </div>
              <a class="btn btn-primary mb-2" href="{{ route('projects.create') }}">
                <i class="fa fa-plus"></i> Add Project
              </a>
            </div>
          </div>

          <div class="list-project">
            <table class="table" id="project-list">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Client</th>
                  <th>Location</th>
                  <th>Completed Date</th>
                  <th>Type</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($projects as $project)
                  <tr>
                    <td>{{ $project->title }}</td>
                    <td><img src="{{ asset('storage/' . $project->main_image) }}" width="100"></td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->location }}</td>
                    <td>{{ $project->completed_date->toDateString() }}</td>
                    <td>{{ $project->type }}</td>
                    <td>
                      <div class="project-action">
                        <a href="{{ route('projects.edit', $project->id) }}" class="btn btn-warning btn-sm">
                          <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this project?')">
                            <i class="fa fa-trash"></i> Delete
                          </button>
                        </form>
                      </div>
                    </td>

                  </tr>
                @endforeach
              </tbody>

            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

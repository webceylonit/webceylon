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

          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Image</th>
                  <th>Client</th>
                  <th>Type</th>
                  <th>Start Date</th>
                  <th>Completed Date</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($projects as $project)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $project->title }}</td>
                  <td><img src="{{ asset('public/storage/' . $project->main_image) }}" width="100"></td>
                  <td>{{ $project->client }}</td>
                  <td>{{ $project->type }}</td>
                    <td>{{ $project->started_date->toDatestring() }}</td>
                  <td>{{ $project->completed_date->toDatestring()}}</td>
                  <td>
                    <ul class="action">
                      <li class="edit">
                        <a href="{{ route('projects.show', $project->id) }}">
                          <i class="icon-eye" style="color: blue;"></i>
                        </a>
                      </li>
                      <li class="edit">
                        <a href="{{ route('projects.edit', $project->id) }}">
                          <i class="icon-pencil-alt"></i>
                        </a>
                      </li>

                      <li class="delete">
                        <form id="delete-form-{{ $project->id }}" action="{{ route('projects.destroy', $project->id) }}" method="POST" class="delete-form">
                          @csrf
                          @method('DELETE')
                          <button type="button" class="delete-btn" onclick="confirmDelete('delete-form-{{ $project->id }}');" style="border:none; background:none; cursor:pointer; padding:0;">
                            <i class="icon-trash" style="color:red;"></i>
                          </button>
                        </form>
                      </li>

                    </ul>
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
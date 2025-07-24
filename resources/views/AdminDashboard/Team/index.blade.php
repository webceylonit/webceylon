@extends('AdminDashboard.master')

@section('title', 'Team Members')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Team Members</h4>
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
          <div class="list-career-header">
            <div>
              <div class="light-box">
                <a data-bs-toggle="collapse" href="#collapsecareer" role="button" aria-expanded="false" aria-controls="collapsecareer">
                </a>
              </div>
              <a class="btn btn-primary mb-2" href="{{ route('team.create') }}">
                <i class="fa fa-plus"></i> Add Team Member
              </a>
            </div>
          </div>

          <div class="list-career">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Position</th>
                    <th>Actions</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($team as $t)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $t->name }}</td>
                    <td>
                      <img src="{{ asset('public/storage/' . $t->image) }}" alt="Team Member Image" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                    </td>

                    <td>{{ $t->position }}</td>
                    <td>
                      <ul class="action">

                        <li class="edit">
                          <a href="{{ route('team.edit', $t->id) }}">
                            <i class="icon-pencil-alt"></i>
                          </a>
                        </li>

                        <li class="delete">
                          <form id="delete-form-{{ $t->id }}" action="{{ route('team.destroy', $t->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="delete-btn" onclick="confirmDelete('delete-form-{{ $t->id }}');" style="border:none; background:none; cursor:pointer; padding:0;">
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
</div>

@endsection
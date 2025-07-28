@extends('AdminDashboard.master')

@section('title', 'Career')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Career List</h4>
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
              <a class="btn btn-primary mb-2" href="{{ route('careers.create') }}">
                <i class="fa fa-plus"></i> Add Job Opening
              </a>
            </div>
          </div>

          <div class="list-career">
            <div class="table-responsive">
              <table class="display" id="basic-1">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Job Title</th>
                    <th>Location</th>
                    <th>Deadline</th>
                    <th>Actions</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($careers as $career)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $career->job_title }}</td>
                    <td>{{ $career->location }}</td>
                    <td>{{ $career->deadline_date->toDateString() }}</td>
                    <td>
                      <ul class="action">

                        <li class="edit">
                          <a href="{{ route('careers.edit', $career->id) }}">
                            <i class="icon-pencil-alt"></i>
                          </a>
                        </li>

                        <li class="delete">
                          <form id="delete-form-{{ $career->id }}" action="{{ route('careers.destroy', $career->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="delete-btn" onclick="confirmDelete('delete-form-{{ $career->id }}');" style="border:none; background:none; cursor:pointer; padding:0;">
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
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
            <table class="table" id="career-list">
              <thead>
                <tr>
                  <th>Job Title</th>
                  <th>Location</th>
                  <th>Application Deadline</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($careers as $career)
                  <tr>
                    <td>{{ $career->job_title }}</td>
                    <td>{{ $career->location }}</td>
                    <td>{{ $career->deadline_date->toDateString() }}</td>
                    <td>
                      <div class="career-action">
                        <a href="{{ route('careers.edit', $career->id) }}" class="btn btn-warning btn-sm me-2">
                          <i class="fa fa-edit"></i> 
                        </a>
                        <form action="{{ route('careers.destroy', $career->id) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this Job Opening?')">
                            <i class="fa fa-trash"></i> 
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

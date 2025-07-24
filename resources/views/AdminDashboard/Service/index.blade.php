@extends('AdminDashboard.master')

@section('title', 'Service')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Service List</h4>
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
              <a class="btn btn-primary mb-2" href="{{ route('services.create') }}">
                <i class="fa fa-plus"></i> Add Service
              </a>
            </div>
          </div>

          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($services as $service)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $service->name }}</td>
                    <td>
                      @if ($service->image)
                        <img src="{{ asset('public/storage/' . $service->image) }}" width="100">
                      @else
                        N/A
                      @endif
                    </td>
                    
                    <td>
                      <ul class="action">

                        <li class="edit">
                          <a href="{{ route('services.edit', $service->id) }}">
                            <i class="icon-pencil-alt"></i>
                          </a>
                        </li>

                        <li class="delete">
                          <form id="delete-form-{{ $service->id }}" action="{{ route('services.destroy', $service->id) }}" method="POST" class="delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="delete-btn" onclick="confirmDelete('delete-form-{{ $service->id }}');" style="border:none; background:none; cursor:pointer; padding:0;">
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

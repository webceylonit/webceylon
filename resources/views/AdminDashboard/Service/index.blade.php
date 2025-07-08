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

          <div class="list-project">
            <table class="table" id="service-list">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Technologies</th>
                  <th>Additional Info</th>
                  <th>Actions</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($services as $service)
                  <tr>
                    <td>{{ $service->name }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($service->description, 60) }}</td>
                    <td>
                      @if ($service->image)
                        <img src="{{ asset('storage/' . $service->image) }}" width="100">
                      @else
                        N/A
                      @endif
                    </td>
                    <td>
                      @if (is_array($service->technologies))
                        <ul style="padding-left: 1rem;">
                          @foreach ($service->technologies as $tech)
                            <li>{{ $tech }}</li>
                          @endforeach
                        </ul>
                      @else
                        N/A
                      @endif
                    </td>
                    <td>{{ $service->additional_info ?? '—' }}</td>
                    <td>
                      <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning btn-sm">
                        <i class="fa fa-edit"></i> Edit
                      </a>
                      <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this service?')">
                          <i class="fa fa-trash"></i> Delete
                        </button>
                      </form>
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

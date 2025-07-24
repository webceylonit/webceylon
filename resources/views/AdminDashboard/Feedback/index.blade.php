@extends('AdminDashboard.master')

@section('title', 'Feedbacks')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Feedbacks</h4>
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
          <div class="list-inquiry-header">
            <div>
              <div class="light-box">
                <a data-bs-toggle="collapse" href="#collapseinquiry" role="button" aria-expanded="false" aria-controls="collapseinquiry">
                </a>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table class="display" id="basic-1">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Image</th>
                  <th>Name</th>
                  <th>Designation</th>
                  <th>Company</th>
                  <th>Email</th>
                  <th>Contact Number</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($feedbacks as $fb)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>
                    @if ($fb->company_logo)
                    <img src="{{ asset('storage/' . $fb->company_logo) }}" alt="Logo" style="height: 50px; width: auto; border-radius: 5px;">
                    @else
                    <img src="{{ asset('frontend/assets/images/person.png') }}" alt="No Image" style="height: 50px; width: auto; opacity: 0.6;">
                    @endif
                  </td>
                  <td>{{ $fb->name }}</td>
                  <td>{{ $fb->designation }}</td>
                  <td>{{ $fb->company ?? '-'}}</td>
                  <td>{{ $fb->email ?? '-'}}</td>
                  <td>{{ $fb->contact_number }}</td>
                  <td>
                    @php
                    $statusClasses = [
                    'Pending' => 'badge bg-warning text-dark',
                    'Approved' => 'badge bg-success',
                    'Canceled' => 'badge bg-danger',
                    ];
                    @endphp
                    <span class="{{ $statusClasses[$fb->status] ?? 'badge bg-secondary' }}">
                      {{ $fb->status }}
                    </span>
                  </td>


                  <td>
                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal"
                      data-bs-target="#feedbackModal{{ $fb->id }}">
                      View
                    </button>
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



@foreach ($feedbacks as $fb)
<!-- Feedback Modal -->
<div class="modal fade" id="feedbackModal{{ $fb->id }}" tabindex="-1" aria-labelledby="feedbackModalLabel{{ $fb->id }}" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <form method="POST" action="{{ route('feedbacks.update', $fb->id) }}">
        @csrf
        @method('PUT')
        <div class="modal-header">
          <h5 class="modal-title" id="feedbackModalLabel{{ $fb->id }}">Feedback from {{ $fb->name }}</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p><strong>Designation:</strong> {{ $fb->designation ?? '-'}}</p>
          <p><strong>Company:</strong> {{ $fb->company ?? '-' }}</p>
          <p><strong>Email:</strong> {{ $fb->email ?? '-' }}</p>
          <p><strong>Contact Number:</strong> {{ $fb->contact_number ?? '-'}}</p>
          <hr>
          <p><strong>Feedback:</strong></p>
          <textarea class="text-secondary col-12" rows="4" readonly>{{ $fb->feedback }}</textarea>

          <div class="mt-4">
            <label for="status" class="form-label"><strong>Update Status:</strong></label>
            <select name="status" class="form-select" required>
              <option value="Pending" {{ $fb->status == 'Pending' ? 'selected' : '' }}>Pending</option>
              <option value="Approved" {{ $fb->status == 'Approved' ? 'selected' : '' }}>Approved</option>
              <option value="Canceled" {{ $fb->status == 'Canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Update Status</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach


@endsection
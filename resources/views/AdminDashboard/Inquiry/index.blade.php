@extends('AdminDashboard.master')

@section('title', 'Inquiries')

@section('content')

<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6 mt-3">
        <h4>Message List</h4>
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
                  <th>Name</th>
                  <th>Email</th>
                  <th>Contact</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Status</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($inquiries as $inquiry)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $inquiry->name }}</td>
                  <td>{{ $inquiry->email }}</td>
                  <td>{{ $inquiry->phone ?? '-'}}</td>
                  <td>{{ $inquiry->subject ?? '-'}}</td>
                  <td>{{ $inquiry->message }}</td>
                  <td>
                    @if($inquiry->status === 'New')
                    <form method="POST" action="{{ route('inquiries.updateStatus', $inquiry->id) }}">
                      @csrf
                      @method('PATCH')
                      <button type="submit" class="btn btn-sm btn-warning">Mark as Viewed</button>
                    </form>
                    @else
                    <span class="badge bg-success">Viewed</span>
                    @endif
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
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

          <div class="list-inquiry">
            <table class="table" id="inquiry-list">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Message</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($inquiries as $inquiry)
                  <tr>
                    <td>{{ $inquiry->name }}</td>
                    <td>{{ $inquiry->email }}</td>
                    <td>{{ $inquiry->message }}</td>
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

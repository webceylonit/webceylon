<h2>New Inquiry Received</h2>

<p><strong>Name:</strong> {{ $inquiry->name }}</p>
<p><strong>Email:</strong> {{ $inquiry->email }}</p>
@if($inquiry->phone)
<p><strong>Phone:</strong> {{ $inquiry->phone }}</p>
@endif
@if($inquiry->subject)
<p><strong>Subject:</strong> {{ $inquiry->subject }}</p>
@endif
<p><strong>Message:</strong></p>
<p>{{ $inquiry->message }}</p>

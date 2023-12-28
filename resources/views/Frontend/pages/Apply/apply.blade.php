@extends('frontend.master')


@section('content')





<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 800px; margin: 0 auto;">

<div class="container mt-4">
  <h2>Job Application Form</h2>
 <form action="{{ route('job.apply', ['jobId' => $job->id]) }}" method="post" enctype="multipart/form-data">
    @csrf

<input type="hidden" name="company_name" value="{{ $job->companyName }}">
    <input type="hidden" name="job_name" value="{{ $job->jobTitle }}">

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
    </div>
    <div class="form-group">
        <label for="resume">Upload Resume:</label>
        <input type="file" class="form-control" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
    </div>
    <button type="submit" class="btn btn-primary">Apply</button>
</form>
</div>
</div>













@endsection
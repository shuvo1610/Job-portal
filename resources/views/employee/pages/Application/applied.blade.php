<!-- resources/views/company/applications/index.blade.php -->

@extends('employee.master') {{-- Assuming you have a layout file --}}

@section('content')
<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">

<div class="container">
        <h3 style="color: #1870AB;">Your Job Applications</h3>

        @if ($userApplications->isEmpty())
            <p>You haven't applied to any jobs yet.</p>
        @else
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Company Name</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Resume</th>


                    </tr>
                </thead>
                <tbody>
                    @foreach ($userApplications as $application)
                        <tr>
                            <td>{{ $application->job->jobTitle }}</td>
                            <td>{{ $application->company_name }}</td>
                            <td>{{ $application->name }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->phone_number }}</td>
                            <td>
                                @if ($application->resume)
                                    <a href="{{ asset('storage/' . $application->resume) }}" target="_blank">View Resume</a>
                                @else
                                    No Resume
                                @endif
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection

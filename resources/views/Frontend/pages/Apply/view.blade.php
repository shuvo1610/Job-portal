<!-- resources/views/your_view_name.blade.php -->

@extends('frontend.master')

@section('content')

<div style="margin-bottom: 100px;"></div>


<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1100px; margin: 0 auto;">

<h1>Your Job Applications</h1>
        @if ($userApplications->isEmpty())
            <p>You haven't applied to any jobs yet.</p>
        @else
            <table class="table">
           
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
                            <td>{{ $application->job_name }}</td>
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

@endsection

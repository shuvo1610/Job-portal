@extends('employee.master')
@section('content')

    <div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1100px; margin: 0 auto;">

        <h3 style="color: #1870AB;">Job List</h3>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Job Title</th>
                <th scope="col">No of Vacancies</th>
                <th scope="col">Company Name</th>
                <th scope="col">Location</th>
                <th scope="col">Upload Image</th>
                <th scope="col">Set Quiz</th>
            </tr>
            </thead>
            <tbody>
            @foreach($create_jobs as  $key=>$createjob)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{ $createjob->jobTitle}}</td>
                    <td>{{ $createjob->vacancies}}</td>
                    <td>{{ $createjob->companyName}}</td>
                    <td>{{ $createjob->location}}</td>

                    <td><img src="{{ asset('storage/' . $createjob->image) }}" alt="Image"></td>
                    <td>
                        <a class="btn btn-success" href="{{route('quiz.create',[$createjob->id] )}}"><span><i class="fas fa-edit"></i></span></a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>


@endsection

@extends('admin.master')

@section('content')

    <div
        style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1300px; margin: 0 auto;">
        <h3 style="color: #1870AB;">Job Circular</h3>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">No of Vacancies</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Location</th>
                    <th scope="col">Status</th>
                    <th scope="col">Deadline</th>
                    <th scope="col" class="text-center">Action</th>
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
                        <td> @if($createjob->status == 'pending')
                                <span class="badge rounded-pill bg-warning text-dark">Pending</span>
                            @elseif($createjob->status == 'approved')
                                <span class="badge rounded-pill bg-success">Approved</span>
                            @elseif($createjob->status == 'rejected')
                                <span class="badge rounded-pill bg-danger">Rejected</span>
                            @endif</td>
                        <td>{{ $createjob->deadline}}</td>
                        <td>
                            <a class="btn btn-success" href=""><span><i class="fas fa-eye"></i></span></a>
                            <a class="btn btn-danger" href=""><span><i class="fa fa-trash"
                                                                       aria-hidden="true"></i></span></a>
                            @if(auth()->user()->role == 'admin')
                                <div class="btn-group">
                                    <button type="button" class="btn btn-warning dropdown-toggle"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        Request
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form action="{{ route('job_post.approve', $createjob->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item">Approve</button>
                                            </form>
                                        </li>
                                        <li>
                                            <form action="{{ route('job_post.reject', $createjob->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <button type="submit" class="dropdown-item">Reject</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{ $create_jobs->links() }}
    </div>
@endsection




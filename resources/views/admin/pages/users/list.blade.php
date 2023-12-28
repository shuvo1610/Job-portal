@extends('admin.master')
@section('content')
    <div
        style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1250px; margin: 0 auto;">

        <div class="d-flex mb-4 justify-content-between align-items-center">
            <h4>User List</h4>
            <a href="{{ route('users.create') }}" class="btn btn-success">Create new User</a>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $key=>$singleUser)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$singleUser->name}}</td>
                    <td>
                        <img style="border-radius: 60px;" width="20%" src="{{ asset('storage/' .$singleUser->image) }}"
                             alt="">
                    </td>
                    <td>{{$singleUser->email}}</td>
                    <td>
                        @if($singleUser->status == 'pending')
                            <span class="badge rounded-pill bg-warning text-dark">Pending</span>
                        @elseif($singleUser->status == 'approved')
                            <span class="badge rounded-pill bg-success">Approved</span>
                        @elseif($singleUser->status == 'rejected')
                            <span class="badge rounded-pill bg-danger">Rejected</span>
                        @endif
                    </td>


                    <td>{{$singleUser->user_type}}</td>
                    <td class="text-center">
                        <a class="btn btn-success" href="">View</a>
                        @if(auth()->user()->user_type == 'user')
                            <a class="btn btn-warning" href="">Edit</a>
                        @endif
                        <a class="btn btn-danger" href="">Delete</a>
                        @if(auth()->user()->role == 'admin')
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Request
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <form action="{{ route('users.approve', $singleUser->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="dropdown-item">Approve</button>
                                    </form>
                                </li>
                                <li>
                                    <form action="{{ route('users.reject', $singleUser->id) }}" method="POST">
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
@endsection

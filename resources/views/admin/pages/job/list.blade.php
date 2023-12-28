@extends('admin.master')

@section('content')
<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">
<h4>Recent Job Post</h4>
<a href="{{route('recent.job')}}" class="btn btn-success">Create new Post</a>
<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
            <th scope="col">Job Name</th>
            <th scope="col">Company Name</th>
            <th scope="col">Address</th>
            <th scope="col">Salary</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

    @foreach($posts as  $key=>$post)
            <tr>
            <th scope="row">{{$key+1}}</th>
                <td>{{ $post->jobTitle}}</td>
                <td>{{ $post->companyName }}</td>
                <td>{{ $post->location }}</td>
                <td>{{ $post->salaryRange }}</td>
                <td><img src="{{ asset('storage/' . $post->image_path) }}" alt="Image"></td>
                <td>
        <a class="btn btn-success" href=""><span><i class="fas fa-edit"></i></span></a>
        <a class="btn btn-danger" href=""><span><i class="fa fa-trash" aria-hidden="true"></i></span></a>
        <a class="btn btn-warning" href=""><span><i class="fas fa-pencil-alt"></i></span></a>
        </td>
            </tr>
        @endforeach
    </tbody>
</table>


</div>

@endsection
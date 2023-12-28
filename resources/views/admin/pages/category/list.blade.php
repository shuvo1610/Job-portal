@extends('admin.master')

@section('content')
    <div
        style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1250px; margin: 0 auto;">
        <div class="d-flex mb-4 justify-content-between align-items-center">
            <h3>Category List</h3>
            <a href="{{route('category.form')}}" class="btn btn-success">Create New Category</a>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">Status</th>
                <th scope="col" class="text-end">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($categories as $key=>$category)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$category->name}}</td>
                    <td class="text-center">{{$category->status}}</td>
                    <td class="text-end">
                        <a href="" class="btn btn-success">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection

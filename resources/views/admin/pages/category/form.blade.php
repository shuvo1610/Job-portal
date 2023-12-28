@extends('admin.master')

@section('content')
    <div
        style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">
        <h3 style="color: #1870AB;">Create a Category</h3>

        <form action="{{route('category.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Enter Category Name:</label>
                <input required type="text" class="form-control" id="" placeholder="Enter name" name="category_name">
            </div>

            <div class="form-group">
                <label for="">Enter Category Description:</label>
                <textarea class="form-control" name="category_description" id="" cols="30" rows="10"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection

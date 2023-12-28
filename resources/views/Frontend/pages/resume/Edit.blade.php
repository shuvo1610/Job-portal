@extends('frontend.master')


@section('content')



<div class="container mt-5">
        <form action="{{route('update-profile')}}" method="post" enctype="multipart/form-data">
                @csrf
            <h2 class="mb-4">Resume Form</h2>

            <!-- Personal Information Section -->
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>

            <div class="form-group">
                <label for="github">GitHub:</label>
                <input type="text" class="form-control" id="github" name="github">
            </div>

            <div class="form-group">
                <label for="linkedin">LinkedIn:</label>
                <input type="text" class="form-control" id="linkedin" name="linkedin">
            </div>

            <div class="form-group">
                <label for="contact">Contact:</label>
                <input type="tel" class="form-control" id="contact" name="contact">
            </div>

            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
            </div>
            <!-- Objective Section -->
            <div class="form-group">
                <label for="objective">Objective:</label>
                <textarea class="form-control" id="objective" name="objective"></textarea>
            </div>

            <!-- Working Experience Section -->
            <div class="form-group">
                <label for="experience">Working Experience:</label>
                <textarea class="form-control" id="experience" name="experience"></textarea>
            </div>

            <!-- Educational Qualifications Section -->
            <div class="form-group">
                <label for="education">Educational Qualifications:</label>
                <textarea class="form-control" id="education" name="qualification"></textarea>
            </div>

            <!-- Skills Section -->
            <div class="form-group">
                <label for="skills">Skills:</label>
                <textarea class="form-control" id="skills" name="skill"></textarea>
            </div>

            <!-- Language Skills Section -->
            <div class="form-group">
                <label for="language-skills">Language Skills:</label>
                <textarea class="form-control" id="language-skills" name="language"></textarea>
            </div>

            <!-- References Section -->
            <div class="form-group">
                <label for="references">References:</label>
                <textarea class="form-control" id="references" name="references"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js CDN links -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>










@endsection
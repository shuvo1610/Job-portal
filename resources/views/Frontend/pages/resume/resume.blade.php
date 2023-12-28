@extends('frontend.master')


@section('content')

<br>
<!-- resources/views/Frontend/pages/resume/show.blade.php -->

<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 800px; margin: 0 auto;">

    <header style="display: flex; justify-content: space-between; align-items: center; background-color: #fff; padding: 20px;">
        <!-- Left Info -->
        <div id="left-info" style="width: 70%;">
      
            <h3>{{ auth()->user()->name }}</h3>
            <p>Email: {{ auth()->user()->email }}</p>
            <p>{{ $resume->address }}</p>
            <p>GitHub: <a href="{{ $resume->github }}">{{ $resume->github }}</a></p>
            <p>LinkedIn: <a href="{{ $resume->linkedin }}">{{ $resume->linkedin }}</a></p>
            <p>Contact: {{ $resume->contact }}</p>
        </div>

        <!-- Right Image -->
        <div id="right-image" style="width: 30%; text-align: center;">
            <img src="{{ asset('storage/' . $resume->image) }}" alt="{{ $resume->name }}" style="max-width: 100%; height: auto; border-radius: 50%;">
        </div>
    </header>

    <section style="padding: 20px;">
        <h5>Objective:</h5>
        <p>{{ $resume->objective }}</p>

        <h5>Working Experience</h5>
        <p>{{ $resume->experience }}</p>

        <h5>Educational Qualifications</h5>
        <p>{{ $resume->qualification }}</p>

        <h5>Skills</h5>
        <p>{{ $resume->skill }}</p>

        <h5>Language Skills</h5>
        <p>{{ $resume->language }}</p>

        <h5>References</h5>
        <p>{{ $resume->references }}</p>
    </section>

    <div class="container">
        <a class="btn btn-primary" href="{{ route('edit-profile') }}">Edit</a>
        <button class="btn btn-success" id="printButton">Print</button>
    </div>
</div>

<script>
    // Function to handle the print button click
    function printResume() {
        // Hide the edit and print buttons before printing
        document.querySelector('.container').style.display = 'none';

        // Print the resume
        window.print();

        // Show the edit and print buttons after printing
        document.querySelector('.container').style.display = 'block';
    }

    // Attach the printResume function to the print button
    document.getElementById('printButton').addEventListener('click', printResume);
</script>

@endsection

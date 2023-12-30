@extends('Frontend.master')
@section('content')
    @push('css')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            body {
                font-family: 'Montserrat', sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .container {
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
                padding: 20px;
                max-width: 500px;
                width: 100%;
            }

            .question {
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 15px;
            }

            .options {
                display: flex;
                flex-direction: column;
            }

            .option {
                margin-bottom: 10px;
            }

            label {
                display: flex;
                align-items: center;
                cursor: pointer;
            }

            input[type="checkbox"] {
                margin-right: 10px;
            }

            button {
                padding: 10px;
                background-color: #21bf73;
                color: #fff;
                border: none;
                cursor: pointer;
            }

            button:hover {
                background-color: #1870ab;
            }
        </style>

    @endpush
    <div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">
        <div class="mb-5 container">
            <h3 class="text-success">Thanks for the Test</h3>
            <p>Your Score is <strong>{{ $assessment->obtain_marks }} out of {{ $assessment->total_marks }}</strong></p>
            <p>Soon, we'll contact with you & Now you can apply</p>
            <a href="{{route('job.post',$assessment->create_job_id)}}"
               class="btn btn-primary">Go For Apply</a>
        </div>
    </div>
@endsection
@push('js')
@endpush

@extends('employee.master')
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
    <div
        style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">
        <div class="mb-5 container">
            <h3 class="text-center">{{ $circular->jobTitle }}</h3>
            @foreach(optional($circular->job_quiz)->get() ?? [] as $quiz)
            <div class="question mb-3">Q.{{ $quiz->question }}</div>
            <div class="options">
                <div class="option">
                    <label>
                        <input type="radio" name="languages" value="{{ $quiz->option_a }}">
                        {{ $quiz->option_a }}
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="radio" name="languages" value="{{ $quiz->option_b }}">
                        {{ $quiz->option_b }}
                    </label>
                </div>
                <div class="option">
                    <label>
                        <input type="radio" name="languages" value="{{ $quiz->option_c }}">
                        {{ $quiz->option_c }}
                    </label>
                </div>
                <div class="option mb-5">
                    <label>
                        <input type="radio" name="languages" value="{{ $quiz->option_d }}">
                        {{ $quiz->option_d }}
                    </label>
                </div>
                <!-- Add more options as needed -->
            </div>
            @endforeach
        </div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h3 style="color: #1870AB;">Create Quiz</h3>
        <form action="{{route('quiz.store',$circular->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 job-details">
                    <label for="question">Question</label>
                    <textarea class="form-control" id="question" name="question"></textarea>
                    @error('question')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 job-details">
                    <label for="option_a">Option 1</label>
                    <input type="text" class="form-control" id="option_a" name="option_a">
                    @error('option_a')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="option_b">Option 2</label>
                    <input type="text" class="form-control" id="option_b" name="option_b">
                    @error('option_b')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="option_c">Option 3</label>
                    <input type="text" class="form-control" id="option_c" name="option_c">
                </div>
                <div class="col-md-6">
                    <label for="option_d">Option 4</label>
                    <input type="text" class="form-control" id="option_d" name="option_d">
                </div>
                <div class="col-md-6">
                    <label for="ans">Right Ans.</label>
                    <input type="text" class="form-control" id="ans" name="ans">
                    @error('ans')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="cancel" class="btn btn-primary">Cancel</button>
        </form>
    </div>
@endsection


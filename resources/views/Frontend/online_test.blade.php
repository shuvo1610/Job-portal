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
            <h3 class="text-center">{{ $create_jobs->jobTitle }}</h3>
            <div class="text-end">
                <p class="m-0"> <strong>Total Questions</strong> : <strong>{{ count($quizzes) }}</strong> </p>
                <p class="m-0"> <strong>Total Marks</strong> : <strong>{{ count($quizzes) }}</strong> </p>
                <p class="m-0"> <strong>Time</strong> : <strong><span class="minute">{{ count($quizzes) - 1 }}</span>:<span class="second">59</span></strong> </p>
            </div>
            <form action="{{ route('submit.test', $create_jobs->id) }}" method="post">@csrf
                @foreach($quizzes as $key=> $quiz)
                    <div class="question mb-3">Q.{{ $quiz->question }}</div>
                    <input type="hidden" name="correct_ans[{{ $key }}]" value="{{ $quiz->ans }}">
                    <input type="hidden" name="quiz_id[{{ $key }}]" value="{{ $quiz->id }}">
                    <input type="hidden" name="questions[{{ $key }}]" value="{{ $quiz->question }}">
                    <div class="options">
                        <div class="option">
                            <label>
                                <input type="radio" name="answer[{{ $key }}]" value="{{ $quiz->option_a }}">
                                {{ $quiz->option_a }}
                            </label>
                        </div>
                        <div class="option">
                            <label>
                                <input type="radio" name="answer[{{ $key }}]" value="{{ $quiz->option_b }}">
                                {{ $quiz->option_b }}
                            </label>
                        </div>
                        <div class="option">
                            <label>
                                <input type="radio" name="answer[{{ $key }}]" value="{{ $quiz->option_c }}">
                                {{ $quiz->option_c }}
                            </label>
                        </div>
                        <div class="option mb-5">
                            <label>
                                <input type="radio" name="answer[{{ $key }}]" value="{{ $quiz->option_d }}">
                                {{ $quiz->option_d }}
                            </label>
                        </div>
                        <!-- Add more options as needed -->
                    </div>
                @endforeach
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            let time_id = 0;
            //reduce time by 1 second
            function timeIt() {
                //get minutes and seconds
                var minute = $('.minute').text();
                var second = $('.second').text();

                //if second is 0 and minute is not 0
                if (second == 0 && minute != 0) {
                    minute--;
                    second = 60;
                }

                //if minute and second is 0
                if (second == 0 && minute == 0) {
                    //stop the interval and submit the form
                    $('form').submit();
                }

                //decrement seconds
                second--;

                //if second is less than 10 add 0 before it
                if (second < 10) {
                    second = '0' + second;
                }

                //update minutes and seconds
                $('.minute').text(minute);
                $('.second').text(second);
            }

            //call the function every 1 second
            time_id = setInterval(timeIt, 1000);
        });
    </script>
@endpush

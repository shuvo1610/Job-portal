@extends('Frontend.master')

@section('content')

    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-7 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href="#"><img src="{{ asset('storage/' . $create_jobs->image) }}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $create_jobs->jobTitle }}</h4>
                                </a>
                                <ul>
                                    <li>{{ $create_jobs->companyName}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $create_jobs->location }}</li>
                                    <li>{{ $create_jobs->salaryRange }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{ $create_jobs->responsibilities }}</p>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                            <ul>
                                @foreach(explode("\n", $create_jobs->requirements) as $requirement)
                                    <li>{{ $requirement }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Other Benefits</h4>
                            </div>
                            <ul>
                                @foreach(explode("\n", $create_jobs->benefits) as $benefits)
                                    <li>{{ $benefits }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>

                            <li>Location : <span>{{ $create_jobs->location }}</span></li>
                            <li>Vacancy : <span>{{ $create_jobs->vacancies }}</span></li>
                            <li>Job nature : <span>{{ $create_jobs->employmentStatus }}</span></li>
                            <li>Salary : <span>{{ $create_jobs->salaryRange }}</span></li>
                            <li>Application date : <span>{{ $create_jobs->deadline }}</span></li>
                        </ul>
                        <div>
                            @if (!(auth()->user()->assessment && auth()->user()->assessment->create_job_id == $create_jobs->id))
                                <a onclick="return confirm('Are you sure you want to start the exam?')" href="{{ route('online.test', $create_jobs->id) }}" class="btn btn-primary">Online Test</a>
                            @else
                                <a href="{{ route('job.applyForm', ['jobId' => $create_jobs->id, 'company_name' => $create_jobs->companyName, 'job_name' => $create_jobs->jobTitle]) }}" class="btn btn-primary">Apply</a>
                            @endif
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>How to Apply</h4>
                        </div>

                        <p>{{ $create_jobs->howToApply }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection







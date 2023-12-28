@extends('Frontend.master')



@section('content')



<div class="container-fluid">

  <div class="row">
    <nav class="col-md-2 d-none d-md-block sidebar fixed">
        <h1 class="btn btn-success" style="padding: 8px 60px;">Category</h1>
        @foreach($categories as $category)
                    <li style="background-color: #8FF112;">
                        <a href="{{ route('home.job', ['categoryId' => $category->id]) }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach

    </nav>

    <!-- Content -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

      <!-- Your page content goes here -->

      
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        @foreach($create_jobs as  $createjob)

                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="{{ asset('storage/' . $createjob->image) }}" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.html"><h4>{{ $createjob->jobTitle}}</h4></a>
                                    <ul>
                                        <li>{{ $createjob->companyName }}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $createjob->location }}</li>
                                        <li>{{ $createjob->salaryRange }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="{{route('job.post',$createjob->id)}}">Apply</a>
                                <span>7 hours ago</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
    </main>
  </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



@endsection





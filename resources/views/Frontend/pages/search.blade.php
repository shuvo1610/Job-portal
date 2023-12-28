@extends('frontend.master')


@section('content')

<h2>Search result for : {{ request()->search }} found {{$create_jobs->count()}} create_jobs.</h2>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

@if($create_jobs->count()>0)
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

@else
    <p>No results found.</p>
@endif
</div>

@endsection
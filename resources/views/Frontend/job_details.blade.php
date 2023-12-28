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
                                    <a href="#"><img src="{{ asset('storage/' . $posts->image_path) }}" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4>{{ $posts->jobTitle }}</h4>
                                    </a>
                                    <ul>
                                        <li>{{ $posts->companyName}}</li>
                                        <li><i class="fas fa-map-marker-alt"></i>{{ $posts->location }}</li>
                                        <li>{{ $posts->salaryRange }}</li>
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
                                <p>{{ $posts->responsibilities }}</p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                               <ul>
                               @foreach(explode("\n", $posts->requirements) as $requirement)
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
                               @foreach(explode("\n", $posts->benefits) as $benefits)
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
                              
                              <li>Location : <span>{{ $posts->location }}</span></li>
                            
                              <li>Vacancy : <span>{{ $posts->vacancies }}</span></li>
                              <li>Job nature : <span>{{ $posts->employmentStatus }}</span></li>
                              <li>Salary :  <span>{{ $posts->salaryRange }}</span></li>
                              <li>Application date : <span>{{ $posts->deadline }}</span></li>
                          </ul>
                         
                         <div>
                            <a href="{{route('apply.job', $posts->id)}}" class="btn btn-primary">Apply</a>
                         </div>
                         

                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>How to Apply</h4>
                           </div>
                             
                              <p>{{ $posts->howToApply }}</p>
                            
                       </div>
                    </div>
                </div>
            </div>
        </div>








@endsection







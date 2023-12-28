<section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        @foreach($create_jobs as  $createjob)
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.html"><img src="{{ asset('storage/' . $createjob->image) }}" alt="" height="80px" width="80px"></a>
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
            </div>
        </section>
        
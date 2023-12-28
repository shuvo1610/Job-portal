@extends('admin.master')

@section('content')


<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">


<!-- resources/views/posts/create.blade.php -->
<form action="{{route('job.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6 job-details">
          <label for="jobTitle">Job Title</label>
          <input type="text" class="form-control" id="jobTitle" name="jobTitle" required>
        </div>
        <div class="col-md-6 job-details">
          <label for="vacancies">No of Vacancies</label>
          <input type="number" class="form-control" id="vacancies" name="vacancies" required>
        </div>
      </div>
      <div class="col-md-6 job-details">
      <label for="">Select Category:</label>
   <select required class="form-control" name="category_id" id="">

    @foreach ($categories as $cat )
    <option value="{{$cat->id}}">{{$cat->name}}</option>
    @endforeach
   
   </select>
</div>
      <div class="row">
        <div class="col-md-6 job-details">
          <label for="companyName">Company Name</label>
          <input type="text" class="form-control" id="companyName" name="companyName" required> 
        </div>
        <div class="col-md-6 job-details">
          <label for="location">Location</label>
          <input type="text" class="form-control" id="location" name="location" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 job-details">
          <label for="responsibilities">Key Responsibilities</label>
          <textarea class="form-control" id="responsibilities" name="responsibilities" required></textarea>
        </div>
</div>
        <div class="row">
        <div class="col-md-12 job-details">
          <label for="requirements">Requirements</label>
          <textarea class="form-control" id="requirements" name="requirements" required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 job-details">
          <label for="benefits">Other Benefits</label>
          <textarea class="form-control" id="benefits" name="benefits" required></textarea>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6 job-details">
          <label for="workingDaysHours">Working Days and Hours</label>
          <input type="text" class="form-control" id="workingDaysHours" name="workingDaysHours" required>
        </div>
        <div class="col-md-6 job-details">
          <label for="employmentStatus">Employment Status</label>
          <select class="form-control" id="employmentStatus" name="employmentStatus" required>
            <option value="Part Time">Part Time</option>
            <option value="Full Time">Full Time</option>
            <option value="Intern">Intern</option>
          </select>
        </div>
        
      </div>
      <div class="row">

      <div class="col-md-6 job-details">
          <label for="salaryRange">Salary Range</label>
          <input type="text" class="form-control" id="salaryRange" name="salaryRange" required>
        </div>

        <div class="col-md-6 job-details">
          <label for="deadline">Deadline</label>
          <input type="date" class="form-control" id="deadline" name="deadline" required>
        </div>


</div>
      
      <div class="row">
       
        <div class="col-md-12 job-details">
          <label for="howToApply">How to Apply</label>
          <textarea class="form-control" id="howToApply" name="howToApply" required></textarea>
        </div>
        </div>
    
  <div class="form-group">
    <label for="">Upload Image: </label>
    <input name="image" type="file" accept="image/*" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>

@endsection
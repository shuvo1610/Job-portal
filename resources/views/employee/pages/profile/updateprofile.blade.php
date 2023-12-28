@extends('employee.master')
@section('content')




<div style="background-color: #fff; padding: 50px; border-radius: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); max-width: 1050px; margin: 0 auto;">
<h1 style="color: #1870AB;">Company Profile Update</h1>
<br><br>
        <form action="{{route('employee.profilestore')}}" method="POST" enctype="multipart/form-data">
           @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="companyName">Company Name *</label>
                        <input type="text" class="form-control" id="companyName" name="companyName" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile Number *</label>
                        <input type="tel" class="form-control" id="mobile" name="mobile" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="website">Website *</label>
                        <input type="url" class="form-control" id="website" name="website" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="facebook">Facebook Url</label>
                        <input type="url" class="form-control" id="facebook" name="facebook">
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter Url</label>
                        <input type="url" class="form-control" id="twitter" name="twitter">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">LinkedIn Url</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin">
                    </div>
                    <div class="form-group">
                        <label for="companySize">Company Size *</label>
                        <select class="form-control" id="companySize" name="companySize">
                            <option value="1-10">1-10</option>
                            <option value="11-50">11-50</option>
                            <option value="51-200">51-200</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Company Details Section -->
            <div class="form-group">
                <label for="tin">TIN *</label>
                <input type="text" class="form-control" id="tin" name="tin" required>
            </div>
            <div class="form-group">
                <label for="tradeLicense">Trade License Number *</label>
                <input type="text" class="form-control" id="tradeLicense" name="tradeLicense" required>
            </div>
          
            <div class="form-group">
                <label for="address">Address *</label>
                <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="description">Description *</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
<br>
            <hr style="border-color: #1870AB;">
            <h4>Add a Contact Person</h4>
            <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="contactFullName">Full Name</label>
            <input type="text" class="form-control" id="contactFullName" name="contactFullName">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="contactDesignation">Designation</label>
            <input type="text" class="form-control" id="contactDesignation" name="contactDesignation">
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="tel" class="form-control" id="contactNumber" name="contactNumber">
                    </div>
</div>
</div>

            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
</div>







@endsection

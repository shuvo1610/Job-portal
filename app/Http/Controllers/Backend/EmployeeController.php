<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\employeeprofile;

class EmployeeController extends Controller
{
public function employeeDashboard(){
    return view('employee.pages.dashboard');
}

public function updateprofile(){
    return view('employee.pages.profile.updateprofile');
}

public function einfostore(Request $request){
    employeeprofile::create(
[
'companyName' => $request->companyName,
'phone' => $request->phone,
'mobile' => $request->mobile,
'email' => $request->email,
'website' => $request->website,
'facebook' => $request->facebook,
'twitter' => $request->twitter,
'linkedin' => $request->linkedin,
'companySize' => $request->companySize,
'tin' => $request->tin,
'tradeLicense' => $request->tradeLicense,
'address' => $request->address,
'description' => $request->description,
'contactFullName' => $request->contactFullName,
'contactDesignation' => $request->contactDesignation,
'contactNumber' => $request->contactNumber,

]
    );
    return redirect()->back();

}

}

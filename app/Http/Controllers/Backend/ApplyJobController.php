<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CreateJob; // Ensure this namespace is correct
use App\Models\JobApplication;
class ApplyJobController extends Controller
{
  
    public function showApplyForm($jobId){
        if(Auth::check()){ 
          
            // $create_jobs = CreateJob::findOrFail($jobId); // Fetch the specific job details
            // return view('frontend.pages.apply', compact('jobId', 'create_jobs'));
            
            $job = CreateJob::findOrFail($jobId);
        return view('frontend.pages.Apply.apply', ['job' => $job]);
        }
        else{
            return redirect('login');
        }
    }

    public function apply(Request $request, $jobId)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone_number' => 'required|string',
            'resume' => 'nullable|mimes:pdf,doc,docx',
        ]);
        // Save the application
        JobApplication::create([
            'user_id' => auth()->user()->id,
            'job_id' => $jobId,
            'company_name' => $request->input('company_name'),
            'job_name' => $request->input('job_name'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'resume' => $request->file('resume') ? $request->file('resume')->store('resumes', 'public') : null,
        ]);

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
    public function viewApplications()
    {
        // Retrieve job applications associated with the authenticated user
        $userApplications = JobApplication::where('user_id', auth()->user()->id)->get();
    
        return view('frontend.pages.Apply.view', compact('userApplications'));
    }

    public function viewCompanyApplications()
{
    $userApplications = JobApplication::whereHas('job', function ($query) {
        $query->where('user_id', auth()->user()->id);
    })->get();

    return view('employee.pages.Application.applied', compact('userApplications'));
}

}

   


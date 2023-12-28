<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\CreateJob;

use Illuminate\Http\Request;
use App\Models\Post;

class RecentJobController extends Controller
{
    public function recentjob(){
        return view('admin.pages.job.createjob');


    }

    public function jobstore(Request $request)
{
    $imagePath = $request->file('image')->store('images', 'public');

    Post::create([
        'jobTitle' => $request->jobTitle,
         'vacancies' => $request->vacancies,
         'category' => $request->category,
        'companyName' => $request->companyName,
        'location' => $request->location,
        'responsibilities' => $request->responsibilities,
        'requirements' => $request->requirements,
        'benefits' => $request->benefits,
        'workingDaysHours' => $request->workingDaysHours,
        'employmentStatus' => $request->employmentStatus,
        'salaryRange' => $request->salaryRange,
        'deadline' => $request->deadline,
        'howToApply' => $request->howToApply,
        'image_path' => $imagePath,
    ]);

    return redirect()->route('recent.joblist');

}

    public function joblist(){

        $posts = Post::all();
        return view('admin.pages.job.list', compact('posts'));
    }


    public function managejob(){
        $create_jobs = CreateJob::paginate(3);
        return view('admin.pages.ManageJob.viewjob', compact('create_jobs'));
    }

    public function JobDetails($id){

        $posts = Post::find($id);
        return view('Frontend.job_details', compact('posts'));
      }

    public function jobApprove($id)
    {
        $user = CreateJob::find($id);
        $user->update(['status' => 'approved']);
        return redirect()->back()->with(['success'=>'Approved successfully.']);
    }

    public function jobReject($id)
    {
        $user = CreateJob::find($id);
        $user->update(['status' => 'rejected']);
        return redirect()->back()->with(['success'=> 'Rejected successfully.']);
    }
}

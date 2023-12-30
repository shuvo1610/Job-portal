<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Quizze;
use Illuminate\Http\Request;
use App\Models\CreateJob;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createjob()
    {
        $categories = Category::all();
        return view('employee.pages.Job.createjob', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            CreateJob::create([
                'jobTitle' => $request->jobTitle,
                'user_id' => auth()->user()->id,
                'vacancies' => $request->vacancies,
                'category_id' => $request->category_id,
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
                'image' => $imagePath,
            ]);
            return redirect()->back()->with(['success' => 'Job created successfully!']);
        }

        return redirect()->back()->with(['error' => 'No image uploaded!']);
    }

    public function view()
    {
        $create_jobs = CreateJob::where('user_id', auth()->user()->id)->get();

        return view('employee.pages.Job.viewjob', compact('create_jobs'));
    }


    public function create_quiz()
    {
        $create_jobs = CreateJob::where('user_id', auth()->user()->id)->get();
        return view('employee.evaluation.job_list', compact('create_jobs'));
    }

    public function create_mcq($id){
        $circular = CreateJob::where('id',$id)->first();
        $data = Quizze::where('job_id', $circular->id)->get();
        return view('employee.evaluation.create', compact('data', 'circular'));
    }

    public function store_mcq(Request $request,$id){
        $request->validate([
            'question' => 'required|string|max:255',
            'option_a' => 'required|string|max:255',
            'option_b' => 'required|string|max:255',
            'ans'      => 'required|string|max:255',
        ]);


        $quizzes                 = new Quizze();
        $quizzes->question       = $request->question;
        $quizzes->job_id         = $id;
        $quizzes->option_a       = $request->option_a;
        $quizzes->option_b       = $request->option_b;
        $quizzes->option_c       = $request->option_c;
        $quizzes->option_d       = $request->option_d;
        $quizzes->ans            = $request->ans;
        $quizzes->save();

        return redirect()->back()->with('success', 'Quiz created successfully.');
    }


}

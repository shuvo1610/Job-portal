<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Assessment;
use App\Models\Exam;
use App\Models\Quizze;
use Illuminate\Http\Request;
use App\Models\CreateJob;
use App\Models\Category;
class JobpageController extends Controller
{
    public function Job($categoryId = null) {
        $query = CreateJob::query();

        if ($categoryId) {
            $query->where('category_id', $categoryId);
        }

        $create_jobs = $query->get();

        // Retrieve categories
        $categories = Category::all();

        return view('Frontend.Job', compact('create_jobs', 'categories'));
    }



    public function jobpost($id){
        $create_jobs = CreateJob::find($id);
        return view('Frontend.job_post', compact('create_jobs'));
     }

    public function test($id)
    {
        $job =  CreateJob::find($id);
        $data = [
            'create_jobs' => $job,
            'quizzes' => $job->quizzes,
        ];
        return view('Frontend.online_test', $data);
    }

    public function submitTest($id, Request $request)
    {
        try {
            $quizzes = Quizze::where('job_id', $id)->count();
            $data = $request->all();
            $rows = [];
            $now = now();
            $correct = 0;
            foreach ($data['answer'] as $key => $answer) {
                $correct_ans = $request->correct_ans[$key];

                $rows[] = [
                    'create_job_id' => $id,
                    'quiz_id' => $request->quiz_id[$key],
                    'question' => $request->questions[$key],
                    'answer' => $correct_ans,
                    'given_answer' => $answer,
                    'is_correct' => $answer == $correct_ans ? 1 : 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ];
                if ($answer == $correct_ans) {
                    $correct++;
                }
            }
            if (count($rows) > 0) {
                Exam::insert($rows);
                Assessment::create([
                    'user_id' => auth()->id(),
                    'create_job_id' => $id,
                    'total_marks' => $quizzes,
                    'obtain_marks' => $correct,
                ]);
            }
            return redirect()->route('test.result', $id);
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function result($id)
    {
        $data = [
            'assessment' => Assessment::where('create_job_id', $id)->where('user_id', auth()->id())->latest()->first(),
        ];
        return view('Frontend.result', $data);
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CreateJob;

class HomepageController extends Controller
{
    public function home(){
        $create_jobs = CreateJob::where('status','approved')->latest()->limit(4)->get();

        return view('Frontend.home', compact('create_jobs'));
    }



}

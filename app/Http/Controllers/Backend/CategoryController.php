<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function list()
    {

        $categories=Category::all();
       return view('admin.pages.category.list',compact('categories'));
    }


    public function createForm()
    {

        return view('admin.pages.category.form');
    }

    public function store(Request $request)
    {


        $validate=Validator::make($request->all(),
        [
            'category_name'=>'required',
            'category_description'=>'required',
        ]);

        if($validate->fails())
        {

            return redirect()->back();
        }

            Category::create([
                'name'=>$request->category_name,
                'description'=>$request->category_description
            ]);

            return redirect()->route('category.list')->with(['success' => 'Create successful']);



    }

}

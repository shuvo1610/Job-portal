<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function loginForm(){
        return view('admin.pages.login');
    }


    public function loginPost(Request $request)
    {
            $val=Validator::make($request->all(),
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
            ]);

            if($val->fails())
            {
                return redirect()->back()->withErrors($val);
            }

            $credentials=$request->except('_token');
            // $credentials=$request->only('email','password');

            // if(auth()->attempt($credentials))

            $login=auth()->attempt($credentials);
            if($login)
            {
               return redirect()->route('dashboard')->with(['success' => 'Admin login successful']);
            }
           return redirect()->back()->with(['error' =>'invalid user email or password']);



    }


    public function logout()
    {

        auth()->logout();
        return redirect()->route('admin.login');

    }


    public function list(){

        $users=User::where('user_type','user')->get();
        return view('admin.pages.users.list',compact('users'));
    }
    public function companyList(){

        $users=User::where('user_type','company')->get();
        return view('admin.pages.users.company_list',compact('users'));
    }

    public function createForm()
    {
        return view('admin.pages.users.create');
    }


    public function store(Request $request)
    {
        $validate=Validator::make($request->all(),[
            'user_name'=>'required',
            'role'=>'required',
            'user_email'=>'required|email',
            'user_password'=>'required|min:6',
        ]);

        if($validate->fails())
        {
            return redirect()->back()->with('myError',$validate->getMessageBag());
        }

        $fileName=null;
        if($request->hasFile('user_image'))
        {
            $file=$request->file('user_image');
            $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

            $file->storeAs('/uploads',$fileName);

        }

        User::create([
            'name'=>$request->user_name,
            'role'=>$request->role,
            'image'=>$fileName,
            'email'=>$request->user_email,
            'password'=>bcrypt($request->user_password),
        ]);

        return redirect()->back()->with('message','User created successfully.');
    }

    public function approve($id)
    {
        $user = User::find($id);
        $user->update(['status' => 'approved']);
        return redirect()->back()->with(['success'=>'User approved successfully.']);
    }

    public function reject($id)
    {
        $user = User::find($id);
        $user->update(['status' => 'rejected']);
        return redirect()->back()->with(['success'=> 'User rejected successfully.']);
    }




}

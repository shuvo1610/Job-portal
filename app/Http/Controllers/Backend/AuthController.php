<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function registration()
    {
        return view('auth.reg');
    }

    public function store(Request $request){
        if ($request->user_type == 'company') {
            $rules = [
                'username' => 'required|string|max:255',
                'company_name' => 'required|string|max:255',
                'company_address' => 'required|string|max:255',
                'address' => 'nullable|string|max:255',
            ];
        } else {
            $rules = [
                'username' => 'required|string|max:255',
                'company_name' => 'nullable|string|max:255',
                'company_address' => 'nullable|string|max:255',
            ];
        }
        $commonRules = [
            'email' => 'required|email|unique:users|max:255',
            'address' => 'required|string|max:255',
            'password' => 'required|min:6',
            'user_type' => 'required',
        ];

        $rules = array_merge($commonRules, $rules);
        $request->validate($rules);

        try {
            User::create([
                'name'=> $request->username,
                'email'=> $request->email,
                'company_name'=> $request->company_name,
                'company_address'=> $request->company_address,
                'address'=> $request->address,
                'role'=> 'user',
                'password'=> bcrypt($request->password),
                'user_type'=> $request->user_type,
            ]);

            return redirect('/login')->with('success', 'User created successfully.');;
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'User creation failed. Please try again.');
        }
    }


    public function loginPage()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            // User not found
            return redirect()->route('login')->with('error', 'User not found');
        }

        if ($user->status == 'pending' || $user->status == 'rejected') {
            return back()->with(['error' => 'Your account has not been approved']);
        }

        if (Auth::attempt($credentials)) {
            if ($user->user_type === 'user') {
                // Redirect to the admin dashboard
                return redirect()->route('homepage')->with(['success' => 'User login successful']);
            } elseif ($user->user_type === 'company') {
                // Redirect to the company dashboard
                return redirect()->route('employee.dashboard')->with(['success' => 'Employee login successful']);
            }
        }

        // If authentication fails, return to the login form
        return redirect()->route('login')->with('error', 'Login failed');
    }


    public function logout()
    {
        Auth::logout();

        // Redirect to the login page after logout
        return redirect()->route('homepage');
    }

    public function profile()
    {
        return view('frontend.pages.profile');
    }

}



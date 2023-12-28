<?php


namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resume;
use Illuminate\Support\Facades\Auth;
class ResumeController extends Controller
{
    public function resume(){
     

        $user = Auth::user();

        // Check if the user has a resume
        if ($user && $user->resume) {
            // If the user has a resume, fetch the data
            $resume = $user->resume;
        } else {
            // If the user doesn't have a resume, create an empty resume object
            $resume = new Resume();
        }
        return view('Frontend.pages.resume.resume', compact('resume') );
    }

    public function edit()
    {
        return view('Frontend.pages.resume.Edit');
    }

    public function update(Request $request)
{
    // Save the application
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('images', 'public');

        $user = Auth::user();

        $resume = new Resume([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
            'contact' => $request->contact,
            'image' => $imagePath,
            'objective' => $request->objective,
            'experience' => $request->experience,
            'qualification' => $request->qualification,
            'skill' => $request->skill,
            'language' => $request->language,
            'references' => $request->references,
        ]);

        // Associate the resume with the authenticated user
        $user->resume()->save($resume);

        // Redirect to the show method to display the user's resume
        return redirect()->route('resume')->with('success', 'Resume created successfully!');
    }

    return redirect()->back()->with('error', 'Error in form submission!');
}

}





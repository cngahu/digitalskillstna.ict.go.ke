<?php

namespace App\Http\Controllers;

use App\Models\AgeGroup;
use App\Models\EducationLevel;
use App\Models\Gender;
use App\Models\Invoice;
use App\Models\PrintAdvert;
use App\Models\Release;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function BackendDashboard(){

        $totalSubmissions = Submission::count();

        //age ranges
        $ageRanges = AgeGroup::all(); // Assuming you have an AgeRange model
        $submissionsByAge = [];

        foreach ($ageRanges as $ageRange) {
            $submissionsByAge[$ageRange->name] = Submission::where('age_range', $ageRange->id)->count();
        }

        //genders

        $submissionsByGender = DB::table('submissions')
            ->select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get()
            ->keyBy('gender'); // This allows easy access by gender ID

        $genderCounts = [
            'female' => $submissionsByGender->get(1)->total ?? 0, // Assuming 1 is for female
            'male' => $submissionsByGender->get(2)->total ?? 0,   // Assuming 2 is for male
            'prefer_not_to_say' => $submissionsByGender->get(3)->total ?? 0 // Assuming 3 is for prefer not to say
        ];


//education levels
        $educationLevels = EducationLevel::all();
        $submissionsByEducation = DB::table('submissions')
            ->select('education_level', DB::raw('count(*) as total'))
            ->groupBy('education_level')
            ->get()
            ->keyBy('education_level');

        $educationCounts = [];
        foreach ($educationLevels as $level) {
            $educationCounts[$level->id] = $submissionsByEducation->get($level->id)->total ?? 0;
        }








        // Retrieve gender counts from the genders table
        $genders = Gender::select('id', 'name')->get()->pluck('name', 'id');

//        $submissionsByGender = Submission::select('gender', DB::raw('count(*) as total'))->groupBy('gender')->pluck('total', 'gender');

        $submissionsByGender = Submission::select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->pluck('total', 'gender');

        $submissionsByEducationLevel = Submission::select('education_level', DB::raw('count(*) as total'))->groupBy('education_level')->pluck('total', 'education_level');
        $recentSubmissions = Submission::orderBy('created_at', 'desc')->take(5)->get();


        $digitalTransformation = Submission::sum('digital_transformation');
        // Prepare data for display
        $genderCounts = [
            'female' => $submissionsByGender[1] ?? 0, // Assuming 1 = Female
            'male' => $submissionsByGender[2] ?? 0,   // Assuming 2 = Male
            'prefer_not_to_say' => $submissionsByGender[3] ?? 0 // Assuming 3 = Prefer Not to Say
        ];

        $national=Submission::where('level_of_government','national')->count();
        $county=Submission::where('level_of_government','county')->count();
        return view('backend.index', compact('county','national','educationCounts', 'educationLevels','genderCounts','ageRanges','submissionsByAge','digitalTransformation','genderCounts','totalSubmissions','submissionsByGender','submissionsByEducationLevel','recentSubmissions'));
    }


    public function NewsDashboard()
    {
        return view('backend.news_index');

    }
    public function AdminProfile(){
        $id=Auth::user()->id;
        $adminData=User::find($id);

        return view('backend.admin_profile_view',compact('adminData'));
    }

    public function AdminProfileStore(Request $request){
        $id=Auth::user()->id;
        $data=User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;


        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



    public function AdminLogin(){
        return view('backend.admin_login');
    } // End Mehtod

 public function AdminChangePassword(){

        return view('backend.admin_change_password');
 }

    public function AdminUpdatePassword(Request $request){
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!");
        }

        // Update The new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", " Password Changed Successfully");

    } // End Mehtod



    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    } // End Mehtod
}

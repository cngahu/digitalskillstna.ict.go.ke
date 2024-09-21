<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class FrontendController extends Controller
{
    public function FrontendDashboard(){

        return view('frontend.index');
    }

    public function FrontendLogin(){
        return view('frontend.frontend_login');
    } // End Mehtod

    public function FrontendProfile(){

        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('frontend.frontend_profile_view',compact('vendorData'));

    } // End Mehtod

    public function FrontendProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;



        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/frontend_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/frontend_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'User Profile Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    }

    public function FrontendChangePassword(){
        return view('frontend.frontend_change_password');
    }

    public function FrontendUpdatePassword(Request $request){
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



    public function FrontendDestroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/frontend/login');
    } // End Mehtod
}

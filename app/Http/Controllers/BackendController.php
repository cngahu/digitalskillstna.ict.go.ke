<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\PrintAdvert;
use App\Models\Release;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class BackendController extends Controller
{
    public function BackendDashboard(){
        $releases = Release::with(['invoices' => function($query) {
            $query->select('invoices.id', 'invoices.release_id', 'amount', 'payment_status');
        }])->get();

        $releases = $releases->map(function ($release) {
            $totalAmount = $release->invoices->sum('amount');
            $paidAmount = $release->invoices->where('payment_status', 'Paid')->sum('amount');
            $pendingAmount = $totalAmount - $paidAmount;

            return [
                'release' => $release,
                'totalAmount' => $totalAmount,
                'paidAmount' => $paidAmount,
                'pendingAmount' => $pendingAmount,
            ];
        });
        $totala = Invoice::sum('amount');
        $totalpaid = Invoice::where('payment_status','Paid')->sum('amount');
        $prints=PrintAdvert::count();
        return view('backend.index',compact('releases','totala','prints','totalpaid'));
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

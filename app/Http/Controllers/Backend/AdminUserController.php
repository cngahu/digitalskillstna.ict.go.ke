<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Jobs\SendUserCreationNotification;
use App\Models\Entity;
use App\Models\Ministry;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AdminUserController extends Controller
{
    //

    public function UserView(){
        $users=User::whereDoesntHave('roles', function($query) {
            $query->where('name', 'Super Admin');
        })->latest()->get();;
        return view('backend.user.all_users',compact('users'));
    }

    public function getStateDepartments(Request $request)
    {
        $stateDepartments = StateDepartment::where('ministry_id', $request->ministry_id)->get();
        return response()->json($stateDepartments);
    }

    public function UserAdd(){
        $ministry=Ministry::latest()->get();
        $roles=Role::get();
        return view('backend.user.add_user',compact('ministry','roles'));
    }

    public function entityUserAdd(){
        $entity=Entity::latest()->get();
        $roles = Role::whereIn('name', ['Requestor', 'Approver','News Agent'])->get();

        return view('backend.user.entity_user',compact('entity','roles'));
    }



    public function UserStore(Request $request){

        $validatedDate=$request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|exists:roles,name',  // Validate that the role exists in the roles table
            'email' => 'required|email|unique:users,email|max:255',  // Validate email and uniqueness in the users table
            'payrollnumber' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
//            'ministry_id' => 'required|integer|exists:ministries,id',
        ]);


        $data= new User();

        $data->name= $request->name;
//        $data->middle_name= $request->middle_name;
//        $data->other_names= $request->other_names;
        $data->email= $request->email;
        $data->phone= $request->phone;
//        $data->ministry_id= $request->ministry_id;
//        $data->statedepartment_id= $request->state_department_id;

//        $data->idnumber= $request->idnumber;
        $data->payrollnumber= $request->payrollnumber;
//        $data->role= $request->role;

        $code= rand(0000,9999);
        $data->email_verified_at= Carbon::now();
        $data->created_at= Carbon::now();
        $data->code= $code;
        $data->user_id= Auth::user()->id;
        // $data->password= bcrypt($request->password);
        $data->password= bcrypt($code);



        $data->save();
        $data->assignRole($request->role);

        $notification=array(
            'message'=>'User Inserted Successfully',
            'alert-type'=>'success',
        );
        return redirect()->route('all.adminuser')->with($notification);


    }

    public function entityUserStore(Request $request){

        $validatedDate=$request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|exists:roles,name',  // Validate that the role exists in the roles table
            'email' => 'required|email|unique:users,email|max:255',  // Validate email and uniqueness in the users table
            'payrollnumber' => 'nullable|string|max:255',
            'phone' => 'required|string|max:20',
            'entity' => 'required|integer|exists:entities,id',
        ]);


        $data= new User();

        $data->name= $request->name;
        $data->email= $request->email;
        $data->phone= $request->phone;

        $data->payrollnumber= $request->payrollnumber;
        $data->entity_id= $request->entity;

        $code= rand(0000,9999);
        $data->email_verified_at= Carbon::now();
        $data->created_at= Carbon::now();
        $data->code= $code;
        $data->user_id= Auth::user()->id;
        // $data->password= bcrypt($request->password);
        $data->password= bcrypt($code);
        $data->must_change_password= true;



        $data->save();
        $data->assignRole($request->role);
//        dd($data);
//        SendUserCreationNotification::dispatch($validatedDate['email'], $code);
        $notification=array(
            'message'=>'User Inserted Successfully',
            'alert-type'=>'success',
        );
        return redirect()->route('all.adminuser')->with($notification);


    }



    public function  UserEdit($id)
    {

        $useredit = User::find($id);
        $ministry = Ministry::latest()->get();
        return view('backend.user.view_edit', compact('useredit', 'ministry'));

    }


    public function UserUpdate(Request $request, $id){


        $data= User::find($id);

        $data->middle_name= $request->middle_name;
        $data->other_names= $request->other_names;
        $data->phone= $request->phone;
        $data->ministry_id= $request->ministry_id;
        $data->idnumber= $request->idnumber;
        $data->payrollnumber= $request->payrollnumber;
        $data->role= $request->role;
        $data->user_id= Auth::user()->id;
        $code= rand(0000,9999);
        $data->code= $code;



        $data->save();

        $notification=array(
            'message'=>'User Updated Successfully',
            'alert-type'=>'success',
        );
        return redirect()->route('all.adminuser')->with($notification);

    }

    public function StakeholderView(){

        $stakeholder=Stakeholder::all();
        return view('backend.user.all_stakeholders',compact('stakeholder'));
    }



}

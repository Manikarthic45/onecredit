<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App;
use Session;
use Route;
use DB;
use App\Users;
use App\Admin;
use App\Models\Customer;
use App\Models\Customer_notification;
use App\Models\Retail;
use App\Models\Retail_notification;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Form;
use Illuminate\Support\Facades\Html;


class AuthController extends Controller
{

    public function index(Request $request)
    {
        return view('auth.index');
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function chkuser(Request $request)
    {
        $rules = array(
            'username'          => 'required',
            'pwd'                => 'required',
        );

        $fieldNames = array(
            'username'          => 'User Name',
            'pwd'                => 'Password',

        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            echo $usercnt = DB::table('superadmins')->where('username', $request->username)->where('password', $request->pwd)->count();

            if ($usercnt > 0) {
                $adminid = DB::table('superadmins')->where('username', $request->username)->where('password', $request->pwd)->first()->id;
                session()->put('username', $request->username);
                $username = session()->get('username');
                session()->put('adminid', $adminid);
                $adminid = session()->get('adminid');
                $request->session()->flash('success', 'Login Succeesfully');
                return redirect('Dashboard');
            } else {
                $request->session()->flash('failure', 'Login Succeesfully');
                return redirect('/');
            }
        }
    }
    public function logout(Request $request)
    {
        session_abort();
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
    public function Dashboard()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Retail Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();

        //Customers Counts...
        $total_customers = Customer::count();
        $approved_customers = Customer::where('status', 1)->count();
        $pending_customers = Customer::where('status', 0)->count();
        $rejected_customers = Customer::where('status', 2)->count();

        //Retails Counts...
        $total_retails = Retail::count();
        $approved_retails = Retail::where('status', 1)->count();
        $pending_retails = Retail::where('status', 0)->count();
        $rejected_retails = Retail::where('status', 2)->count();


        $adminid = session()->get('adminid');
        if ($adminid != "") {

            return view('Auth.Dashboard', compact('total_retails', 'approved_retails', 'total_customers', 'pending_retails', 'rejected_retails', 'approved_customers', 'pending_customers', 'rejected_customers', 'notifications', 'count', 'customer_notifications', 'customer_count'));
        } else {
            return redirect('/');
        }
    }
    public function changepw(Request $request)
    {
        $adminid =  $_REQUEST['adminid'];
        $admincode =  $_REQUEST['admincode'];
        $pw =  $_REQUEST['pw'];
        $update = DB::update('update admin set `username`="' . $admincode . '",`password`="' . $pw . '" where id =?', [$adminid]);
        return $update;
    }
    public function addnew(Request $request)
    {
        return view('auth.addnew');
    }
    public function addnewadmin(Request $request)
    {
        $rules = array(
            'username'            => 'required|min:8|numeric|unique:admin',
            'password'             => 'required|unique:admin',
        );

        $fieldNames = array(
            'username'             => 'Employeecode',
            'password'              => 'Password',
        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $Admin = new Admin();
            $Admin->username = $request->username;
            $Admin->password = $request->password;
            $Admin->status = "";
            $Admin->save();
            $request->session()->flash('success', 'Admin Added Successfully!!');
            return redirect('addadmin');
        }
    }
    public function adminlist(Request $request)
    {
        $adminlist = Admin::orderBy('id', 'asc')->get();
        return view('auth.adminindex', compact('adminlist'));
    }
    public function changestatusadmin(Request $request)
    {
        $adminid =  $_REQUEST['adminid'];
        $status = DB::table('admin')->where('id', $adminid)->first()->status;
        if ($status == "") {
            $x = "0";
        }
        if ($status == "0") {
            $x = "";
        }
        DB::table('admin')->where('id', $adminid)->update(array('status' => $x));
        return $status;
    }
    public function editadmin(Request $request, $id)
    {
        $adminrecord   =  Admin::where('id', $id)->get();
        return view('auth.editadmin', compact('adminrecord'));
    }
    public function editoldadmin(Request $request)
    {
        $rules = array(
            'username'            => 'required|min:8|numeric',
            'password'             => 'required',
        );

        $fieldNames = array(
            'username'             => 'Employeecode',
            'password'              => 'Password',
        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $id = $request->plantid;
            $Admin = new Admin();
            $Admin::where('id', $id)->update(['username' => $request->username, 'password' => $request->password, 'status' => ""]);

            $request->session()->flash('success', 'Admin Updated Successfully!!');
            return redirect('adminlist');
        }
    }

    //Admin Creation 

    public function admin_creation(Request $request)
    {

        $request->validate([
            'admin_name' => 'required',
            'email' => 'required|unique:admin,email',
            'phone_number' => 'required|unique:admin,phone_number',
            'password' => 'required',
        ]);

        $admin = new Admin();
        $admin->username = $request->admin_name;
        $admin->email = $request->email;
        $admin->phone_number = $request->phone_number;
        $admin->password = $request->password;
        $admin->accounts = $request->accounts;
        $admin->emi_process = $request->emi_process;
        $admin->customers = $request->customers;
        $admin->retails = $request->retail;
        $admin->admin_creation = $request->admin_creation;
        $admin->role = "Admin";
        $admin->status = 0;
        $admin->save();

        $request->session()->flash('working', 'Admin Added Successfully');
        return redirect('admin');
    }

    //Admin Updation 

    public function admin_updation(Request $request)
    {
        $admin =  Admin::where('id', $request->id)->first();
        $admin->username = $request->admin_name;
        $admin->email = $request->email;
        $admin->phone_number = $request->phone_number;
        $admin->password = $request->password;
        $admin->accounts = $request->accounts;
        $admin->emi_process = $request->emi_process;
        $admin->customers = $request->customers;
        $admin->retails = $request->retail;
        $admin->admin_creation = $request->admin_creation;
        $admin->role = "Admin";
        $admin->status = 0;
        $admin->save();

        $request->session()->flash('updated', 'Admin Added Successfully');
        return redirect('edit_admin' . $request->id);
    }
}

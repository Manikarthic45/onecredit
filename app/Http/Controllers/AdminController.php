<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Models\Admin as ModelsAdmin;
use App\Models\Customer_notification;
use App\Models\Retail_notification;

class AdminController extends Controller
{
    public function admin_page()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();
        $admin = Admin::where('status', 0)->get();
        return view('Admin.admin', compact('notifications', 'count', 'customer_notifications', 'customer_count', 'admin'));
    }

    public function create()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();
        return view('Admin.create', compact('notifications', 'count', 'customer_notifications', 'customer_count'));
    }

     //Edit Admin Details

     public function edit_admin($id)
     {

        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();

        $get_admin_details = Admin::where('id', $id)->first();
        
         return view('Admin.edit_admin_detail', compact('get_admin_details','notifications', 'count', 'customer_notifications', 'customer_count'));
     }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Customer_notification;
use App\Models\Retail;
use App\Models\Retail_notification;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //Customer Register Function
    public function customer_register(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'email' => 'required|unique:customers,email',
            'residential_address' => 'required',
            'permanent_address' => 'required',
            'mobile_number' => 'required|unique:customers,mobile_number',
            'alternate_mobile_number' => 'required|unique:customers,alternate_mobile_number',
            'profile_photo' => 'required',
            'profession' => 'required',
            'father_name' => 'required',
            'martial_status' => 'required',
            'aadhar_card' => 'required',
            'pan_card' => 'required',
        ]);

        //Customer Register Conditions
        $customer = new Customer();
        $customer->customer_id = $this->getCustomerId();
        $customer->customer_name = $request->customer_name;
        $customer->email = $request->email;
        $customer->residential_address = $request->residential_address;
        $customer->permanent_address = $request->permanent_address;
        $customer->mobile_number = $request->mobile_number;
        $customer->alternate_mobile_number = $request->alternate_mobile_number;

        $var = 'upload/';
        if ($profile_photo = $request->file('profile_photo')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $profile_photo->getClientOriginalExtension();
            $profile_photo->move($var, $postImage);
            $final_profile_photo = "$var$postImage";
        } else {
            $final_profile_photo = $request->profile_photo;
        }

        $customer->profile_photo = $final_profile_photo;
        $customer->profession = $request->profession;
        $customer->father_name = $request->father_name;
        $customer->martial_status = $request->martial_status;
        $customer->aadhar_card = $request->aadhar_card;
        $customer->pan_card = $request->pan_card;
        $customer->status = 0;
        $customer->save();


        //Notification Added Conditions
        $customer_notification = new Customer_notification();
        $customer_notification->customer_id = $customer->id;
        $customer_notification->notification = "$customer->customer_name is request for approval";
        $customer_notification->status = 0;
        $customer_notification->save();


        if ($customer) {
            return response()->json(['success' => 200, 'data' => $customer, 'mesasage' => 'Registered Successfully']);
        } else {
            return response()->json(['success' => 404, 'mesasage' => 'Registered Failed']);
        }
    }

    //Automatic Customer ID Generate
    public function getCustomerId()
    {
        $latestAstro = Customer::orderBy('created_at', 'DESC')->first();
        if ($latestAstro == null) {
            $customer_id = 'CUST' . str_pad("0" + 1, 3, "0", STR_PAD_LEFT);
        } else {
            $customer_id = $latestAstro->customer_id;
            $customer_id = trim($customer_id, 'CUST');
            $customer_id = 'CUST' . str_pad($customer_id + 1, 3, "0", STR_PAD_LEFT);
        }
        return $customer_id;
    }

    //Customer Login
    public function customer_login(Request $request)
    {
        $login = Customer::where('email', $request->email)->where('password', $request->password)->first();
        if ($login != null) {
            if ($login->status == "1") {
                return response()->json(['success' => 200, 'data' => $login, 'mesasage' => 'Login Successfully']);
            } else if ($login->status == "2") {
                return response()->json(['success' => 404, 'mesasage' => 'Your account has been rejected']);
            } else if ($login->status == "0") {
                return response()->json(['success' => 404, 'mesasage' => 'Your account has been waiting for approval']);
            }
        } else {
            return response()->json(['success' => 404, 'mesasage' => 'Username & Password did not match']);
        }
    }

    //Get Particular Data Based on ID
    public function getCustomerdata(Request $request)
    {
        $customer_data = Retail::where('id', $request->id)->first();
        if ($customer_data != null) {
            return response()->json(['success' => 200, 'data' => $customer_data, 'mesasage' => 'Data get Successfully']);
        } else {
            return response()->json(['success' => 404, 'mesasage' => ' Failed']);
        }
    }

    //Customer Update Api
    public function customerupdate(Request $request)
    {
        $customer = Customer::where('id', $request->id)->first();
        $customer->customer_name = $request->customer_name;
        $customer->email = $request->email;
        $customer->residential_address = $request->residential_address;
        $customer->permanent_address = $request->permanent_address;
        $customer->mobile_number = $request->mobile_number;
        $customer->alternate_mobile_number = $request->alternate_mobile_number;

        $var = 'upload/';
        if ($profile_photo = $request->file('profile_photo')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $profile_photo->getClientOriginalExtension();
            $profile_photo->move($var, $postImage);
            $final_profile_photo = "$var$postImage";
        } else {
            $final_profile_photo = $request->profile_photo;
        }

        $customer->profile_photo = $final_profile_photo;
        $customer->profession = $request->profession;
        $customer->father_name = $request->father_name;
        $customer->martial_status = $request->martial_status;

        $var = 'upload/';
        if ($aadhar_card = $request->file('aadhar_card')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $aadhar_card->getClientOriginalExtension();
            $aadhar_card->move($var, $postImage);
            $final_aadhar_card = "$var$postImage";
        } else {
            $final_aadhar_card = $request->aadhar_card;
        }

        $customer->aadhar_card = $final_aadhar_card;

        $var = 'upload/';
        if ($pan_card = $request->file('pan_card')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $pan_card->getClientOriginalExtension();
            $pan_card->move($var, $postImage);
            $final_pancard = "$var$postImage";
        } else {
            $final_pancard = $request->pan_card;
        }

        $customer->pan_card = $final_pancard;
        $customer->eb_bill = $request->eb_bill;
        $customer->gas_bill = $request->gas_bill;
        $customer->employee_id = $request->employee_id;
        $customer->reference_name = $request->reference_name;
        $customer->reference_number = $request->reference_number;
        $customer->mobile_brand = $request->mobile_brand;
        $customer->mobile_model = $request->mobile_model;
        $customer->mobile_ram = $request->mobile_ram;
        $customer->mobile_storage = $request->mobile_storage;
        $customer->mobile_imei_number_1 = $request->mobile_imei_number_1;
        $customer->mobile_imei_number_2 = $request->mobile_imei_number_2;
        $customer->box_contents = $request->box_contents;
        $customer->bill_date = $request->bill_date;
        $customer->shop_warranty = $request->shop_warranty;
        $customer->mobile_details = $request->mobile_details;
        $customer->device_cost = $request->device_cost;
        $customer->interest = $request->interest;
        $customer->total_re_payment = $request->total_re_payment;
        $customer->down_payment = $request->down_payment;
        $customer->insurance = $request->insurance;
        $customer->processing_fees = $request->processing_fees;
        $customer->no_of_months = $request->no_of_months;
        $customer->emi_per_months = $request->emi_per_months;


        $var = 'upload/';
        if ($customer_signature = $request->file('customer_signature')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $customer_signature->getClientOriginalExtension();
            $customer_signature->move($var, $postImage);
            $final_customer_signature = "$var$postImage";
        } else {
            $final_customer_signature = $request->customer_signature;
        }

        $customer->customer_signature = $final_customer_signature;
        $customer->password = $request->password;
        $customer->status = 0;
        $customer->save();

        if ($customer) {
            return response()->json(['Success' => 200, 'data' => $customer, 'message' => 'Update successfully']);
        } else {
            return response()->json(['Success' => 404, 'message' => 'update Failed']);
        }
    }

    //Web Customer Update 
    public function customer_update(Request $request)
    {
        if ($request->profile_photo != "") {
            $customer = Customer::where('id', $request->id)->first();
            $customer->customer_name = $request->customer_name;
            $customer->email = $request->email;
            $customer->residential_address = $request->residential_address;
            $customer->permanent_address = $request->permanent_address;
            $customer->mobile_number = $request->mobile_number;
            $customer->alternate_mobile_number = $request->alternate_mobile_number;

            $var = 'upload/';
            if ($profile_photo = $request->file('profile_photo')) {
                $postImage = date('YmdHis') . "." . uniqid() . "." . $profile_photo->getClientOriginalExtension();
                $profile_photo->move($var, $postImage);
                $final_profile_photo = "$var$postImage";
            } else {
                $final_profile_photo = $request->profile_photo;
            }

            $customer->profile_photo = $final_profile_photo;
            $customer->profession = $request->profession;
            $customer->father_name = $request->father_name;
            $customer->martial_status = $request->martial_status;
            $customer->aadhar_card = $request->aadhar_card;
            $customer->pan_card = $request->pan_card;
            $customer->save();

            $request->session()->flash('updated', 'Customer Updated Successfully');
            return redirect('edit_approved_customer' . $request->id);
        } else {
            $customer = Customer::where('id', $request->id)->first();
            $customer->customer_name = $request->customer_name;
            $customer->email = $request->email;
            $customer->residential_address = $request->residential_address;
            $customer->permanent_address = $request->permanent_address;
            $customer->mobile_number = $request->mobile_number;
            $customer->alternate_mobile_number = $request->alternate_mobile_number;
            $customer->profession = $request->profession;
            $customer->father_name = $request->father_name;
            $customer->martial_status = $request->martial_status;
            $customer->aadhar_card = $request->aadhar_card;
            $customer->pan_card = $request->pan_card;
            $customer->save();

            $request->session()->flash('updated', 'Customer Updated Successfully');
            return redirect('edit_approved_customer' . $request->id);
        }
    }



    //Get Customer Details Functions
    public function get_customer_details($id)
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();
        $get_retail_details = Retail::where('id', $id)->first();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();
        $get_customer_details = Customer::where('id', $id)->first();

        return view('notification.customerapproval', compact('get_customer_details', 'customer_notifications', 'customer_count', 'notifications', 'count', 'get_retail_details'));
    }

    //Approval For Customer Functionc
    public function approved_customer(Request $request, $id)
    {
        $customer = Customer::where('id', $id)->update(['status' => 1]);
        $customer_notifications = Customer_notification::where('customer_id', $id)->update(['status' => 1]);

        $request->session()->flash('approved', 'Approved Successfully');
        return redirect('Dashboard');
    }

    //Customer reject Function
    public function rejected_customer(Request $request, $id)
    {
        $customer = Customer::where('id', $id)->update(['status' => 2]);
        $customer_notifications = Customer_notification::where('customer_id', $id)->update(['status' => 2]);

        $request->session()->flash('rejected', 'Rejected Successfully');

        return redirect('Dashboard');
    }

    //Approved Customer Datas...
    public function customer_approved()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();


        $customer_approved = Customer::where('status', 1)->get();

        return view('customer.approved', compact('customer_approved', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Rejected customer Datas...
    public function customer_rejected()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();


        $customer_rejected = Customer::where('status', 2)->get();
        return view('customer.rejected', compact('customer_rejected', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Pending customer Datas...
    public function customer_pending()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();


        $customer_pending = Customer::where('status', 0)->get();
        return view('customer.pending', compact('customer_pending', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Edit Customer For Admin
    public function edit_approved_customer($id)
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();

        $get_customer_details = Customer::where('id', $id)->first();

        return view('customer.edit_approved_customer', compact('get_customer_details', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //View Customer For Admin
    public function view_approved_customer($id)
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();

        $get_customer_details = Customer::where('id', $id)->first();

        return view('customer.view_approved_customer', compact('get_customer_details', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customer_notification;
use App\Models\Retail;
use App\Models\Retail_notification;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use LDAP\Result;

class RetailController extends Controller
{
    //Retail Register Function
    public function retailregister(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'shop_name' => 'required',
            'shop_address' => 'required',
            'no_of_branches' => 'required',
            'mobile_number' => 'required|unique:retails,mobile_number',
            'alternate_mobile_number' => 'required|unique:retails,alternate_mobile_number',
            'aadhar' => 'required',
            'pan_card' => 'required',
            'shop_photo' => 'required',
            'visting_card' => 'required',
            'shop_ownership' => 'required',
            'gst' => 'required',
            'profile_photo' => 'required',
            'password' => 'required',
        ]);


        //Retail Register Conditions
        $retail = new Retail();
        $retail->retail_id = $this->getRetailId();
        $retail->user_name = $request->user_name;
        $retail->shop_name = $request->shop_name;
        $retail->shop_address = $request->shop_address;
        $retail->no_of_branches = $request->no_of_branches;
        $retail->mobile_number = $request->mobile_number;
        $retail->alternate_mobile_number = $request->alternate_mobile_number;
        $retail->aadhar = $request->aadhar;
        $retail->pan_card = $request->pan_card;

        $var = 'upload/';
        if ($shop_photo = $request->file('shop_photo')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $shop_photo->getClientOriginalExtension();
            $shop_photo->move($var, $postImage);
            $final_shop_photo = "$var$postImage";
        } else {
            $final_shop_photo = $request->photo;
        }

        $retail->shop_photo = $final_shop_photo;

        $var = 'upload/';
        if ($visting_card = $request->file('visting_card')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $visting_card->getClientOriginalExtension();
            $visting_card->move($var, $postImage);
            $final_visting_card = "$var$postImage";
        } else {
            $final_visting_card = $request->photo;
        }
        $retail->visting_card = $final_visting_card;


        $retail->shop_ownership = $request->shop_ownership;
        $retail->gst = $request->gst;

        $var = 'upload/';
        if ($profile_photo = $request->file('profile_photo')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $profile_photo->getClientOriginalExtension();
            $profile_photo->move($var, $postImage);
            $final_profile_photo = "$var$postImage";
        } else {
            $final_profile_photo = $request->photo;
        }

        $retail->profile_photo = $final_profile_photo;

        $retail->password = $request->password;
        $retail->status = 0;
        $retail->save();


        //Notification Added Conditions
        $retail_notification = new Retail_notification();
        $retail_notification->retail_id = $retail->id;
        $retail_notification->notification = "$retail->user_name is request for approval";
        $retail_notification->status = 0;
        $retail_notification->save();


        if ($retail) {
            return response()->json(['success' => 200, 'data' => $retail, 'mesasage' => 'Registered Successfully']);
        } else {
            return response()->json(['success' => 404, 'mesasage' => 'Registered Failed']);
        }
    }

    //Get Particular Data Based on ID
    public function getRetaildata(Request $request)
    {
        $retail_data = Retail::where('id', $request->id)->first();
        if ($retail_data != null) {
            return response()->json(['success' => 200, 'data' => $retail_data, 'mesasage' => 'Data get Successfully']);
        } else {
            return response()->json(['success' => 404, 'mesasage' => ' Failed']);
        }
    }

    //Retail update api
    public function retailupdate(Request $request)
    {

        $retail = Retail::where('id', $request->id)->first();
        $retail->user_name = $request->user_name;
        $retail->shop_name = $request->shop_name;
        $retail->shop_address = $request->shop_address;
        $retail->no_of_branches = $request->no_of_branches;
        $retail->mobile_number = $request->mobile_number;
        $retail->alternate_mobile_number = $request->alternate_mobile_number;
        $retail->aadhar = $request->aadhar;
        $retail->pan_card = $request->pan_card;


        $var = 'upload/';
        if ($shop_photo = $request->file('shop_photo')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $shop_photo->getClientOriginalExtension();
            $shop_photo->move($var, $postImage);
            $final_shop_photo = "$var$postImage";
        } else {
            $final_shop_photo = $request->photo;
        }

        $retail->shop_photo = $final_shop_photo;

        $var = 'upload/';
        if ($visting_card = $request->file('visting_card')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $visting_card->getClientOriginalExtension();
            $visting_card->move($var, $postImage);
            $final_visting_card = "$var$postImage";
        } else {
            $final_visting_card = $request->photo;
        }
        $retail->visting_card = $final_visting_card;


        $retail->shop_ownership = $request->shop_ownership;
        $retail->gst = $request->gst;

        $var = 'upload/';
        if ($profile_photo = $request->file('profile_photo')) {
            $postImage = date('YmdHis') . "." . uniqid() . "." . $profile_photo->getClientOriginalExtension();
            $profile_photo->move($var, $postImage);
            $final_profile_photo = "$var$postImage";
        } else {
            $final_profile_photo = $request->photo;
        }

        $retail->profile_photo = $final_profile_photo;

        $retail->password = $request->password;
        $retail->status = 0;
        $retail->save();

        if ($retail) {
            return response()->json(['Success' => 200, 'data' => $retail, 'message' => 'Update successfully']);
        } else {
            return response()->json(['Success' => 404, 'message' => 'update Failed']);
        }
    }

    //Wen Rertail Update

    //Retail update api
    public function retail_update(Request $request)
    {
        if ($request->shop_photo != "") {
            $retail = Retail::where('id', $request->id)->first();
            $retail->user_name = $request->user_name;
            $retail->shop_name = $request->shop_name;
            $retail->shop_address = $request->shop_address;
            $retail->no_of_branches = $request->no_of_branches;
            $retail->mobile_number = $request->mobile_number;
            $retail->alternate_mobile_number = $request->alternate_mobile_number;
            $retail->aadhar = $request->aadhar;
            $retail->pan_card = $request->pan_card;


            $var = 'upload/';
            if ($shop_photo = $request->file('shop_photo')) {
                $postImage = date('YmdHis') . "." . uniqid() . "." . $shop_photo->getClientOriginalExtension();
                $shop_photo->move($var, $postImage);
                $final_shop_photo = "$var$postImage";
            } else {
                $final_shop_photo = $request->photo;
            }

            $retail->shop_photo = $final_shop_photo;

            $retail->shop_ownership = $request->shop_ownership;
            $retail->gst = $request->gst;
            $retail->save();

            $request->session()->flash('updated', 'Retail Updated Successfully');
            return redirect('edit_approved_retail' . $request->id);
        } elseif ($request->visiting_card != "") {
            $retail = Retail::where('id', $request->id)->first();
            $retail->user_name = $request->user_name;
            $retail->shop_name = $request->shop_name;
            $retail->shop_address = $request->shop_address;
            $retail->no_of_branches = $request->no_of_branches;
            $retail->mobile_number = $request->mobile_number;
            $retail->alternate_mobile_number = $request->alternate_mobile_number;
            $retail->aadhar = $request->aadhar;
            $retail->pan_card = $request->pan_card;

            $var = 'upload/';
            if ($visting_card = $request->file('visting_card')) {
                $postImage = date('YmdHis') . "." . uniqid() . "." . $visting_card->getClientOriginalExtension();
                $visting_card->move($var, $postImage);
                $final_visting_card = "$var$postImage";
            } else {
                $final_visting_card = $request->photo;
            }
            $retail->visting_card = $final_visting_card;


            $retail->shop_ownership = $request->shop_ownership;
            $retail->gst = $request->gst;
            $retail->save();

            $request->session()->flash('updated', 'Retail Updated Successfully');
            return redirect('edit_approved_retail' . $request->id);
        } elseif ($request->profile_photo != "") {
            $retail = Retail::where('id', $request->id)->first();
            $retail->user_name = $request->user_name;
            $retail->shop_name = $request->shop_name;
            $retail->shop_address = $request->shop_address;
            $retail->no_of_branches = $request->no_of_branches;
            $retail->mobile_number = $request->mobile_number;
            $retail->alternate_mobile_number = $request->alternate_mobile_number;
            $retail->aadhar = $request->aadhar;
            $retail->pan_card = $request->pan_card;
            $retail->shop_ownership = $request->shop_ownership;
            $retail->gst = $request->gst;

            $var = 'upload/';
            if ($profile_photo = $request->file('profile_photo')) {
                $postImage = date('YmdHis') . "." . uniqid() . "." . $profile_photo->getClientOriginalExtension();
                $profile_photo->move($var, $postImage);
                $final_profile_photo = "$var$postImage";
            } else {
                $final_profile_photo = $request->photo;
            }

            $retail->profile_photo = $final_profile_photo;
            $retail->save();

            $request->session()->flash('updated', 'Retail Updated Successfully');
            return redirect('edit_approved_retail' . $request->id);
        } else {

            $retail = Retail::where('id', $request->id)->first();
            $retail->user_name = $request->user_name;
            $retail->shop_name = $request->shop_name;
            $retail->shop_address = $request->shop_address;
            $retail->no_of_branches = $request->no_of_branches;
            $retail->mobile_number = $request->mobile_number;
            $retail->alternate_mobile_number = $request->alternate_mobile_number;
            $retail->aadhar = $request->aadhar;
            $retail->pan_card = $request->pan_card;
            $retail->shop_ownership = $request->shop_ownership;
            $retail->gst = $request->gst;
            $retail->save();

            $request->session()->flash('updated', 'Retail Updated Successfully');
            return redirect('edit_approved_retail' . $request->id);
        }
    }



    //Automatic Retail ID Generate
    public function getRetailId()
    {
        $latestAstro = Retail::orderBy('created_at', 'DESC')->first();
        if ($latestAstro == null) {
            $retail_id = 'RET' . str_pad("0" + 1, 3, "0", STR_PAD_LEFT);
        } else {
            $retail_id = $latestAstro->retail_id;
            $retail_id = trim($retail_id, 'RET');
            $retail_id = 'RET' . str_pad($retail_id + 1, 3, "0", STR_PAD_LEFT);
        }
        return $retail_id;
    }

    //Retail Login
    public function retaillogin(Request $request)
    {
        $login = Retail::where('user_name', $request->username)->where('password', $request->password)->first();
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


    //Get Retails Details Functions
    public function get_retail_details($id)
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();

        $get_retail_details = Retail::where('id', $id)->first();

        return view('notification.approval', compact('get_retail_details', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Approval For Retail Function
    public function approved_retail(Request $request, $id)
    {
        $retail = Retail::where('id', $id)->update(['status' => 1]);
        $retail_notifications = Retail_notification::where('retail_id', $id)->update(['status' => 1]);

        $request->session()->flash('approved', 'Approved Successfully');
        return redirect('Dashboard');
    }

    //Rejected For Retail Function
    public function rejected_retail(Request $request, $id)
    {
        $retail = Retail::where('id', $id)->update(['status' => 2]);
        $retail_notifications = Retail_notification::where('retail_id', $id)->update(['status' => 2]);

        $request->session()->flash('rejected', 'Rejected Successfully');

        return redirect('Dashboard');
    }

    //Approved Retails Datas...
    public function retail_approved()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();


        $retail_approved = Retail::where('status', 1)->get();
        return view('retail.approved', compact('retail_approved', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Rejected Retails Datas...
    public function retail_rejected()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();


        $retail_rejected = Retail::where('status', 2)->get();
        return view('retail.rejected', compact('retail_rejected', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Pending Retails Datas...
    public function retail_pending()
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();


        $retail_pending = Retail::where('status', 0)->get();
        return view('retail.pending', compact('retail_pending', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

    //Edit Retails For Admin
    public function edit_approved_retail($id)
    {
        //Retail Conditions...
        $notifications = Retail_notification::where('status', 0)->get();
        $count = Retail_notification::where('status', 0)->count();

        //Customer Conditions...
        $customer_notifications = Customer_notification::where('status', 0)->get();
        $customer_count = Customer_notification::where('status', 0)->count();

        $get_retail_details = Retail::where('id', $id)->first();
        return view('retail.edit_approved_retail', compact('get_retail_details', 'notifications', 'count', 'customer_notifications', 'customer_count'));
    }

      //Edit Retails For Admin
      public function preview_retail($id)
      {
          //Retail Conditions...
          $notifications = Retail_notification::where('status', 0)->get();
          $count = Retail_notification::where('status', 0)->count();
  
          //Customer Conditions...
          $customer_notifications = Customer_notification::where('status', 0)->get();
          $customer_count = Customer_notification::where('status', 0)->count();
  
          $get_retail_details = Retail::where('id', $id)->first();
          return view('retail.preview_retail', compact('get_retail_details', 'notifications', 'count', 'customer_notifications', 'customer_count'));
      }
  

    
}

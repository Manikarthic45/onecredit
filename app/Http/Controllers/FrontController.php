<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use App;
use Models;
use Session;
use Route;
use DB;
use App\Users;
use App\Product;
use App\Customer;
use App\Sales;
use App\Admin;
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


class FrontController extends Controller
{
    //Customer Function...
    public function customer_index(Request $request)
    {
        $i=1;
        $plist = Customer::orderBy('pid', 'desc')->get();
        return view('dams.customer.index',compact('plist','i'));
    }

    public function addcustomer(Request $request)
    {
        return view('dams.customer.addcustomer');
    }

    public function editcustomer(Request $request)
    {
        $plist = Customer::where('pid',$request->id)->get();
        return view('dams.customer.editcustomer',compact('plist'));
    }


    //Product Function...
    public function retail_index(Request $request)
    {
        $notifications = Retail_notification::where('status',0)->get();
        $count = Retail_notification::where('status',0)->count();
        $i=1;
        $plist = Product::orderBy('productid', 'desc')->get();
        return view('dams.product.index',compact('plist','i','notifications','count'));
    }

    public function addproduct(Request $request)
    {
        $notifications = Retail_notification::where('status',0)->get();
        $count = Retail_notification::where('status',0)->count();
        $productid = DB::table('product')->max('productid')+1;
        $productid ="DAMS_00".$productid;
        return view('dams.product.addproduct',compact('productid','notifications','count'));
    }
    public function saveproduct(Request $request)
    {
        $rules = array(
            'productname' => 'required|unique:product',
            'stock' => 'required|numeric',
            'size' => 'required',
            'unit' => 'required',
            //'purchaseprice' => 'required|numeric',
            'saleprice' =>'required|numeric',
                );

        $fieldNames = array(
            'productname' => 'Productname',
            'stock' => 'Stock',
            'size' => 'Size',
            'unit' => 'Unit',
            //'purchaseprice' => 'Purchase price',
            'saleprice' => 'Sale price',

        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {


            $Plant = new Product();
            $Plant->productname = $request->productname;
            $Plant->stock = $request->stock;
            $Plant->size = $request->size;
            $Plant->unit = $request->unit;
            $Plant->prcode = $request->prcode;
            $Plant->purchaseprice = 0;
            $Plant->salesprice = $request->saleprice;
            $Plant->status = "1";
            $Plant->save();

            $request->session()->flash('success');
            return redirect('addproduct');
        }
    }
    public function savecustomer(Request $request)
    {
        $rules = array(
            'customername' => 'required|unique:customer',
            'phone' => 'required|numeric',
            'email' => 'required',
            'address' =>'required',
        );

        $fieldNames = array(
            'customername' => 'Customer name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',

        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {


            $Plant = new Customer();
            $Plant->customername = $request->customername;
            $Plant->phone = $request->phone;
            $Plant->email = $request->email;
            $Plant->address = $request->address;
            $Plant->status = "1";
            $Plant->save();

            $request->session()->flash('success');
            return redirect('addcustomer');
        }
    }
    public function updateproduct(Request $request)
    {
        $rules = array(
            'productname' => 'required',
            'stock' => 'required|numeric',
            //'purchaseprice' => 'required|numeric',
            'saleprice' =>'required|numeric',
            'size' => 'required',
            'unit' => 'required',
        );

        $fieldNames = array(
            'productname' => 'Productname',
            'stock' => 'Stock',
            'purchaseprice' => 'Purchase price',
            'saleprice' => 'Sale price',
            'size' => 'Size',
            'unit' => 'Unit',

        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $id = $request->productid;

            $Plant = new Product();
            $Plant::where('productid', $id)->update(['productname' => $request->productname, 'stock' => $request->stock,
                'size' => $request->size,'unit' => $request->unit,'salesprice' => $request->saleprice,'status' => $request->status  ]);
            $request->session()->flash('success');
            return redirect('editproduct?id='.$id);
        }
    }
    public function updatecustomer(Request $request)
    {
        $rules = array(
            'customername' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required',
            'address' =>'required',
        );

        $fieldNames = array(
            'customername' => 'Customer name',
            'phone' => 'Phone',
            'email' => 'Email',
            'address' => 'Address',

        );
        $validator = Validator::make($request->all(), $rules);
        $validator->setAttributeNames($fieldNames);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        } else {
            $id = $request->productid;

            $Plant = new Customer();
            $Plant::where('pid', $id)->update(['customername' => $request->customername, 'phone' => $request->phone,
                'email' => $request->email,'address' => $request->address,'status' => $request->status  ]);
            $request->session()->flash('success');
            return redirect('editcustomer?id='.$id);
        }
    }
    public function editproduct(Request $request)
    {
        $plist = Product::where('productid',$request->id)->get();
        return view('dams.product.editproduct',compact('plist'));
    }

    //Stock Function...
    public function stock_index(Request $request)
    {
        return view('dams.stock.index');
    }

    public function addstock(Request $request)
    {
        return view('dams.stock.addstock');
    }

    public function editstock(Request $request)
    {
        return view('dams.stock.editstock');
    }

    //Sales Function...
    public function sales_index(Request $request)
    {
        $list = DB::table('sales')->orderBy('id', 'desc')->get();
        $total=Sales::sum('total');
        $count=Sales::sum('qty');
        return view('dams.sales.index',compact('list','total','count'));
    }

    //Invoice Function...
    public function invoice_index(Request $request)
    {
        return view('dams.invoice.index');
    }

    public function createinvoice(Request $request)
    {
        return view('dams.invoice.createinvoice');
    }
    public function deleteproduct(Request $request)
    {
        $id = $_REQUEST['pid'];
        $del = Product::where('productid', $id)->delete();
        return "ok";
    }
    public function deletecustomer(Request $request)
    {
        $id = $_REQUEST['pid'];
        $del = Customer::where('pid', $id)->delete();
        return "ok";
    }
	public function getlocation1(Request $request)
    {
        $location1 = $_REQUEST['location1'];
        $citylist = DB::table('product')->where('productname', 'like', '%' . $location1 . '%')->orderBy('productid', 'asc')->get();
        $output = "";
        foreach ($citylist as $list) {
            $output .= '<a1 href="#" class="list-group-item list-group-item-action border-1">' . $list->productname . '</a1>';
        }
        return $output;
    }
    public function getunitsize(Request $request)
    {
        $productname = $_REQUEST['productname'];
        $size = Product::where('productname', $productname)->first()->size;
        $unit = Product::where('productname', $productname)->first()->unit;
        $salesprice = Product::where('productname', $productname)->first()->salesprice;
        return $size.','.$unit.','.$salesprice;
    }

    public function postdata(Request $request)
    {
        $productname = $_REQUEST['productname'];$qty = $_REQUEST['qty'];$size = $_REQUEST['size'];
        $unit = $_REQUEST['unit'];$price = $_REQUEST['price'];$output = $_REQUEST['output'];

        $count = Sales::where('productname','=',$productname)->count();
        if($count==0) {
            $Plant = new Sales();
            $Plant->productname = $request->productname;
            $Plant->qty = $request->qty;
            $Plant->size = $request->size;
            $Plant->unit = $request->unit;
            $Plant->salesprice = $request->price;
            $Plant->total = $request->output;
            $Plant->save();
        }else{
            $exqty = Sales::where('productname', $productname)->first()->qty;
            $exsalesprice = Sales::where('productname', $productname)->first()->salesprice;
            $newqty=$exqty+$qty;
            $newtotal=$newqty*$exsalesprice;

            $Sales = new Sales();
            $Sales::where('productname', $productname)->update(['qty' => $newqty, 'total' => $newtotal ]);

        }

        $citylist = DB::table('sales')->orderBy('id', 'desc')->get();
        $output = "";
        $output .= "<table id='scroll-vertical' class='table sale-chart1 table-bordered dt-responsive nowrap align-middle mdl-data-table' style='width:100%'>
                                                <thead>
                                                <tr>

                                                    <th colspan='2' style='width: 200px;'>Product Name</th>
                                                    <th>Qty</th>
                                                    <th>Size</th>
                                                    <th>Unit</th>
                                                    <th>Price</th>

                                                    <th>Total</th>

                                                </tr>
                                                </thead>
                                                <tbody>";
        foreach ($citylist as $list) {
            $output .= " <tr><td colspan='2' style='width: 200px;'>$list->productname</td><td> $list->qty</td><td>$list->size</td><td>$list->unit </td><td>$list->salesprice</td><td>$list->total</td></tr>";
        }
        $output .= "</tbody> </table>";
        return $output;
    }
}

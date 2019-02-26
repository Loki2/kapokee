<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class CheckoutController extends Controller
{
    public function login_check()
    {
        return view('pages.login');
    }
    public function customer_register(Request $request)
    {
        $data = array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['password']=md5($request->password );
        $data['mobile_number']=$request->mobile_number; 

        $customer_id=DB::table('tbl_customer')
                ->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);
        return Redirect::to('/checkout');
    }
    public function checkout()
    {
        return view('pages.checkout');
    }
    public function save_shipping_details(Request $request)
    {
        $data=array();
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_first_name']=$request->shipping_first_name;
        $data['shipping_last_name']=$request->shipping_last_name;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_mobile']=$request->shipping_mobile;
        $data['shipping_city']=$request->shipping_city;
        $data['shipping_province']=$request->shipping_province;
        
        $shipping_id=DB::table('tbl_shipping')
                    ->insertGetId($data);
            Session::put('shipping_id',$shipping_id);
            return Redirect::to('/payment');
    }
    public function customer_login(Request $request)
    {
        $customer_email = $request->customer_email;
        $password = md5($request->password);
        $result = DB::table('tbl_customer')
                ->where('customer_email', $customer_email)
                ->where('password', $password)
                ->first();
         if($result)
         {
             Session::put('customer_id',$result->customer_id); 
            return Redirect::to('/checkout');
         }else{
            return Redirect::to('/login-check ');
         }
    }
    public function payment()
    {
        // return view('pages.payment');
        $all_published_category=DB::table('tbl_category')
                                ->where('public_status', 1)
                                ->get();
        $manage_published_category =view('pages.payment ')
        ->with('all_published_category', $all_published_category);
        return view('layout')
        ->with('pages.payment ',$manage_published_category );
                         
    }
    public function order_place(Request $request)
    {
        $payment_gateway = $request->payment_gateway;
        echo $payment_gateway; 
    }
    public function customer_logout()
    {
        Session::flush();
        return Redirect::to('/');
    }
}

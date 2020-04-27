<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public function login_checkout()
    {
        return view('pages.login');
    }

    public function customer_registration(Request $request)
    {
        $data=array();
        $data['customer_name']=$request->customer_name;
        $data['customer_email']=$request->customer_email;
        $data['password']=md5($request->password);
        $data['mobile_number']=$request->mobile_number;

            $customer_id=DB::table('customer')
                        ->insertGetId($data);

                    Session::put('customer_id',$customer_id);
                    Session::put('customer_name',$request->customer_name);
                    return Redirect('/checkout');
    }

    public function customer_login(Request $request)
    {
        $customer_email=$request->customer_email;
        $password=md5($request->password);

            $result=DB::table('customer')
                    ->where('customer_email',$customer_email)
                    ->where('password',$password)
                    ->first();
                    
                    if ($result) {

                        Session::put('customer_id',$result->customer_id);
                        return Redirect::to('/checkout');
                    }else{
                        return Redirect::to('/login-check');
                    }
    }

    public function customer_logout()
    {
        Session::flush();
        return Redirect::to('/login-check');
    }

    public function checkout()
    {
        return view('checkout');
    }
    
    public function payment()
    {
        return view('/payment');
    }

    public function order_place(Request $request)
    {
        $payment_gateway=$request->payment_method;

        $pdata=array();
        $pdata['payment_method']=$payment_gateway;
        $pdata['payment_status']='pending';
        $payment_id=DB::table('payment')
                    ->insertGetId($pdata);

        $odata=array();
        $odata['customer_id']=Session::get('customer_id');
        $odata['shipping_id']=Session::get('shipping_id');
        $odata['payment_id']=$payment_id;
        $odata['order_total']=Cart::total();
        $odata['order_status']='pending';
        $order_id=DB::table('order')
                    ->insertGetId($odata);
        
        $contents=Cart::content();
        $oddata=array();
        foreach ($contents as $v_content)
        {
            $oddata['order_id']=$order_id;
            $oddata['product_id']=$v_content->id;
            $oddata['product_name']=$v_content->name;
            $oddata['product_price']=$v_content->price;
            $oddata['product_sales_quantity']=$v_content->qty;
            $order_details_id=DB::table('order_details')
                    ->insertGetId($oddata);
        }

        if ($payment_gateway=='handcash') {

            Cart::destroy();
            return view('pages.handcash');
            

        }elseif($payment_gateway=='cart') {
            echo "cart";
        }else{
            echo "not selected";
        }

    }

    public function manage_order()
    {
        $all_order_info = DB::table('order')
                    ->join('customer','order.customer_id','=','customer.customer_id')
                     ->select('order.*','customer.customer_name')
                    ->get(); 

            // echo "<pre>";
            // print_r($product);
            // echo "</pre>";
            // exit();
        return view('admin.manage_order',['all_order_info'=>$all_order_info]);
    } 
    
    public function view_order()
    {   
        $order_by_id = DB::table('order')
                    ->join('customer','order.customer_id','=','customer.customer_id')
                    ->join('order_details','order.order_id','=','order_details.order_id')
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')
                    ->select('order.*','order_details.*','shipping.*','customer.*')
                    ->get(); 

            // echo "<pre>";
            // print_r($order_by_id);
            // echo "</pre>";
            // exit();
        return view('admin.view_order',['order_by_id'=>$order_by_id]);  

    } 

    public function shipping_details(Request $request)
    {
        $data=array();
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_firstname']=$request->shipping_firstname;
        $data['shipping_lastname']=$request->shipping_lastname;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_mobile']=$request->shipping_mobile;
        $data['shipping_city']=$request->shipping_city;

        $shipping_id=DB::table('shipping')
            ->insertGetId($data);

                Session::put('shipping_id',$shipping_id);
                return Redirect('/payment');

                   
    }
}

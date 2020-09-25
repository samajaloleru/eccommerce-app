<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Cart;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
    public function shipping_details(Request $request)
    {
        $data=array();
        $data['shipping_email']=$request->shipping_email;
        $data['shipping_firstname']=$request->shipping_firstname;
        $data['shipping_lastname']=$request->shipping_lastname;
        $data['shipping_address']=$request->shipping_address;
        $data['shipping_mobile']=$request->shipping_mobile;
        $data['shipping_city']=$request->shipping_city;
        $data['note']=$request->note;

        $shipping_id=DB::table('shipping')
            ->insertGetId($data);

                Session::put('shipping_id',$shipping_id);
                return Redirect('/payment');

                   
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
        $delivery_gateway=$request->delivery_method;

        $pdata=array();
        $pdata['payment_method']=$payment_gateway;
        $pdata['delivery_method']=$delivery_gateway;
        $pdata['payment_status']='pending';
        $payment_id=DB::table('payment')
                    ->insertGetId($pdata);

        $odata=array();
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
            $email =Session::get('shipping_id');

            $shipping = DB::table('shipping')
                        ->where('shipping_id',$email)
                        ->select('shipping_email')
                        ->first();
                
            Mail::to($shipping->shipping_email)->send(new OrderMail($contents));
            Cart::destroy();
            return Redirect::to('/');
            

        }else{
            echo "not selected";
        }
    }

    public function manage_order()
    {
        $all_order_info = DB::table('order')
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')
                     ->select('order.*','shipping.shipping_firstname')
                     ->latest()
                    ->get(); 

        return view('admin.manage_order',['all_order_info'=>$all_order_info])->with('no', 1);
    } 
    
    public function view_order($order_id)
    {   
        $order_by_id = DB::table('order')
                    ->where('order.order_id',$order_id)
                    ->join('order_details','order.order_id','=','order_details.order_id')
                    ->join('shipping','order.shipping_id','=','shipping.shipping_id')
                    ->join('payment','order.payment_id','=','payment.payment_id')
                    ->select('order.*','order_details.*','shipping.*','payment.*')
                    ->get(); 
        return view('admin.view_order',['order_by_id'=>$order_by_id]);  

    } 

    //this is to Unactive part of advert-slider
    public function unactive_order($order_id) {
        DB::table('order')
            ->where('order_id',$order_id)
            ->update(['order.order_status' => '']);
            Session::put('message',  'Order Unactive successfuly !!');
            return Redirect::to('/manage-order');
    }

    // public function delete_order($order_id) {
    //     DB::table('order')
    //         ->where('order_id',$order_id)
    //         ->delete();
    //     Session::put('message', 'Order deleted successfuly !!');
    //     return Redirect::to('/manage-order');
    // }
}

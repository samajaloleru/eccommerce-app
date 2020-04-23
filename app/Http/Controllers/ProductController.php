<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
Session_start();

class ProductController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_product');
    }

    public function all_product() {
        $this->AdminAuthCheck();
        $product = DB::table('product')
                    ->join('category','product.category_id','=','category.category_id')
                    ->join('brand','product.brand_id','=','brand.brand_id')
                    ->get(); 

            // echo "<pre>";
            // print_r($product);
            // echo "</pre>";
            // exit();
        return view('admin.all_product',['product'=>$product]);
    }


    public function save_product(Request $request)
    {   
        $data=array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['brand_id']=$request->brand_id;
        $data['short_description']=$request->short_description;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['status']=$request->status;
        $image=$request->file('image');

        if ($image) {
            $image_name=Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['image']=$image_url;
                DB::table('product')->insert($data);
                Session::put('message','Product added successfully');
                return Redirect::to('/add-product');
                
            }
        }

            
    }

    public function show($product_id) {
        $product = DB::select('select * from product where product_id = ?',[$product_id]);
        return view('admin.edit_product',['product'=>$product]);
    }

    public function edit(Request $request,$product_id) {
        $product_name = $request->input('product_name');
        $status = $request->input('status');
        $description = $request->input('description');
        DB::update('update product set product_name = ?, status = ?, description = ? where product_id = ?',[$product_name,$status,$description,$product_id]);
        Session::put('message', 'Product updated successfuly !!');
        return Redirect::to('/all-product');
    }

    public function delete_product($product_id) {
        DB::table('product')
            ->where('product_id',$product_id)
            ->delete();
        Session::put('message', 'Product deleted successfuly !!');
        return Redirect::to('/all-product');
    }

    public function AdminAuthCheck()
    {
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else{
            return Redirect::to('/admin')->send();
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Imports\ProductsImport;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Excel;
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
                    ->select('product.*','category.category_name')
                    ->get(); 

            // echo "<pre>";
            // print_r($product);
            // echo "</pre>";
            // exit();
        return view('admin.all_product',['product'=>$product]);
    }

     //this is to Unactive part of product
     public function unactive_product($product_id) {
        DB::table('product')
            ->where('product_id',$product_id)
            ->update(['product.status' => 0]);
            Session::put('message',  'Product Active successfuly !!');
            return Redirect::to('/all-product');
    }
     //this is to Active part of product
     public function active_product($product_id) {
        DB::table('product')
            ->where('product_id',$product_id)
            ->update(['product.status' => 1 ]);
            Session::put('message',  'Product Active successfuly !!');
            return Redirect::to('/all-product');
     }
    
    

    public function save_product(Request $request)
    {   
        $data=array();
        $data['product_name']=$request->product_name;
        $data['category_id']=$request->category_id;
        $data['short_description']=$request->short_description;
        $data['description']=$request->description;
        $data['price']=$request->price;
        $data['status']=$request->status;
        $data['best_status']=$request->best_status;
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

    public function search(Request $request)
   {
      $q = $request->input('q');
      if($q != ""){
         $product = DB::table('product')
                ->where('product_name', 'LIKE', '%' . $q . '%')
                ->join('category','product.category_id','=','category.category_id')
                ->select('product.*','category.category_name')
                ->get();

         if(count($product) > 0)
         return view('admin.search_product')->withDetails($product)->withQuery($q);
      }
      //dd($q);
        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();

      return view('admin.search_product')->withMessage("No Product Found!");
   }

    public function show($product_id) {
        $product = DB::select('select * from product where product_id = ?',[$product_id]);
        return view('admin.edit_product',['product'=>$product]);
    }

    public function edit(Request $request,$product_id) {
        $this->AdminAuthCheck();
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $status = $request->input('status');
        $category_id = $request->input('category_id');
        $best_status = $request->input('best_status');
        // $image = $request->file('image');
        
        // if ($image) {
        //     $image_name=Str::random(40);
        //     $ext=strtolower($image->getClientOriginalExtension());
        //     $image_full_name=$image_name.'.'.$ext;
        //     $upload_path='image/';
        //     $image_url=$upload_path.$image_full_name;
        //     $success=$image->move($upload_path,$image_full_name);
        //     if (file_exists(public_path($image_full_name =  $image->getClientOriginalName()))) 
        //     {
        //         unlink(public_path($image_full_name));
        //     };
        //     //Update Image
        //     $image->file = $image_full_name;
        // }
        
        DB::update('update product set product_name = ?, price = ?, status = ?, category_id = ?, best_status = ? where product_id = ?',[$product_name,$price,$status,$category_id,$best_status,$product_id]);
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

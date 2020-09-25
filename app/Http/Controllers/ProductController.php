<?php

namespace App\Http\Controllers;

use DB;
use Session;
use App\Http\Requests;
use Excel;
use App\Product;
//use App\Imports\ProductsImport;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;

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
        $product = Product::select('product.*')->get();
        return view('admin.all_product')->with('product', $product);
        // $product = DB::table('product')
        //             ->select('product.*')
        //             ->get(); 

        //     // echo "<pre>";
        //     // print_r($product);
        //     // echo "</pre>";
        //     // exit();
        // return view('admin.all_product',['product'=>$product]);
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
        $this->validate($request, [
            'product_name' => 'required',
            'price' => 'required',
            'image' => 'image|nullable|max:1999'
        ]);

        //Handle file upload
        if ($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        } else {
            $fileNameToStore = '';
        }

        // Create Post
        $data = new Product;
        $data->product_name = $request ->input('product_name');
        $data->short_description = $request ->input('short_description');
        $data->description = $request ->input('description');
        $data->price = $request ->input('price');
        $data->status = $request ->input('status');
        // for add user to Post.
        //$data->user_id = auth()->user()->id;
        //for adding image
        $data->image = $fileNameToStore;
        $data->save();
        Session::put('message','Product added successfully');
        return redirect('/add-product');
            
    }

    public function search(Request $request)
   {
      $q = $request->input('q');
      if($q != ""){
         $product = DB::table('product')
                ->where('product_name', 'LIKE', '%' . $q . '%')
                ->select('product.*')
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
        DB::update('update product set product_name = ?, price = ?, status = ? where product_id = ?',[$product_name,$price,$status,$product_id]);
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

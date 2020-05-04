<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
Session_start();

class HomeController extends Controller
{
   public function index()
   {
    $product = DB::table('product')
                ->join('category','product.category_id','=','category.category_id')
               ->where('product.status',1)
                ->select('product.*','category.category_name')
                ->get(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
    return view('pages.welcome',['product'=>$product]);

   }
   public function product_more()
   {
    $product = DB::table('product')
                ->join('category','product.category_id','=','category.category_id')
                ->where('product.status',1)
                ->select('product.*','category.category_name')
                ->get(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
    return view('pages.product_more',['product'=>$product]);
   }


   public function product_by_category($category_id)
   {
      $product=DB::table('product')
            ->join('category','product.category_id','=','category.category_id')
            ->select('product.*','category.category_name')
            ->where('category.category_id',$category_id)
            ->where('product.status',1)
            ->get(); 

      // echo "<pre>";
      // print_r($category);
      // echo "</pre>";
      // exit();
      return view('pages.product_by_category',['product'=>$product]);
   }

   public function product_by_brand($brand_id)
   {
      $product=DB::table('product')
            ->join('brand','product.brand_id','=','brand.brand_id')
            ->select('product.*','brand.brand_name')
            ->where('brand.brand_id',$brand_id)
            ->where('product.status',1)
            ->get(); 

      // echo "<pre>";
      // print_r($brand);
      // echo "</pre>";
      // exit();
      return view('pages.product_by_brand',['product'=>$product]);
   }

   public function view_product($product_id)
   {
      $product = DB::table('product')
               ->join('category','product.category_id','=','category.category_id')
               ->select('product.*','category.category_name')
               ->where('product.product_id',$product_id)
               ->where('product.status',1)
               ->first(); 

        // echo "<pre>";
        // print_r($product);
        // echo "</pre>";
        // exit();
      return view('pages.view_product',['product'=>$product]);
   }

   public function show_about()
   {
    return view('pages.about');
   }
   
}

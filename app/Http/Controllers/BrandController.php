<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class BrandController extends Controller
{
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_brand');
    }

    public function all_brand() {
        $this->AdminAuthCheck();
        $brand = DB::select('select * from brand');
        return view('admin.all_brand',['brand'=>$brand]);
    }

    public function save_brand(Request $request)
    {   
        $data=array();
        $data['brand_id']=$request->brand_id;
        $data['brand_name']=$request->brand_name;
        $data['description']=$request->description;
        $data['status']=$request->status;
        DB::table('brand')->insert($data);
        Session::put('message', 'Brand added successfuly !!');
        return Redirect::to('/add-brand');
    }

    public function show($brand_id) {
        $brand = DB::select('select * from brand where brand_id = ?',[$brand_id]);
        return view('admin.edit_brand',['brand'=>$brand]);
    }

    public function edit(Request $request,$brand_id) {
        $this->AdminAuthCheck();
        $brand_name = $request->input('brand_name');
        $status = $request->input('status');
        $description = $request->input('description');
        DB::update('update brand set brand_name = ?, status = ?, description = ? where brand_id = ?',[$brand_name,$status,$description,$brand_id]);
        Session::put('message', 'Brand updated successfuly !!');
        return Redirect::to('/all-brand');
    }

    public function delete_brand($brand_id) {
        DB::delete('delete from brand where brand_id = ?',[$brand_id]);
        Session::put('message', 'Brand deleted successfuly !!');
        return Redirect::to('/all-brand');
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

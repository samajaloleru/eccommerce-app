<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();

class CategoryController extends Controller
{   
    public function index()
    {
        $this->AdminAuthCheck();
        return view('admin.add_category');
    }

    public function all_category() {
        $this->AdminAuthCheck();
        $category = DB::select('select * from category');
        return view('admin.all_category',['category'=>$category]);
    }

    public function save_category(Request $request)
    {   
        $data=array();
        $data['category_name']=$request->category_name;
        $data['description']=$request->description;
        $data['status']=$request->status;
        DB::table('category')->insert($data);
        Session::put('message', 'Category added successfuly !!');
        return Redirect::to('/add-category');
    }

    public function show($category_id) {
        $category = DB::select('select * from category where category_id = ?',[$category_id]);
        return view('admin.edit_category',['category'=>$category]);
    }

    public function edit(Request $request,$category_id) {
        $this->AdminAuthCheck();
        $category_name = $request->input('category_name');
        $status = $request->input('status');
        $description = $request->input('description');
        DB::update('update category set category_name = ?, status = ?, description = ? where category_id = ?',[$category_name,$status,$description,$category_id]);
        Session::put('message', 'Category updated successfuly !!');
        return Redirect::to('/all-category');
    }

    public function delete_category($category_id) {
        DB::delete('delete from category where category_id = ?',[$category_id]);
        Session::put('message', 'Category deleted successfuly !!');
        return Redirect::to('/all-category');
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

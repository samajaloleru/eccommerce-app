<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
Session_start();

class SliderController extends Controller
{
    public function index() {
        $this->AdminAuthCheck();
        return view('admin.add_slider');
    }
    
    public function all_slider() {
        $this->AdminAuthCheck();
        $slider = DB::select('select * from slider');
        return view('admin.all_slider',['slider'=>$slider]);
    }
    
    // //this is to Unactive part of slider
    // public function unactive_slider(Request $request, $slider_id) {
    //     $status = $request->input('status');
    //         ->where('slider_id',$slider_id)
    //         DB::update('update slider set status = 0, where slider_id = ?',[$status,$slider_id]);
    //     Session::put('message', 'Slider Unactive successfuly !!');
    //     return Redirect::to('/all-slider');
    // }
    // //this is to Active part of slider
    // public function active_slider(Request $request, $slider_id) {
    //     $status = $request->input('status');
    //         ->where('slider_id',$slider_id)
    //         DB::update('update slider set status = 1, where slider_id = ?',[$status,$slider_id]);
    //     Session::put('message',  'Slider Active successfuly !!');
    //     return Redirect::to('/all-slider');
    // }
    // @if($v_slider->status==1)
    //     <span href="{{URL::to('/unactive-slider/'.$v_slider->slider_id)}}" class="btn btn-danger">Active</span>
    // @else
    //     <span href="{{URL::to('/active-slider/'.$v_slider->slider_id)}}" class="btn btn-success">Unactive</span>
    // @endif

    public function save_slider(Request $request)
    {   
        $data=array();
        $data['status']=$request->status;
        $image=$request->file('slider_image');

        if ($image) {
            $image_name=Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='slider/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['slider_image']=$image_url;
                DB::table('slider')->insert($data);
                Session::put('message','slider added successfully');
                return Redirect::to('/add-slider');
                
                
            }
            
        }
    }

    public function show($slider_id) {
        $slider = DB::select('select * from slider where slider_id = ?',[$slider_id]);
        return view('admin.edit_slider',['slider'=>$slider]);
    }

    public function edit(Request $request,$slider_id) {
        $slider_name = $request->input('slider_name');
        $status = $request->input('status');
        $description = $request->input('description');
        DB::update('update slider set slider_name = ?, status = ?, description = ? where slider_id = ?',[$slider_name,$status,$description,$slider_id]);
        Session::put('message', 'Product updated successfuly !!');
        return Redirect::to('/all-slider');
    }

    public function delete_slider($slider_id) {
        DB::table('slider')
            ->where('slider_id',$slider_id)
            ->delete();
        Session::put('message', 'Product deleted successfuly !!');
        return Redirect::to('/all-slider');
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

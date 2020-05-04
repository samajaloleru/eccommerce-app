<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
Session_start();

class AdvertController extends Controller
{
    public function index() {
        $this->AdminAuthCheck();
        return view('admin.add_advert');
    }
    
    public function all_advert() {
        $this->AdminAuthCheck();
        $advert_slider = DB::select('select * from advert_slider');
        return view('admin.all_advert',['advert_slider'=>$advert_slider]);
    }
    
    //this is to Unactive part of advert-slider
    public function unactive_advert(Request $request, $advert_id) {
        DB::table('adver_slider')
            ->where('advert_id',$advert_id)
            ->update(['advert_slider.status' => 0]);
            Session::put('message',  'Advert Active successfuly !!');
            return Redirect::to('/all-advert');
    }
     //this is to Active part of advert-slider
     public function active_advert($advert_id) {
        DB::table('advert_slider')
            ->where('advert_id',$advert_id)
            ->update(['advert_slider.status' => 1 ]);
            Session::put('message',  'Advert Active successfuly !!');
            return Redirect::to('/all-advert');
     }


    public function save_advert(Request $request)
    {   
        $data=array();
        $data['status']=$request->status;
        $image=$request->file('advert_image');

        if ($image) {
            $image_name=Str::random(40);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='advert/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['advert_image']=$image_url;
                DB::table('advert_slider')->insert($data);
                Session::put('message','advert added successfully');
                return Redirect::to('/add-advert');
                
                
            }
            
        }
    }

    public function show($advert_id) {
        $advert_slider = DB::select('select * from advert_slider where advert_id = ?',[$advert_id]);
        return view('admin.edit_advert',['advert_slider'=>$advert_slider]);
    }

    // public function edit(Request $request,$advert_id) {
    //     $status = $request->input('status');
    //     $description = $request->input('description');
    //     Session::put('message', 'advert-slider updated successfuly !!');
    //     return Redirect::to('/all-advert-slider');
    // }

    public function delete_advert($advert_id) {
        DB::table('advert_slider')
            ->where('advert_id',$advert_id)
            ->delete();
        Session::put('message', 'Advert deleted successfuly !!');
        return Redirect::to('/all-advert');
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

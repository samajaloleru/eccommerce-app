<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();


class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }

    public function login()
    {
        return view('admin');
    }

    public function dashboard(Request $request)
    {
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result=DB::table('admin')
                ->where('admin_email',$admin_email)
                ->where('admin_password',$admin_password)
                ->first();

            if ($result) {
                    Session::put('admin_name',$result->admin_name);
                    Session::put('admin_id',$result->admin_id);
                    return Redirect::to('/dashboard');
                }else{
                    Session::put('message','Email or Password Invalid');
                    return Redirect::to('/admin');
            }
    }
    
    public function admin_login(Request $request)
    {   
        $data=array();
        $data['admin_name']=$request->admin_name;
        $data['admin_email']=$request->admin_email;
        $data['admin_password']=md5($request->admin_password);
        $data['admin_phone']=$request->admin_phone;

        
        DB::table('admin')->insert($data);
        Session::put('message','Admin added successfully');
        return Redirect::to('/admin');

            
    }
}

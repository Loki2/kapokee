<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
//session_start();

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.add_slider');
    }


    public function save_slider(Request $request)
    {
        $data=array();
        $data['publication_status']=$request->publication_status;
        $image = $request->file('slider_image');
        if($image){
            $image_name = str_random(20);
            $text=strtolower( $image->getClientOriginalExtension());
            $image_full_name = $image_name.'_'.$text;
            $upload_patch='slider/';
            $image_url = $upload_patch.$image_full_name;
            $success = $image -> move($upload_patch,$image_full_name);
            if($success){
                  $data['slider_image']=$image_url;
                    DB::table('tbl_slider')->insert($data);
                    Session::put('message','Slider Added successfuly...!');
                    return Redirect::to('/add-slider');
            }
         }
        $data['slider_image']='';
                DB::table('tbl_slider')->insert($data);
                Session::put('message','Slider added without image successfuly...!');
                return Redirect::to('/add-slider');
    }
    public function all_slider()
    {
        $all_slider = DB::table('tbl_slider')->get();
        $manage_slider=view('admin.all_slider')
            ->with('all_slider', $all_slider);
        return view('admin_layout')
            ->with('admin.all_slider',$manage_slider);
    }
    // This an active Slider part ***********************************************
    public function active_slider($slider_id)
    {
        DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->update(['publication_status'=> 1]);
            Session::put('message','Slider activated successful...!');
            return Redirect::to('/all-slider');
    }
    // This unactive Slider part ***********************************************
    public function unactive_slider($slider_id)
    {
        DB::table('tbl_slider')
            ->where('slider_id',$slider_id)
            ->update(['publication_status'=> 0]);
            Session::put('message','Slider Unactivat successful...!');
            return Redirect::to('/all-slider');
    }
    public function delete_slider($slider_id)
    {
        
        DB::table('tbl_slider')
            ->where('slider_id', $slider_id)
            ->delete();
            Session::get('message', 'slider delete successful !');
            return Redirect:: to('/all-slider');
    }
}

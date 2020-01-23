<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
session_start();
class TeacherController extends Controller
{
    public function addTeacherForm(){
      return view('admin.addTeacher');
    }
    public function addTeacher(request $request){
        $data=array();
        $data['teacher_name']=$request->name;
        $data['teacher_phone']=$request->phone;
        $data['teacher_address']=$request->address;
        $data['teacher_department']=$request->department;
        $img=$request->image;
    	if($img){
             $image=$img->store('TeacherImages');
             $data['teacher_image']=$image;
             Session::put('message','Teacher added successfully!');
             DB::table('teacher_tbl')->insert($data);
             return view('admin.addTeacher');
    	}
    }
    public function allTeacher(){
             $result=DB::table('teacher_tbl')->get();
       return view('admin.allTeacher',['result'=>$result]);
    }
}

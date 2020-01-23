<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
session_start();

class AddStudentController extends Controller
{
    public function addStudentForm(){
    	return view('admin.addStudent');
    }
    public function addStudent(request $request){
    	$result=array();
    	$result['name']=$request->name;
    	$result['roll']=$request->roll;
    	$result['fathername']=$request->fName;
    	$result['mothername']=$request->mName;
    	$result['email']=$request->email;
    	$result['phone']=$request->phone;
    	$result['address']=$request->address;
    	$result['password']=$request->password;
    	$result['department']=$request->department;
    	$result['year']=$request->year;
    	$img=$request->image;
    	if($img){
             
             $result['image']=$img->store('public/images');
             Session::put('message','Student added successfully!');
             DB::table('student_tbl')->insert($result);
             return view('admin.addStudent');
    	}
      
    }
}

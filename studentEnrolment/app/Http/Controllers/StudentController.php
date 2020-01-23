<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class StudentController extends Controller
{
   
    public function login(request $request){
    	
    	$email=$request->email;
    	$password=$request->password;
        $result=DB::table('student_tbl')
        ->where('email',$email)
        ->where('password',$password)
        ->first();
        if($result){
        	Session::put('email',$result->email);
            Session::put('password',$result->password);
        	Session::put('id',$result->id);
            return redirect::to('student/studentDashboard');
        }else{
        	Session::put('exception','Invalid email or password!');
        	return redirect::to('/studentLogin');
        }	
    }
    public function dashboard(){
    	return view('student.studentDashboard');
    }
    public function studentProfile(){
    	$email=Session::get('email');
    	$password=Session::get('password');
    	$result=DB::table('student_tbl')->where('email',$email)->where('password',$password)->first();
    	return view('student.studentProfile',['result'=>$result]);
    }
    public function logout(){
        Session::put('email',null);
        Session::put('password',null);
        return redirect::to('/studentLogin');
    }
    public function setting(){
        return view('student.updateSetting');
    }
    public function update(request $request){
        $data=array();
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['password']=$request->password;
        $up=DB::table('student_tbl')
        ->where('id',Session::get('id'))
        ->update($data);
        if($up){
           Session::put('update1','Updated Successfully!');
           return redirect::to('/student/setting');
        }else{
            return redirect::to('/student/setting');
        }
    }

}

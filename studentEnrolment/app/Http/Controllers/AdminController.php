<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
session_start();
class AdminController extends Controller
{
    public function loginFrame(Request $request)
    {
    	$email=$request->email;
    	$password=md5($request->password);
        $result=DB::table('admin_tbl')
        ->where('admin_email',$email)
        ->where('admin_password',$password)
        ->first();
        if($result){
        	Session::put('email',$result->admin_email);
        	Session::put('password',$result->admin_password);
            return redirect::to('admin/adminDashboard');
        }else{
        	Session::put('exception','Invalid email or password!');
        	return redirect::to('/adminLogin');
        }
    }
    public function adminDashboard(){
    	return view('admin.dashboard');
    }
    public function logout(){
        Session::put('email',null);
        Session::put('password',null);
        return Redirect::to('/adminLogin');
    }
    public function viewProfile(){
        return view('admin.view');
    }
    public function viewSetting(){
        return view('admin.setting');
    }
    public function delete(request $id){
        DB::table('student_tbl')
        ->where('id',$id['id'])
        ->delete();
        return redirect::to('admin/allStudent');
    }
    public function view(request $id){
        $result=DB::table('student_tbl')
        ->select('*')
        ->where('id', $id['id'])
        ->first();
       return view('admin.studentView',['result'=>$result]);
    }
    public function edit(request $id){
        $result=DB::table('student_tbl')
             ->where('id',$id['id'])
             ->first();
             return view('admin.studentEdit',['result'=>$result]);
    }
    public function editStudent(request $request){
        $data=array();
        $data['name']=$request->name;
        $data['roll']=$request->roll;
        $data['fathername']=$request->fName;
        $data['mothername']=$request->mName;
        $data['email']=$request->email;
        $data['password']=$request->password;
        $data['address']=$request->address;
        $data['department']=$request->department;
        $data['year']=$request->year;
        DB::table('student_tbl')
        ->where('id',$request->id)
        ->update($data);
        $result1=DB::table('student_tbl')->get();
        if($result1){
           Session::put('message','Successfully Updated!');
        }
        
       return view('admin.allStudent',['result'=>$result1]);
    }
}

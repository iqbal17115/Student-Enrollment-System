<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CourseController extends Controller
{
    public function cse(){
        $result=DB::table('student_tbl')
        ->where('department','CSE')
        ->get();
       return view('admin.cse',['result'=>$result]);
    }
    public function ece(){
    	$result=DB::table('student_tbl')
        ->where('department','ECE')
        ->get();
       return view('admin.ece',['result'=>$result]);
    }
    public function eee(){
    	$result=DB::table('student_tbl')
        ->where('department','EEE')
        ->get();
       return view('admin.eee',['result'=>$result]);
    }
    public function mba(){
    	$result=DB::table('student_tbl')
        ->where('department','MBA')
        ->get();
       return view('admin.mba',['result'=>$result]);
    }
    public function bba(){
    	$result=DB::table('student_tbl')
        ->where('department','BBA')
        ->get();
       return view('admin.bba',['result'=>$result]);
    }
}

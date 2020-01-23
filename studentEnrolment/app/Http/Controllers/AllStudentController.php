<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AllStudentController extends Controller
{
    public function allStudent(){
       $result=DB::table('student_tbl')->get();
       return view('admin.allStudent',['result'=>$result]);
    }
}

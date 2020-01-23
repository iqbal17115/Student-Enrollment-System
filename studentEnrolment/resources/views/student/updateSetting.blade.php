@extends('studentMaster')
@section('content')
   <div class="col-12 col-lg-6 grid-margin">
   	<h1 class="text-center">Update Profile</h1>
   	<?php 
      $update=DB::table('student_tbl')->where('id',Session::get('id'))->first();
   	 ?>
   	<form action="{{ URL::to('student/setting') }}" method="POST">
   		@csrf
   	  <div class="form-group">
   	  	<label for="">Student Phone</label>
   	  	<input class="form-control" type="text" name="phone" value="{{ $update->phone }}">
   	  </div>
   	  <div class="form-group">
   	  	<label for="">Student Address</label>
   	  	<input class="form-control" type="text" name="address" value="{{ $update->address }}">
   	  </div>
   	  <div class="form-group">
   	  	<label for="">Password</label>
   	  	<input class="form-control" type="password" name="password" value="{{ $update->password }}">
   	  </div>
   	  <button class="btn btn-success btn-block">Update</button>
   </form>  
   </div>
@endsection
@extends('master')
@section('content')
     @extends('master')
@section('content')
  <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Basic form elements</h2>
                          <div class="bg-dark text-success text-center p-2">
                            Edit Student
                          </div>
                          <form class="{{ URL::to('editStudent') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <input type="hidden" name="id" value="{{ $result->id }}">
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1"  name="name" value="{{ $result->name }}">
                            </div>
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Roll</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" name="roll" value="{{ $result->roll }}">    
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Father Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" name="fName" value="{{ $result->fathername }}">    
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Mother Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" name="mName" value="{{ $result->mothername }}">    
                              </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Email address</label>
                                  <input type="email" class="form-control p-input" id="exampleInputEmail1" name="email" value="{{ $result->email }}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Phone</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" name="phone" value="{{ $result->phone }}">
                              </div>
                          
                            <div class="form-group">
                                  <label for="exampleInputPassword1">Password</label>
                                  <input type="text" class="form-control p-input" id="exampleInputPassword1"  name="password" value="{{ $result->password }}">
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Address</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" name="address" value="{{ $result->address }}">
                              </div>
    
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                  
                                  <select class="form-control p-input" name="department" id="">
                                  <option value="">--Department--</option>
                                  <option value="CSE">CSE</option>
                                  <option value="EEE">EEE</option>
                                  <option value="ECE">ECE</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Admission Year</label>
                                  <input type="date" class="form-control p-input" id="exampleInputEmail1" placeholder="Enter year" name="year" value="{{ $result->year }}">
                              </div>
                             
                              <button type="submit" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                      </div>
                      </div>
@endsection
@endsection
@extends('master')
@section('content')
    <div class="col-12 col-lg-6 grid-margin">
                  <div class="card">
                      <div class="card-body">
                          <h2 class="card-title">Add Teacher</h2>
                          <div class="bg-dark text-success text-center">
                            <?php 
                   $message=Session::get('message');
                   if($message){
                    echo $message;
                    Session::put('message',null);
                   }
                 ?>
                          </div>
                          <form class="{{ URL::to('addTeacher') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                            <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Name</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Enter name" name="name">
                            </div>

                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Phone</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Enter phone" name="phone">
                              </div>
                          
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Teacher Address</label>
                                  <input type="text" class="form-control p-input" id="exampleInputEmail1" placeholder="Address" name="address">
                              </div>

                               <div class="form-group">
                                  <label>Image</label>
                                  <div class="row">
                                    <div class="col-12">
                                      <label for="exampleInputFile2" class="btn btn-outline-primary btn-sm"><i class="mdi mdi-upload btn-label btn-label-left"></i>Image</label>
                                      <input type="file" class="form-control-file" id="exampleInputFile2" name="image"/>
                                    </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="exampleInputEmail1">Department</label>
                                  
                                  <select class="form-control p-input" name="department" id="">
                                  <option value="CSE">CSE</option>
                                  <option value="EEE">EEE</option>
                                  <option value="ECE">ECE</option>
                                  <option value="BBA">BBA</option>
                                  <option value="MBA">MBA</option>
                                  </select>
                              </div>
                             
                              <button type="submit" class="btn btn-success btn-block">Submit</button>
                          </form>
                      </div>
                      </div>
                      </div>
@endsection
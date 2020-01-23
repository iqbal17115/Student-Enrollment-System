@extends('master')
@section('content')
       <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Student</h2>
                  @php
                    $student=DB::table('student_tbl')->count();
                  @endphp
                  <p style="font-family: cursive; font-size: 31px; font-weight: bold; text-align: center;">{{ $student }}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-1" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Teacher</h2>
                  @php
                    $teacher=DB::table('teacher_tbl')->count();
                  @endphp
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">{{ $teacher }}</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-2" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Monthly</h2>
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">3000Tk</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-3" class="card-float-chart"></div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">Revenue</h2>
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">Revenue</p>
                </div>
                <div class="dashboard-chart-card-container">
                  <div id="dashboard-card-chart-4" class="card-float-chart"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 grid-margin d-flex align-items-stretch">
              <div class="row">
                <div class="col-12 grid-margin d-flex align-items-stretch">
                  <div class="row">
                     <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><p class="mb-0">CSE- @php
                    $cse=DB::table('student_tbl')
                    ->where('department','CSE')
                    ->count();
                  @endphp
                  {{ $cse }}</p>
                      
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-facebook"><p class="mb-0">BBA- @php
                    $bba=DB::table('student_tbl')
                    ->where('department','BBA')
                    ->count();
                  @endphp
                  {{ $bba }}</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-twitter"><p class="mb-0">ECE- @php
                    $ece=DB::table('student_tbl')
                    ->where('department','ECE')
                    ->count();
                  @endphp
                  {{ $ece }}</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12 mb-3">
                      <div class="social-panel bg-google"><p class="mb-0">EEE- @php
                    $eee=DB::table('student_tbl')
                    ->where('department','EEE')
                    ->count();
                  @endphp
                  {{ $eee }}</p></div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-12">
                      <div class="social-panel bg-linkedin"><p class="mb-0">MBA- @php
                    $mba=DB::table('student_tbl')
                    ->where('department','MBA')
                    ->count();
                  @endphp
                  {{ $mba }}</p></div>
                    </div>
                  </div>
                </div>
@endsection
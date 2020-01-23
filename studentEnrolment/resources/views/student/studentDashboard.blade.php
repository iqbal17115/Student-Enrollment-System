@extends('studentMaster')
@section('content')
<div class="col-sm-6 col-md-3 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h2 class="card-title">All Student</h2>
                  @php
                    $student=DB::table('student_tbl')->count();
                  @endphp
                  <p style="font-family: cursive; font-size: 30px; font-weight: bold; text-align: center;">{{ $student }}</p>
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
  
@endsection
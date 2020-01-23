@extends('master')
@section('content')
  
          <div class="row user-profile">
            <div class="col-lg-12 side-left">
              <div class="card mb-4">
                <div class="card-body avatar">
                  <h2 class="card-title">Info</h2>
                  <img src="http://via.placeholder.com/47x47" alt="">
                  <p class="name">{{ $result->name }}</p>
                  <p class="designation">-  {{ $result->department }} -</p>
                  <a class="email" href="#">{{ $result->email }}</a>
                  <a class="number" href="#">{{ $result->phone }}</a>
                </div>
              </div>
              <div class="card mb-4">
                <div class="card-body overview">
                  <ul class="achivements">
                    <b>Daffodil International University.</b>

                  </ul>
                  <div class="wrapper about-user">
                    <h2 class="card-title mt-4 mb-3">About</h2>
                    <p>The total information of the student given below.</p>
                  </div>
                  <div class="info-links">
                    <a class="website" href="https://www.bootstrapdash.com/">
                      <i class="icon-globe icon">Father Name </i>
                      <span>{{ $result->fathername }}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-facebook icon">Mother Name </i>
                      <span>{{ $result->mothername }}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Address</i>
                      <span>{{ $result->address }}</span>
                    </a>
                    <a class="social-link" href="#">
                      <i class="icon-social-linkedin icon">Department</i>
                      <span>{{ $result->department }}</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            </div>
                
@endsection
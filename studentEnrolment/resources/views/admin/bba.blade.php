@extends('master')
@section('content')
    <div class="card">
            <div class="card-body">
              <h2 class="card-title">Data table</h2>
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                      <tr>
                          <th>Roll</th>
                          <th>Name</th>
                          <th>Phone</th>
                          <th>Image</th>
                          <th>Address</th>
                          <th>Department</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($result AS $result)
                       <tr>
                       	<td>{{ $result->roll }}</td>
                       	<td>{{ $result->name }}</td>
                       	<td>{{ $result->phone }}</td>
                       	<td><img style="width: 180px;height: 160px;" src="{{ Storage::url($result->image) }}" alt="Fail"></td>
                       	<td>{{ $result->address }}</td>
                       	<td>{{ $result->department }}</td>
                       	<td>
                       		<button  class="btn btn-outline-success">View</button>
                       		<button class="btn btn-outline-info">Edit</button>
                       		<button class="btn btn-outline-danger">Delete</button>
                       	</td>
                       </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
@endsection
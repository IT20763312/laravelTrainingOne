
@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Students details Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Age : {{ $students->age }}</p>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Phone : {{ $students->mobile }}</p>
  </div>
      
</hr>
<a href="{{ url('/view') }}" class="btn btn-success btn-sm" title="view students">
                            <i class="fa fa-plus" aria-hidden="true"></i> View Students
                        </a>
                        <a href="{{ url('/') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add a New Student
                        </a>
  </div>
</div>
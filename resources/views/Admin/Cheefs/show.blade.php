@extends('Admin.layout')

@section('content')
<style>
  body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}

    </style>
<div class="container">
    <div class="main-body">
    
         
          <div class="d-flex justify-content-between ">

            <h3> Cheefs / Show / {{$Cheef->name}} </h3>
            <a href="{{route('Admin.Cheefs.index')}}" class="btn  btn-info" >Back</a>
        
          </div>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="{{asset('uploads/Cheefs/'.$Cheef->img)}}" alt="Admin" class="rounded-circle" width="200" height="200">
                    <div class="mt-3">
                      <h4>{{$Cheef->name}}</h4>
                      <h4> Specialization: {{$Cheef->spec}}</h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$Cheef->name}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$Cheef->email}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$Cheef->phone}}
                    </div>
                  </div>
                  <hr>
                
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{$Cheef->address}}
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <a href="{{route('Admin.Cheefs.edit',$Cheef->id)}}" name="edit" class="btn btn-info"> Edit</a>
                        <a href="{{route('Admin.Cheefs.delete',$Cheef->id)}}"  class="btn btn-danger">Delete</a>
                   
                    </div>
                  </div>
                </div>
              </div>

           


            </div>
          </div>

        </div>
    </div>
  @endsection
  
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

            <h3> Reservations / Show / {{$booking->id}} </h3>
            <a href="{{route('Admin.Reservations.index')}}" class="btn  btn-info" >Back</a>
        
          </div>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            
            <div class="col-md-12">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>  {{$booking->name}} </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>  {{$booking->email}} </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>  {{$booking->phone}} </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Number OF Guests</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4 >  {{$booking->gest_number}} </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Time OF Reservation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>  {{$booking->time->name}} </h4>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Date OF Reservation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>  {{$booking->date}} </h4>
                    </div>
                  </div>
                  <hr>
                
                  
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Messages</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>  {{$booking->message}} </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                        <a href="{{route('Admin.Reservations.index')}}" name="edit" class="btn btn-info"> Back</a>
                        <a href="{{route('Admin.Reservations.delete',$booking->id)}}"  class="btn btn-danger">Delete</a>
                   
                    </div>
                  </div>
                </div>
              </div>

           


            </div>
          </div>

        </div>
    </div>
  @endsection
  
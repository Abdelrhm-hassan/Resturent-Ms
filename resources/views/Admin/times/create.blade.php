@extends('Admin.layout')

@section('content')
    

<div class="container p-5 ">       
  <div class="d-flex justify-content-between ">

    <h3> Time OF Date / Create  / New </h3>
    <a href="{{route('Admin.times.index')}}" class="btn  btn-info" >Back</a>

  </div>

<!-- edit catagory section -->

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
       <h2>Add Time</h2>
    </div>
  <div class="card-body">
    <form method="POST" action="{{route('Admin.times.store')}}" >
     @csrf
   
          @include('Admin.inc.error')
      <div class="form-group">
        <label for=""> Name</label>
        <input name="name" type="text" class="form-control input-lg" >
      </div>
     
     
      <div class="form-footer pt-5 border-top">
		  	<button type="submit" class="btn  btn-primary ">Save</button>
		  	<a href="{{route('Admin.times.index')}}"  class="btn btn-danger ">Cancell</a>

		  </div>
    </form>
  </div>
</div>
</div>





  
  <!-- end edit catagory section -->


  @endsection

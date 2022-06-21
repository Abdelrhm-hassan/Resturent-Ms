@extends('Admin.layout')

@section('content')
    

<div class="container p-5  ">       
  <div class="d-flex justify-content-between ">

    <h3> Catagories / Edit / {{$cats->name}} </h3>
    <a href="{{route('Admin.cats.index')}}" class="btn  btn-info" >Back</a>

  </div>

<!-- edit catagory section -->

<div class="card card-default">
    <div class="card-header card-header-border-bottom">
       <h2>Edit Catagory</h2>
    </div>
  <div class="card-body">
    <form method="POST" action="{{route('Admin.cats.update')}}" >
      @csrf
      @include('Admin.inc.error')
      <div class="form-group">
        <label for=""> Catagory ID</label>
        <input type="text" name="id" hidden class="form-control input-lg"  value="{{$cats->id}}" >
      </div>

      <div class="form-group">
        <label for="">Catagory Name</label>
        <input type="text" name="name" class="form-control input-lg"  value="{{$cats->name}}">
      </div>
     
     
      <div class="form-footer pt-5 border-top">
		  	<button type="submit" class="btn  btn-primary ">Save</button>
		  	<a href="{{route('Admin.cats.index')}}"  class="btn btn-danger ">Cancell</a>

		  </div>
    </form>
  </div>
</div>
</div>





  
  <!-- end edit catagory section -->


  @endsection

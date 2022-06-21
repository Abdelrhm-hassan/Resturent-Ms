@extends('Admin.layout')

@section('content')
<style>

  
  </style>

<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > Reservations / Create / New Member </h3>
    <a href="{{route('Admin.Reservations.index')}}" class="btn  btn-info" >Back</a>

</div>
<div class="container  tm-mt-big tm-mb-big">
  <div class="row card card-default">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row ">
          <div class=" card-header card-header-border-bottom  col-12">
            <h2 class=" tm-block-title d-inline-block">Add Member</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
      
          <div class=" card-body col-xl-6 col-lg-6 col-md-12">

            <form action="{{route('Admin.Reservations.store')}}" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
             @csrf
              @include('Admin.inc.error')


              <div class="form-group mb-3">
                <label for="name" > Name </label>
                <input id="name" name="name" type="text" class="form-control validate" required />
              </div>
            
              <div class="form-group mb-3">
                <label for="name" >Phone Number</label>
                <input id="name" name="phone" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >Email</label>
                <input id="name" name="email" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" > Number oF Guest </label>
                <input id="name" name="gest_number" type="number" class="form-control validate" required />
              </div>
            
             
          
              <div class="form-group mb-3">
                <label for="name" >Date oF Reservations </label>
                <input id="name" name="date" type="date" class="form-control validate" required />
              </div>
              
              <div class="form-group">
                <label for="category">Category</label>
                
                <select name="time_id" class="custom-select tm-select-accounts"id="category">
                   <option selected>Select Category</option>
                      @foreach ($time as $t)
                    <option name="time_id"value="{{$t->id}}">{{$t->name}}</option>
                    
                  @endforeach
                  
                </select>
              </div>
              
              <div class="form-group mb-3">
                <label for="name" > Description</label>
                <textarea id="name" name="message" type="text" class="form-control validate" required ></textarea>
              </div>
        
         
      <div class="form-footer my-3 pt-5">
		  	<button type="submit" class="btn  btn-primary ">Save</button>
		  	<a href="{{route('Admin.Reservations.index')}}"  class="btn btn-danger ">Cancell</a>

		  </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>

</div>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>

</script>
  @endsection

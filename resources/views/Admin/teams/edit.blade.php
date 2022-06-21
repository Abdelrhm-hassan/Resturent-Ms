@extends('Admin.layout')

@section('content')
<style>

  
  </style>

<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > Teams / Edit / {{$Teams->name}} </h3>
    <a href="{{route('Admin.Teams.index')}}" class="btn  btn-info" >Back</a>

</div>
<div class="container  tm-mt-big tm-mb-big">
  <div class="row card card-default">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row ">
          <div class=" card-header card-header-border-bottom  col-12">
            <h2 class=" tm-block-title d-inline-block">Edit Member</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
      
          <div class=" card-body col-xl-6 col-lg-6 col-md-12">

            <form action="{{route('Admin.Teams.update')}}" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
             @csrf
              @include('Admin.inc.error')


              <div class="form-group mb-3">
                <label for="name" > Name </label>
                <input id="name" value="{{$Teams->name}}" name="name" type="text" class="form-control validate" required />
                <input id="name" value="{{$Teams->id}}" hidden name="id" type="text" class="form-control validate" required />
              </div>
            
              <div class="form-group mb-3">
                <label for="name" >Phone Number</label>
                <input id="name" value="{{$Teams->phone}}" name="phone" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" > Emaill </label>
                <input id="name" value="{{$Teams->email}}" name="email" type="text" class="form-control validate" required />
              </div>
            
              <div class="form-group mb-3">
                <label for="name" >Code</label>
                <input id="name" value="{{$Teams->code}}" name="address" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >Specialization</label>
                <input id="name" value="{{$Teams->spec}}" name="spec" type="text" class="form-control validate" required />
              </div>
          
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
         
            <img  src="{{asset('uploads/Teams/'.$Teams->img)}}" class="tm-product-img-dummy mx-auto"  width="300" height="250" />
         
            <label  class="btn btn-primary my-5 btn-block mx-auto">The Old Image</label>

         
          </div>
         
      <div class="form-footer my-3 pt-5">
		  	<button type="submit" class="btn  btn-primary ">Save</button>
		  	<a href="{{route('Admin.Teams.index')}}"  class="btn btn-danger ">Cancell</a>

		  </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.EditObjectURL(event.target.files[0]);
};
</script>
<script>

</script>
  @endsection

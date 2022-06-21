@extends('Admin.layout')

@section('content')
<style>

  
  </style>

<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > admins / Create / New Member </h3>
    <a href="{{route('Admin.admins.index')}}" class="btn  btn-info" >Back</a>

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

            <form action="{{ route('Admin.admins.store') }}" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
                @csrf
              @include('Admin.inc.error')


              <div class="form-group mb-3">
                <label for="name" >  Name </label>
                <input id="name" name="name" type="text" class="form-control validate" required />
              </div>
            
             
              <div class="form-group mb-3">
                <label for="name" >Passoword</label>
                <input id="name" name="password" type="password"  class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" > Emaill </label>
                <input id="name" name="email" type="text" class="form-control validate" required />
              </div>
            
             
              <div class="form-group mb-3">
                <label for="name" >Specialization</label>
                <input id="name" name="spec" type="text" class="form-control validate" required />
              </div>
              
              <div class="form-group mb-3">
               
                  <select class="form-select" value="number-guests" name="gest_number" id="number-guests">
                      <option value="number-guests">Role</option>
                      <option name="1" id="1">Admin</option>
                    
                  </select>
            
              </div>
          
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
         
            <p>
                <input  class="btn btn-primary btn-block mx-auto" type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
            </p>

          <img id="output" height="200"  class="tm-product-img-dummy mx-auto"  />

                
          <p>
            <label class="btn btn-primary my-5 btn-block mx-auto" for="file" style="cursor: pointer;">Upload Image</label>
          </p>

          </div>
         
      <div class="form-footer my-3 pt-5">
		  	<button type="submit" class="btn  btn-primary ">Save</button>
		  	<a href="{{route('Admin.admins.index')}}"  class="btn btn-danger ">Cancell</a>

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
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>

</script>
  @endsection

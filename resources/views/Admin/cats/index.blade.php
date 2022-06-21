@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> Catagories </h3>
    
    <a href="{{route('Admin.cats.create')}}" class="btn  btn-info" >Add Catagory</a>

</div>

<div class="alert alert-success" id="success_msg" style="display: none;">
  تم الحفظ بنجاح
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Catagory Name</th>

        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($cats as $cat )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$cat->name}}</td>
        <td>
          <a href="{{route('Admin.cats.edit',$cat->id)}}" name="edit" class="btn btn-info"> Edit</a>
          <a   href="{{route('Admin.cats.delete',$cat->id)}}"  class="btn btn-danger">Delete</a>
          <a   offer_id="{{$cat->id}}"  class="btn btn-danger delete_btn">Delete by Ajax</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $cats->render()!!}
 </div>
</div>

@endsection
@section('script')
    

<script>
  $(document).on('click', '.delete_btn', function (e) {
      e.preventDefault();
        var offer_id =  $(this).attr('offer_id');
      $.ajax({
          type: 'post',
           url: "/cats/delete-ajax",
          data: {
              '_token': "{{csrf_token()}}",
              'id' :offer_id
          },
          success: function (data) {
              if(data.status == true){
                  $('#success_msg').show();
              }
              $('.offerRow'+data.id).remove();
          }, error: function (reject) {
          }
      });
  });
</script>
 

      
  @endsection

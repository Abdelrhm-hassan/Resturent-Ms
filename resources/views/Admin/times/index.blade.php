@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> Time OF Date  </h3>
    
    <a href="{{route('Admin.times.create')}}" class="btn  btn-info" >Add Time</a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col"> Name</th>

        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($times as $cat )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$cat->name}}</td>
        <td>
          <a href="{{route('Admin.times.edit',$cat->id)}}" name="edit" class="btn btn-info"> Edit</a>
        <a   href="{{route('Admin.times.delete',$cat->id)}}"  class="btn btn-danger">Delete</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $times->render()!!}
 </div>
</div>




  @endsection
  @section('script')
  <script>
  




</script>
 

      
  @endsection

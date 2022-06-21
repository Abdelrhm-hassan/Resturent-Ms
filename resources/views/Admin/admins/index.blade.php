@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> admins </h3>
    
    <a href="{{route('Admin.admins.create')}}" class="btn  btn-info" >Add admin </a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Img</th>

        <th scope="col">admin  Name</th>

        <th scope="col">Spec</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($admins as $admin )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img class="rounded-circle" src="{{asset('uploads/admins/'.$admin->img)}} " height="40px" alt=""></td>

        <td>{{$admin->name}}</td>
        <td>{{$admin->spec}}</td>
        <td>
          <a href="{{route('Admin.admins.show',$admin->id)}}" name="show" class="btn btn-info"> Show</a>
          <a href="{{route('Admin.admins.edit',$admin->id)}}" name="edit" class="btn btn-info"> Edit</a>
          <a href="{{route('Admin.admins.delete',$admin->id)}}"  class="btn btn-danger">Delete</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $admins->render()!!}
 </div>
</div>




  @endsection
  @section('script')
  <script>
  




</script>
 

      
  @endsection

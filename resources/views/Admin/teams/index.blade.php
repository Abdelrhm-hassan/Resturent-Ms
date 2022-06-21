@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> Teams </h3>
    
    <a href="{{route('Admin.Teams.create')}}" class="btn  btn-info" >Add Team </a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Img</th>

        <th scope="col">Team  Name</th>

        <th scope="col">Spec</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($Teams as $Team )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img class="rounded-circle" src="{{asset('uploads/Teams/'.$Team->img)}} " height="40px" alt=""></td>

        <td>{{$Team->name}}</td>
        <td>{{$Team->spec}}</td>
        <td>
          <a href="{{route('Admin.Teams.show',$Team->id)}}" name="show" class="btn btn-info"> Show</a>
          <a href="{{route('Admin.Teams.edit',$Team->id)}}" name="edit" class="btn btn-info"> Edit</a>
          <a href="{{route('Admin.Teams.delete',$Team->id)}}"  class="btn btn-danger">Delete</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $Teams->render()!!}
 </div>
</div>




  @endsection
  @section('script')
  <script>
  




</script>
 

      
  @endsection

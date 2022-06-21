@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> Cheefs </h3>
    
    <a href="{{route('Admin.Cheefs.create')}}" class="btn  btn-info" >Add Cheef </a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Img</th>

        <th scope="col">Cheef  Name</th>

        <th scope="col">Spec</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($Cheefs as $Cheef )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img class="rounded-circle" src="{{asset('uploads/Cheefs/'.$Cheef->img)}} " height="40px" alt=""></td>

        <td>{{$Cheef->name}}</td>
        <td>{{$Cheef->spec}}</td>
        <td>
          <a href="{{route('Admin.Cheefs.show',$Cheef->id)}}" name="show" class="btn btn-info"> Show</a>
          <a href="{{route('Admin.Cheefs.edit',$Cheef->id)}}" name="edit" class="btn btn-info"> Edit</a>
          <a href="{{route('Admin.Cheefs.delete',$Cheef->id)}}"  class="btn btn-danger">Delete</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $Cheefs->render()!!}
 </div>
</div>




  @endsection
  @section('script')
  <script>
  




</script>
 

      
  @endsection

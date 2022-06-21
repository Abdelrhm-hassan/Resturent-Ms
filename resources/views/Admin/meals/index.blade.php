@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> Meals </h3>
    
    <a href="{{route('Admin.Meals.create')}}" class="btn  btn-info" >Add Meal </a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Img</th>

        <th scope="col">Meal Name</th>

        <th scope="col">price</th>
        <th scope="col">Catagory</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($Meals as $Meal )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img class="rounded-circle" src="{{asset('uploads/Meal/'.$Meal->img)}} " height="40px" alt=""></td>

        <td>{{$Meal->name}}</td>
        <td>{{$Meal->price}} EGP</td>
       
        <td>{{$Meal->cat->name}}</td>

     
        <td>
          <a href="{{route('Admin.Meals.show',$Meal->id)}}" name="show" class="btn btn-info"> Show</a>
          <a href="{{route('Admin.Meals.edit',$Meal->id)}}" name="edit" class="btn btn-info"> Edit</a>
          <a href="{{route('Admin.Meals.delete',$Meal->id)}}"  class="btn btn-danger">Delete</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $Meals->render()!!}
 </div>
</div>




  @endsection
  @section('script')
  <script>
  




</script>
 

      
  @endsection

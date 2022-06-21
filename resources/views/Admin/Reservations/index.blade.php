@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
  
  
<div class="d-flex justify-content-between ">

    <h3> Reservations </h3>
    
    <a href="{{route('Admin.Reservations.create')}}" class="btn  btn-info" >Add Reservation </a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Reservation Name</th>
        <th scope="col">Number of Guest</th>
        
        <th scope="col">Date</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($booking as $Reservation )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>

        <td>{{$Reservation->name}}</td>
        <td>{{$Reservation->gest_number}}</td>
        <td>{{$Reservation->date}}</td>
        <td>{{$Reservation->phone}}</td>

        <td>
          <a href="{{route('Admin.Reservations.show',$Reservation->id)}}" name="show" class="btn btn-info"> Show</a>
          {{-- <a href="{{route('Admin.Reservations.edit',$Reservation->id)}}" name="edit" class="btn btn-info"> Edit</a> --}}
          <a href="{{route('Admin.Reservations.delete',$Reservation->id)}}"  class="btn btn-danger">Delete</a>
      </td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>


<div class=" pagination-flat pagination-flat-rounded p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
   {!! $booking->render()!!}
 </div>
</div>




  @endsection
  @section('script')
  <script>
  




</script>
 

      
  @endsection

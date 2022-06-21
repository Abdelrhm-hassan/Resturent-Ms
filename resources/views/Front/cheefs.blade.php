@extends('Front.main')
@section('content')
    







    <!-- ***** Menu Area Starts ***** -->


      
       
    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
      
        {{-- Nav menu --}}

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('Front.index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"> CheefS </li>
            </ol>
          </nav>

        <div class="container py-3">
       

            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Perfect Cheefs</h6>
                        <h2>We offer the best ingredients for you</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                @foreach ($cheef as $item)
                <div class="col-lg-4">
                    <div class="chef-item">
                      
                        <div class="thumb">
                           
                            <img height="250" width="250" src="{{asset('uploads/Cheefs/'.$item->img)}}" alt="Meal Name {{$item->name}}">
                        </div>
                        <div class="down-content">

                            <h5>الاسم: {{$item->name}}</h4>
                            <h5>التخصص: {{$item->spec}}</h5>
                            <h5>رقم الهاتف: {{$item->phone}}</h5>
                            <h5>العنوان: {{$item->address}}</h5>
                           
                           

                      
                        </div>
                    </div>
                </div>
            @endforeach
             
            </div>
  
        </div>
               
        <div class="p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
            {!! $cheef->render()!!}
          </div>
    </section>
   
    <!-- ***** Chefs Area Ends ***** -->
    <!-- ***** Menu Area Ends ***** -->



@endsection
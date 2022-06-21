@extends('Front.main')
@section('content')
    







    <!-- ***** Menu Area Starts ***** -->


      
       
    <!-- ***** Chefs Area Starts ***** -->
    <section class="section" id="chefs">
      
        {{-- Nav menu --}}

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('Front.index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"> Menues List</li>
            </ol>
          </nav>

        <div class="container py-3">
       

            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center">
                    <div class="section-heading">
                        <h6>Our Perfect Meals</h6>
                        <h2>We offer the best Food for you</h2>
                    </div>
                </div>
            </div>
           
            <div class="row">
                @foreach ($meal as $item)
                <div class="col-lg-3">
                    <div class="chef-item">
                      
                        <div class="thumb">
                           
                            <img height="200" width="250" src="{{asset('uploads/Meal/'.$item->img)}}" alt="Meal Name {{$item->name}}">
                        </div>
                        <div class="down-content">

                            <h5>الاسم: {{$item->name}}</h4>
                            <h5>السعر: {{$item->price}} جم</h5>
                            <h6> التصنيف: {{$item->cat->name}}</h6>
                            الوصف:
                            <span>{{$item->desc}}
                            </span> 
                           
                           

                      
                        </div>
                    </div>
                </div>
            @endforeach
             
            </div>
  
        </div>
               
        <div class="p-2 d-flex    justify-content-center"  data-wow-delay="0.3s">
 
            {!! $meal->render()!!}
          </div>
    </section>
   
    <!-- ***** Chefs Area Ends ***** -->
    <!-- ***** Menu Area Ends ***** -->



@endsection
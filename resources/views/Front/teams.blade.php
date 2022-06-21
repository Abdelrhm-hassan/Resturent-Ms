@extends('Front.main')
@section('content')
    









    <!-- ***** Menu Area Starts ***** -->

    <section class="section" id="menu">

        {{-- Nav menu --}}
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('Front.index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Team Member</li>
            </ol>
          </nav>

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Team</h6>
                        <h2>The Best Talented Members Of Our Team</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-12">
                <div class="owl-menu-item owl-carousel">
                @foreach ($team as $item)
                <div class="item">
                    <div class='card ' style="
                    background-image: url({{asset('uploads/Teams/'.$item->img)}});
                    ">
                        <div class='info'>
                            <h1 class='title'>{{$item->name}}</h1>
                            <h3 class='title'> {{$item->code}}</h3>
                            <h4 class='description'>{{$item->spec}}</h4>
                          <div class="main-text-button">
                              <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                          </div>
                        </div>
                    </div>
                </div>
                @endforeach
                   
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Menu Area Ends ***** -->



@endsection
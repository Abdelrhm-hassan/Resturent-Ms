
@extends('Front.main')


@section('content')



    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
         {{-- Nav menu --}}

         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('Front.index')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>

        <div class="container py-5 ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>We Leave A Delicious Memory For You</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                       <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus minima obcaecati, atque id, excepturi et hic esse voluptates iure harum eos ex dolore non placeat impedit a nobis vel nihil!
                           Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim libero quia magni laudantium ad. Repellat hic facere saepe veniam! Fugiat, quisquam. Saepe eos excepturi alias mollitia, aspernatur reiciendis molestiae. Mollitia.
                       </p>
                        <div class="row">
                            <div class="col-4">
                                <img src="{{asset('Front//images/about-thumb-01.jpg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{asset('Front//images/about-thumb-02.jpg')}}" alt="">
                            </div>
                            <div class="col-4">
                                <img src="{{asset('Front//images/about-thumb-03.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-content">
                        <div class="thumb">
                            <a rel="nofollow" href="http://youtube.com"><i class="fa fa-play"></i></a>
                            <img src="{{asset('Front//images/about-video-bg.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->






@endsection
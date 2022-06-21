<style>
    .foot{
        margin: 0px !important;
        padding: 0px !important;

    }
</style> 
    <!-- ***** Footer Start ***** -->
    <footer class="foot" >
        <div class="container">
            <div class="row">
                <div class="col-lg-4 pt-5 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="https://www.facebook.com/Abo.nagy0216/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/abdonagy2022/"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="https://www.instagram.com/abdo0215/"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="{{route('Front.index')}}"><img width="300" src="{{asset('Front/images/klassy-logo-removebg-preview.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 pt-5 col-xs-12">
                    
                    <div class="left-text-content">
                        <p>© Copyright AlDhann Resturent
                        
                        <br>Design:<a href="{{route('Front.teams')}}" > PHPTeam</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{asset('Front/js/jquery-2.1.0.min.js')}}"></script>

    <!-- Bootstrap -->
    <script src="{{asset('Front/js/popper.js')}}"></script>
    <script src="{{asset('Front/js/bootstrap.min.js')}}"></script>

    <!-- Plugins -->
    <script src="{{asset('Front/js/owl-carousel.js')}}"></script>
    <script src="{{asset('Front/js/accordions.js')}}"></script>
    <script src="{{asset('Front/js/datepicker.js')}}"></script>
    <script src="{{asset('Front/js/scrollreveal.min.js')}}"></script>
    <script src="{{asset('Front/js/waypoints.min.js')}}"></script>
    <script src="{{asset('Front/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('Front/js/imgfix.min.js')}}"></script> 
    <script src="{{asset('Front/js/slick.js')}}"></script> 
    <script src="{{asset('Front/js/lightbox.js')}}"></script> 
    <script src="{{asset('Front/js/isotope.js')}}"></script> 
    
    <!-- Global Init -->
    <script src="{{asset('Front/js/custom.js')}}"></script>
    @yield('script')
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>
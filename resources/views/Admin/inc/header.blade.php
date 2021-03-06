<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Admin Dashboard</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
  <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

  {{-- Bootsstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- PLUGINS CSS STYLE -->
  <link href="{{asset('Admin/assets/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
  <link href="{{asset('Admin/assets/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
  <link href="{{asset('Admin/assets/plugins/flag-icons/css/flag-icon.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('Admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
  <link href="{{asset('Admin/assets/plugins/ladda/ladda.min.css')}}" rel="stylesheet" />
  <link href="{{asset('Admin/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
  <link href="{{asset('Admin/assets/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="{{asset('Admin/assets/css/sleek.css')}}" />

  

  <!-- FAVICON -->
  <link href="{{asset('Admin/assets/img/favicon.png')}}" rel="shortcut icon" />

  <script src="{{asset('Admin/assets/plugins/nprogress/nprogress.js')}}"></script>
</head>


  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    <div class="mobile-sticky-body-overlay"></div>

    <div class="wrapper">
      
              <!--
          ====================================
          ????????? LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="{{route('Front.index')}}" target="_blank" >
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Admin Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

             
                <ul  class="collapse show"  id="components">
                  <div class="sub-menu">
                    
                    <li class="nav-text " >
                      <a     href="{{route('Admin.cats.index')}}">Catagories</a>
                    </li>
                    <li class="nav-text " >
                      <a     href="{{route('Admin.times.index')}}">Time OF Date</a>
                    </li>
                    
                    <li class="nav-text" >
                      <a href="{{route('Admin.Cheefs.index')}}">Cheef</a>
                    </li>
                    <li >
                      <a href="{{route('Admin.Meals.index')}}">Menus</a>
                    </li> 
                    <li >
                      <a href="{{route('Admin.Reservations.index')}}">Reservations</a>
                    </li>
                    
                    <li >
                      <a href="{{route('Admin.Teams.index')}}">Teams</a>
                    </li>
                    <li >
                      <a href="{{route('Admin.admins.index')}}">Admins</a>
                    </li>
                  </div>
                </ul>

                

            <hr class="separator" />

          
          </div>
        </aside>

      

      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                 
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="{{asset('uploads/admins/'.Auth::user()->img)}}" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"> {{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="{{asset('uploads/admins/'.Auth::user()->img)}}" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          {{ Auth::user()->name }} <small class="pt-1"> {{ Auth::user()->email }}</small>
                        </div>
                      </li>

                      <li>
                        <a href="{{route('Admin.admins.show',Auth::user()->id)}}">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                     
                    
                      <li>
                        <a href="{{route('Admin.admins.edit',Auth::user()->id)}}">

                          <i class="mdi mdi-settings"></i>  Edit  Account InFo </a>
                      </li>

                      <li class="dropdown-footer">
                        <a type="submit"  
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                         <i class="mdi mdi-logout"></i> Log Out </a>

                        <form id="logout-form"  action="{{ route('logout') }}" method="POST">
                          @csrf
                         
                        </form>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>

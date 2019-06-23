<!DOCTYPE html><html lang="en">
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 14:16:46 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
     <title>Kandt Museum | @yield('title')</title>
    <meta content="Admin Dashboard" name="description">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{asset('assets/images/logo.png')}}">
        <!-- Dropzone css -->
    <link href="https://themesbrand.com/lexa/html/plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css">
        <!-- DataTables -->
    <link href="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="https://themesbrand.com/lexa/html/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="https://themesbrand.com/lexa/html/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left"><a href="{{url('admin/dashboard')}}" class="logo"><span>                
                    <img src="{{asset('assets/images/logo.jpg')}}" alt="" height="22">
                        <span style="color: white;">Kandt Museum </span>
                </a></div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list d-none d-sm-block">
                        <form role="search" class="app-search">
                            <div class="form-group mb-0"><input type="text" class="form-control" placeholder="Search.."> <button type="submit"><i class="fa fa-search"></i></button></div>
                        </form>
                    </li>
                    <li class="dropdown notification-list"><a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"><i class="ti-bell noti-icon"></i>
<!--                    <span class="badge badge-pill badge-danger noti-icon-badge">3</span>-->
                    </a>

                    </li>
                    <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset('img/user-avatar.png')}}" alt="user" class="rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <!-- item--> <a class="dropdown-item" href="{{route('manager.profile')}}"><i class="mdi mdi-account-circle m-r-5"></i> Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="mdi mdi-power text-danger"></i> Logout</a>



                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>


                            </div>
                        </div>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect"><i class="mdi mdi-menu"></i></button></li>
                    <li class="d-none d-sm-block">
                        <div class="dropdown pt-3 d-inline-block"><a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"><a class="dropdown-item" href="{{route('artifact.create')}}">New Artifact</a> <a class="dropdown-item" href="{{route('users.create')}}">New User</a> <a class="dropdown-item" href="{{route('locations.create')}}">New Location</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{route('artifactcategories.create')}}">New Artifact Category</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div><!-- Top Bar End -->
                <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="slimscroll-menu" id="remove-scroll">
                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu" id="side-menu">
                        <li class="menu-title">DashBoard</li>
                        <li><a href="{{url('admin/dashboard')}}" class="waves-effect"><i class="mdi mdi-calendar-check"></i><span> Profile</span></a></li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="fas fa-university"></i><span> Artifact <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="{{route('artifact.index')}}">All Artifacts</a></li>
                                <li><a href="{{route('artifact.create')}}">Add New Artifact</a></li>

                                {{-- <li><a href="{{route('institutions.index')}}">All Institutions</a></li> --}}
                                {{-- <li><a href="{{route('institutions.create')}}">Add New Institution</a></li> --}}
<!--                                <li><a href="email-read.html">Intitution Members</a></li>-->
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="fas fa-university"></i><span> Artifact Category <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="{{route('artifactcategories.index')}}">All Categories</a></li>
                                <li><a href="{{route('artifactcategories.create')}}">Add New Category</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="fas fa-university"></i><span> visit schedule <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="{{route('visitschedule.index')}}">All visit schedules</a></li>
                                <li><a href="{{route('visitschedule.create')}}">Add New schedule</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="fas fa-university"></i><span> exhibition schedule <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="{{route('exhibitions.index')}}">All exhibition schedules</a></li>
                                <li><a href="{{route('exhibitions.create')}}">Add New schedule</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);" class="waves-effect"><i class="fas fa-user-friends"></i><span> Manage Users <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="{{route('users.index')}}">All Users</a></li>
                                <li><a href="{{route('users.create')}}">Add New User</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- Sidebar -->
                <div class="clearfix"></div>
            </div><!-- Sidebar -left -->
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @include('partials.success')
        @include('partials.error')
     @yield('content')
           <!-- End Right content here -->
        <!-- ============================================================== -->
    <!-- END wrapper -->
    <!-- jQuery  -->
    
    
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/metisMenu.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('assets/js/waves.min.js')}}"></script>   
    <script src="{{asset('assets/js/dropzone.js')}}"></script>   
        <!-- Dropzone js -->
        
    <script src="https://themesbrand.com/lexa/html/plugins/jquery-sparkline/jquery.sparkline.min.js"></script><!-- Required datatable js -->
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/jszip.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/pdfmake.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/vfs_fonts.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.html5.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.print.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/buttons.colVis.min.js"></script><!-- Responsive examples -->
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="https://themesbrand.com/lexa/html/plugins/datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->
    <script src="{{asset('assets/pages/datatables.init.js')}}"></script><!-- App js -->
    <script src="{{asset('assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from themesbrand.com/lexa/html/vertical-teal/tables-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Oct 2018 14:16:46 GMT -->
</html>

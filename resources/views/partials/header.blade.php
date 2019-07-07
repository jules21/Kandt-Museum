<header id="header" id="home">
        <div class="container header-top">
            <div class="row">
                <div class="col-6 top-head-left">
                    <ul>
                        <li><a href="{{url('about')}}">Visit Us</a></li> 
                        <li><a href="{{url('artifact')}}">Buy </a></li>
                    </ul>
                </div>
                <div class="col-6 top-head-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                      {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                      <li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
        <hr>
      <div class="container">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
                  <a href="/" class="text-white text-uppercase lead">Kandt House Museum</a>
              {{-- <a href="index.html"><img src="img/logo.png" alt="" title="" /> --}}
              </a>
            </div>
            <nav id="nav-menu-container">
                  <ul class="nav-menu">
                    <li class="menu-active"><a href="/">Home</a></li>
                    <li><a href="{{url('about')}}">About</a></li>
                    <li><a href="{{url('gallery')}}">Gallery</a></li>
                    <li><a href="{{url('event')}}">Events</a></li>
                    <li><a href="{{url('artifact')}}">Buy</a></li>
                    <li><a href="{{url('contact')}}">Contact</a></li>
                    
                    @if (Auth::check())
                    <li class="menu-has-children"><a href="#">{{ Auth::user()->role->name }}</a>
                      <ul>
                        @if (Auth::user()->isManager())
                        <li>
                            <a href="{{ route('manager.dashboard') }}">
                                  {{ __('Dashboard') }}
                              </a>
                        @endif
                        <li>
                          <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                      </ul>
                    </li> 
                    @else
                    <li><a href="{{url('login')}}">Login</a></li>  
                    @endif
                  </ul>
                </nav>
                <!-- #nav-menu-container -->
          </div>
      </div>
    </header><!-- #header -->
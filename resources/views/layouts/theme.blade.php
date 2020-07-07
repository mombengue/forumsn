    @include('layouts.head')

    <body>
        <div class="wrapper">
            <header>
                <div class="container">
                    <div class="header-data">
                        <div class="logo">
                            <a href="{{ route('home') }}" title=""><img src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                        </div><!--logo end-->
                        <div class="search-bar">
                            <form>
                                <input type="text" name="search" placeholder="Search...">
                                <button type="submit"><i class="la la-search"></i></button>
                            </form>
                        </div><!--search-bar end-->
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('home') }}" title="">
                                        <span><img src="{{ asset('assets/images/icon1.png') }}" alt=""></span>
                                        Accueil
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        <span><img src="{{ asset('assets/images/icon5.png') }}" alt=""></span>
                                        Ecrire un article
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="" class="not-box-open">
                                        <span><img src="{{ asset('assets/images/icon7.png') }}" alt=""></span>
                                        Notification
                                    </a>
                                    <div class="notification-box">
                                        <div class="nt-title">
                                            <h4>Setting</h4>
                                            <a href="#" title="">Clear all</a>
                                        </div>
                                        <div class="nott-list">
                                            <div class="notfication-details">
                                                  <div class="noty-user-img">
                                                      <img src="images/resources/ny-img1.png" alt="">
                                                  </div>
                                                  <div class="notification-info">
                                                      <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                                      <span>2 min ago</span>
                                                  </div><!--notification-info -->
                                              </div>
                                              <div class="view-all-nots">
                                                  <a href="#" title="">View All Notification</a>
                                              </div>
                                        </div><!--nott-list end-->
                                    </div><!--notification-box end-->
                                </li>
                            </ul>
                        </nav><!--nav end-->
                        <div class="menu-btn">
                            <a href="#" title=""><i class="fa fa-bars"></i></a>
                        </div><!--menu-btn end-->
                        <div class="user-account">
                            <div class="user-info">
                                <img src="http://via.placeholder.com/30x30" alt="">
                                <a href="#" title="">Vous</a>
                                <i class="la la-sort-down"></i>
                            </div>
                            <div class="user-account-settingss">
                                <h3 class="tc">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                                <ul class="us-links">
                                    <li><a href="{{ route('home') }}" title="">Tableau de bord</a></li>
                                <li><a href="{{ route('profiles.show', Auth::user()->id ) }}" title="">Profil</a></li>
                                    <li><a href="#" title="">Parametres</a></li>
                                </ul>
                                <h3 class="tc">
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Deconnecter</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </h3>
                            </div><!--user-account-settingss end-->
                        </div>
                    </div><!--header-data end-->
                </div>
            </header><!--header end-->

            @yield('content')

            <footer>
                <div class="footy-sec mn no-margin">
                    <div class="container">
                        <ul>
                            <li><a href="#" title="">Help Center</a></li>
                            <li><a href="#" title="">Privacy Policy</a></li>
                            <li><a href="#" title="">Community Guidelines</a></li>
                            <li><a href="#" title="">Cookies Policy</a></li>
                            <li><a href="#" title="">Career</a></li>
                            <li><a href="#" title="">Forum</a></li>
                            <li><a href="#" title="">Language</a></li>
                            <li><a href="#" title="">Copyright Policy</a></li>
                        </ul>
                        <p><img src="images/copy-icon2.png" alt="">Copyright 2018</p>
                        <img class="fl-rgt" src="images/logo2.png" alt="">
                    </div>
                </div>
            </footer><!--footer end-->

        </div>
    @include('layouts.scriptdash')

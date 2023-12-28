<!-- Header Start -->
<div class="header-area header-transparrent">
    <div class="headder-top header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-2">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index.html"><img
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0dRX-M1_Acl6dkO-AmVXXOEJmYiH6YfJ9Yg&usqp=CAU"
                                alt="" height="70px" width="100px"></a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="menu-wrapper">
                        <!-- Main-menu -->
                        <div class="main-menu">
                            <nav class="d-none d-lg-block">
                                <ul id="navigation">
                                    <li><a href="{{route('homepage')}}">Home</a></li>
                                    <li><a href="{{ route('home.job', ['category' => 'your-category']) }}">Find a
                                            Job</a></li>

                                    <li><a href="#">Blog</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        @guest
                            <div class="header-btn d-none f-right d-lg-block">
                                <a href="{{ route('user.registration') }}" class="btn btn-primary">Register</a>
                                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            </div>
                        @endguest
                        @auth
                            <a href="{{route('user.logout')}}">Logout</a>|
                            <a href="{{route('profile.view')}}"> {{auth()->user()->name}} ({{ auth()->user()->user_type }}
                                )</a>

                        @endauth
                    </div>
                </div>

                <!-- Mobile Menu -->

            </div>
        </div>
    </div>
</div>
<!-- Header End -->

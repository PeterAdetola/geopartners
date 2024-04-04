
@php

$route = Route::current()->getName();
$smedia = App\Models\SocialMedia::all();

@endphp  
    <!-- Sidebar Section -->
    <a href="#" class="js-bauen-nav-toggle bauen-nav-toggle"><i></i></a>
    <aside id="bauen-aside">
            <!-- Logo -->
            <div class="bauen-logo">
                <a href="{{ url('/') }}"> <img src="{{ asset('frontend/assets/img/logo.png') }}" class="logo-img" alt="">
                    <h2>GEOSUNNY<span>AND PARTNERS</span></h2>
                </a>
            </div>
            <!-- Menu -->
            <nav class="bauen-main-menu">
                <ul>
                    <li class="{{ ($route == 'home')? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                    <li class="{{ ($route == 'aboutus.page')? 'active' : '' }}"><a href="{{ route('aboutus.page') }}">About</a></li>
                    <li class="{{ ($route == 'services.page' || $route == 'service_detailed.page')? 'active' : '' }}"><a href="{{ route('services.page') }}">Services</a></li>
                    <li class="{{ ($route == 'projects.page' || $route == 'project_detailed.page')? 'active' : '' }}"><a href="{{ route('projects.page') }}">Projects</a></li>
                    <li class="{{ ($route == 'contact.page')? 'active' : '' }}"><a href="{{ route('contact.page') }}">Contact</a></li>
                </ul>
            </nav>
            <!-- Sidebar Footer -->
            <div class="bauen-footer">
                <ul>
    @foreach($smedia as $smedia)
        @if($smedia->name === 'Facebook')
                                    <li><a href="{{ $smedia->link }}"><i class="ti-facebook"></i></a></li>
        @elseif($smedia->name === 'LinkedIn')
                                    <li><a href="{{ $smedia->link }}"><i class="ti-linkedin"></i></a></li> 
        @elseif($smedia->name === 'Instagram')
                                    <li><a href="{{ $smedia->link }}"><i class="ti-instagram"></i></a></li> 
        @elseif($smedia->name === 'Twitter')
                                    <li><a href="{{ $smedia->link }}"><i class="ti-twitter"></i></a></li>
        @endif
    @endforeach
                </ul>
            </div>
    </aside>
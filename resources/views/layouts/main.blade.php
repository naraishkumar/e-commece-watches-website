@include('layouts.header')

@yield('content') 

<!-- Nav Start -->
<div id="nav">
    <div class="container-fluid">
        <div id="logo" class="pull-left">
            <a href="index.html"><img src="{{asset('img/logo.png')}}" alt="Logo" /></a>
        </div>

        <nav id="nav-menu-container navbar-dark  bg-dark">
            <ul class="nav-menu">
                <li class="menu-active"><a href="#header">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="">About</a></li>
                <li><a href="#testimonials">Reviews</a></li>
                <li><a href="">Cart</a></li>
            
            </ul>
        </nav>
    </div>
</div>
<!-- Nav End -->



@include('layouts.footer')
<header class="header_area sticky-header">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light main_box">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="{{ url ('/') }}">Yunet Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto">
            @guest
            <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
            @else
            <li class="nav-item"><a class="nav-link" href="{{ route('users.edit') }}">{{Session::get('name')}}</a></li>
            @endguest
            <li class="nav-item"><a class="nav-link" href="{{route('shop.index')}}">Home</a></li>
            <!-- <li class="nav-item submenu dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">Shop</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a class="nav-link" href="{{url('/category')}}">Shop Category</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/single-product')}}">Product Details</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/checkout')}}">Product Checkout</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/cart')}}">Shopping Cart</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url('/confirmation')}}">Confirmation</a></li>
              </ul>
            </li> -->
            <li class="nav-item submenu dropdown active">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
               aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li class="nav-item active"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/tracking') }}">Tracking</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/element') }}">Elements</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a href="{{route('cart.index')}}" class="cart">
              <span class="ti-bag"></span><span>{{Cart::instance('default')->count()}}</span></a></li>
            <li class="nav-item">
              <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

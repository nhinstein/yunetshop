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
            <li class="nav-item"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a href="{{route('cart.index')}}" class="cart">
              <span class="ti-bag"></span><span>{{Cart::instance('default')->count()}}</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

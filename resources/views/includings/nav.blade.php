{!! menu('shop', 'includings/sidenav') !!}
<!-- Off-Canvas Mobile Menu-->
<div class="offcanvas-container" id="mobile-menu"><a class="account-link" href="login">
@if (Route::has('login'))
  @auth
    <div class="user-ava"><img src="img/account/user-ava-md.jpg" alt="Daniel Adams">
    </div>
    <div class="user-info">
      <h6 class="user-name">{{ Auth::user()->name }} {{ Auth::user()->vorname }}</h6>
      @else
      <div class="user-info">
      <h6 class="user-name" href="{{ route('login') }}"><i class="voyager-key"><span> Login</span></i></h6>
      @endauth
    </div>
    @endif
  </a>
  {!! menu('shop', 'includings/sidenavmobile') !!}
</div>
<!-- Topbar-->
<div class="topbar">
  <div class="topbar-column">
    <a class="hidden-md-down" href="mailto:support@deinsale.ch"><i class="icon-mail"></i>&nbsp; support@deinsale.ch</a>
    <a class="social-button sb-facebook shape-none sb-dark" href="https://www.facebook.com" target="_blank"><i class="socicon-facebook"></i></a>
    <a class="social-button sb-twitter shape-none sb-dark" href="https://www.twitter.com" target="_blank"><i class="socicon-twitter"></i></a>
    <a class="social-button sb-instagram shape-none sb-dark" href="https://www.instagram.com" target="_blank"><i class="socicon-instagram"></i></a>
  </div>
  <div class="topbar-column"><a class="hidden-md-down" href="#"><i class="icon-download"></i>&nbsp; Hol dir unsere App für dein Smartphone</a>
    <div class="lang-currency-switcher-wrap">
      <div class="lang-currency-switcher dropdown-toggle">
        <span class="language"><img alt="Deutsch" src="img/flags/DE.png"></span>
        <span class="currency">CHF</span></div>
      <div class="dropdown-menu">
        <div class="currency-select">
          <select class="form-control form-control-rounded form-control-sm">
            <option value="usd">CHF</option>
          </select>
        </div><a class="dropdown-item" href="#"><img src="img/flags/FR.png" alt="Français">Français</a><a class="dropdown-item" href="#"><img src="img/flags/IT.png" alt="Italiano">Italiano</a>
      </div>
    </div>
  </div>
</div>
<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
  <div id="app">
    <ais-index app-id="{{ config('scout.algolia.id') }}"
            api-key="{{ env('ALGOLIA_SEARCH') }}"
            index-name="Product">

            <!-- Other Algolia search components go here -->

    </ais-index>

  <!-- Search-->
  <form class="site-search">
    <input type="text" name="searchKey" placeholder="Type to search...">
      <ais-input placeholder="Search contacts..."></ais-input>
    <div class="search-tools"><span class="clear-search">Clear</span><span class="close-search"><i class="icon-cross"></i></span></div>
  </form>
  </div>
  <div class="site-branding">
    <div class="inner">
      <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories" data-toggle="offcanvas"></a>
      <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
      <!-- Site Logo--><a class="site-logo" href="home"><img src="img/logo/logo.png" alt="deinsale"></a>
    </div>
  </div>
  <!-- Main Navigation-->
  {!! menu('topnav', 'includings/topnav') !!}
  <!-- Toolbar-->
  <div class="toolbar">
    <div class="inner">
      <div class="tools">
        <div class="search"><i class="icon-search"></i></div>
        <div class="account"><a href="home"></a><i class="icon-head"></i>
          <ul class="toolbar-dropdown">
            @if(Auth::check())
            <li class="sub-menu-user">
              <div class="user-ava"><img src="{{ "/storage/" . trim(Auth::user()->avatar) }}" alt="{{ Auth::user()->name }}">
              </div>
              <div class="user-info">
                <h6 class="user-name">{{ Auth::user()->name }}</h6><span class="text-xs text-muted">290 Reward points</span>
              </div>
            </li>
              <li><a href="profile">Mein Profil</a></li>
              <li><a href="account-orders.html">Orders List</a></li>
              <li><a href="account-wishlist.html">Wishlist</a></li>
            <li class="sub-menu-separator"></li>
            <li>
              <a href="{{ route('user.logout') }}">
                         <i class="icon-unlock"></i>Logout</a>

            </li>
            @else
            <li><a href="{{ route('user.signin') }}">Login</a></li>
            <li><a href="{{ route('user.signup') }}">Registrierung</a></li>
            @endif


          </ul>
        </div>
        <div class="cart">
          <a href="{{ route('product.shoppingcard')}}"></a>
          <i class="icon-bag"></i>
          <span class="count">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
          <span class="subtotal">CHF 289.68</span>
          <div class="toolbar-dropdown">
            <div class="dropdown-product-item">
              <span class="dropdown-product-remove">
                <i class="icon-cross"></i>
              </span>
              <a class="dropdown-product-thumb" href="shop-single.html">
                <img src="img/cart-dropdown/01.jpg" alt="Product">
              </a>
              <div class="dropdown-product-info">
                <a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a>
                <span class="dropdown-product-details">1 x CHF 43.90</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/02.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x CHF 24.89</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/03.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x CHF 200.00</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><span class="text-lg">Total:</span></div>
              <div class="column text-right"><span class="text-lg text-medium">CHF 289.68&nbsp;</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="{{ route('product.shoppingcard')}}">Warenkorb</a></div>
              <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

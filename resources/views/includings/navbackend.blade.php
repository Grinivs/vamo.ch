<!-- Navbar-->
<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
  <!-- Search-->
  <form class="site-search" method="get">
    <input type="text" name="site_search" placeholder="Tippen um zu Suchen ...">
    <div class="search-tools"><span class="clear-search">Löschen</span><span class="close-search"><i class="icon-cross"></i></span></div>
  </form>
  <div class="site-branding">
    <div class="inner">
      <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle" href="#mobile-menu" data-toggle="offcanvas"></a>
      <!-- Site Logo--><a class="site-logo navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'deinsale.ch') }}</a>
    </div>
  </div>
  <!-- Main Navigation-->
  <nav class="site-menu">
    <ul>
      @if (Route::has('login'))
      @auth
      <li class="has-megamenu active" {{{ (Request::is('home') ? 'class=active' : '') }}}><a href="/home"><span>Mein Profil</span></a>
      </li>
      <li class="has-megamenu"><a href="#"><span>Technik</span></a>
        <ul class="mega-menu">
          <li><span class="mega-menu-title">Top Categories</span>
            <ul class="sub-menu">
              <li><a href="#">Men's Shoes</a></li>
              <li><a href="#">Women's Shoes</a></li>
              <li><a href="#">Shirts and Tops</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">Shorts and Pants</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
          <li><span class="mega-menu-title">Specialty Shops</span>
            <ul class="sub-menu">
              <li><a href="#">Junior's Shop</a></li>
              <li><a href="#">Swim Shop</a></li>
              <li><a href="#">Athletic Shop</a></li>
              <li><a href="#">Outdoor Shop</a></li>
              <li><a href="#">Luxury Shop</a></li>
              <li><a href="#">Accessories Shop</a></li>
            </ul>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
              </div>
            </section>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
              <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
              </div>
            </section>
          </li>
        </ul>
      </li>
      <li class="has-megamenu"><a href="#"><span>Haushaltsgeräte</span></a>
        <ul class="mega-menu">
          <li><span class="mega-menu-title">Top Categories</span>
            <ul class="sub-menu">
              <li><a href="#">Men's Shoes</a></li>
              <li><a href="#">Women's Shoes</a></li>
              <li><a href="#">Shirts and Tops</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">Shorts and Pants</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
          <li><span class="mega-menu-title">Specialty Shops</span>
            <ul class="sub-menu">
              <li><a href="#">Junior's Shop</a></li>
              <li><a href="#">Swim Shop</a></li>
              <li><a href="#">Athletic Shop</a></li>
              <li><a href="#">Outdoor Shop</a></li>
              <li><a href="#">Luxury Shop</a></li>
              <li><a href="#">Accessories Shop</a></li>
            </ul>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
              </div>
            </section>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
              <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
              </div>
            </section>
          </li>
        </ul>
      </li>
      <li class="has-megamenu" ><a href="kleidung"><span>Kleidung</span></a>
        <ul class="mega-menu">
          <li><span class="mega-menu-title">Top Categories</span>
            <ul class="sub-menu">
              <li><a href="#">Men's Shoes</a></li>
              <li><a href="#">Women's Shoes</a></li>
              <li><a href="#">Shirts and Tops</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">Shorts and Pants</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
          <li><span class="mega-menu-title">Specialty Shops</span>
            <ul class="sub-menu">
              <li><a href="#">Junior's Shop</a></li>
              <li><a href="#">Swim Shop</a></li>
              <li><a href="#">Athletic Shop</a></li>
              <li><a href="#">Outdoor Shop</a></li>
              <li><a href="#">Luxury Shop</a></li>
              <li><a href="#">Accessories Shop</a></li>
            </ul>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
              </div>
            </section>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
              <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
              </div>
            </section>
          </li>
        </ul>
      </li>
      <li class="has-megamenu" {{{ (Request::is('living') ? 'class=active' : '') }}}><a href="shop/living"><span>Wohnen</span></a>
        <ul class="mega-menu">
          <li><span class="mega-menu-title">Möbel & Technik</span>
            <ul class="sub-menu">
              <li><a href="#">Men's Shoes</a></li>
              <li><a href="#">Women's Shoes</a></li>
              <li><a href="#">Shirts and Tops</a></li>
              <li><a href="#">Swimwear</a></li>
              <li><a href="#">Shorts and Pants</a></li>
              <li><a href="#">Accessories</a></li>
            </ul>
          </li>
          <li><span class="mega-menu-title">Textilien & Küche</span>
            <ul class="sub-menu">
              <li><a href="#">Junior's Shop</a></li>
              <li><a href="#">Swim Shop</a></li>
              <li><a href="#">Athletic Shop</a></li>
              <li><a href="#">Outdoor Shop</a></li>
              <li><a href="#">Luxury Shop</a></li>
              <li><a href="#">Accessories Shop</a></li>
            </ul>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/02.jpg);"><span class="overlay-dark" style="opacity: .4;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h4 class="text-light text-thin text-shadow">New Collection of</h4>
                <h3 class="text-bold text-light text-shadow">Sunglasses</h3><a class="btn btn-sm btn-primary" href="#">Shop Now</a>
              </div>
            </section>
          </li>
          <li>
            <section class="promo-box" style="background-image: url(img/banners/03.jpg);">
              <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span class="overlay-dark" style="opacity: .45;"></span>
              <div class="promo-box-content text-center padding-top-2x padding-bottom-2x">
                <h3 class="text-bold text-light text-shadow">Limited Offer</h3>
                <h4 class="text-light text-thin text-shadow">save up to 50%!</h4><a class="btn btn-sm btn-primary" href="#">Learn More</a>
              </div>
            </section>
          </li>
        </ul>
      </li>
      @else
      <li class="has-megamenu"><a href="{{ route('login') }}"><span>Login</span></a></li>
      <li class="has-megamenu"><a href="{{ route('register') }}"><span>Register<span></a></li>
      @endauth
      @endif
    </ul>
  </nav>
  <!-- Toolbar-->
  <div class="toolbar">
    <div class="inner">
      <div class="tools">
        <div class="search"><i class="icon-search"></i></div>
        <div class="account"><a href="home"></a><i class="icon-head"></i>
          <ul class="toolbar-dropdown">
            @if (Route::has('login'))
            <li class="sub-menu-user">
              @auth
              <div class="user-ava"><img src="img/account/user-ava-sm.jpg" alt="Daniel Adams">
              </div>
              <div class="user-info">
                <h6 class="user-name">{{ Auth::user()->name }} {{ Auth::user()->vorname }}</h6><span class="text-xs text-muted">290 Reward points</span>
              </div>
            </li>
              <li><a href="account-profile.html">Mein Profil</a></li>
              <li><a href="account-orders.html">Orders List</a></li>
              <li><a href="account-wishlist.html">Wishlist</a></li>
            <li class="sub-menu-separator"></li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                         <i class="icon-unlock"></i>Logout</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
            </li>
            @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Registrierung</a></li>
            @endauth
          </ul>
          @endif
        </div>
        <div class="cart"><a href="cart.html"></a><i class="icon-bag"></i><span class="count">3</span><span class="subtotal">$289.68</span>
          <div class="toolbar-dropdown">
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/01.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Unionbay Park</a><span class="dropdown-product-details">1 x $43.90</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/02.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Daily Fabric Cap</a><span class="dropdown-product-details">2 x $24.89</span></div>
            </div>
            <div class="dropdown-product-item"><span class="dropdown-product-remove"><i class="icon-cross"></i></span><a class="dropdown-product-thumb" href="shop-single.html"><img src="img/cart-dropdown/03.jpg" alt="Product"></a>
              <div class="dropdown-product-info"><a class="dropdown-product-title" href="shop-single.html">Haan Crossbody</a><span class="dropdown-product-details">1 x $200.00</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><span class="text-lg">Total:</span></div>
              <div class="column text-right"><span class="text-lg text-medium">$289.68&nbsp;</span></div>
            </div>
            <div class="toolbar-dropdown-group">
              <div class="column"><a class="btn btn-sm btn-block btn-secondary" href="cart.html">View Cart</a></div>
              <div class="column"><a class="btn btn-sm btn-block btn-success" href="checkout-address.html">Checkout</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

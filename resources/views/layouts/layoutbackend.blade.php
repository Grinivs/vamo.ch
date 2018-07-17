<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>
      deinsale.ch
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="deinsale.ch - Deine Webseite für deine Sales">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Grichting Nicolas">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="css/vendor.min.css">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="css/styles.min.css">
    <!-- Modernizr-->
    <script src="js/modernizr.min.js"></script>
  </head>
  <!-- Body-->
  <body>
    @include('includings/navbackend')
    @yield('content')
    <!-- Site Footer-->
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <!-- Contact Info-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Tritt mit uns in Kontakt</h3>
              <ul class="list-unstyled text-sm text-white">
                <li>deinsale.ch</li>
                <li>Postfach XYZ</li>
                <li>3018 Bern</li>
              </ul>
              <!--<p class="text-white">Telefon: 00 33 169 7720</p>
              <ul class="list-unstyled text-sm text-white">
                <li><span class="opacity-50">Monday-Friday:</span>9.00 am - 8.00 pm</li>
                <li><span class="opacity-50">Saturday:</span>10.00 am - 6.00 pm</li>
              </ul>-->
              <p>
                <a class="navi-link-light" href="#">support@deinsale.ch</a>
              </p>
              <a class="social-button shape-circle sb-facebook sb-light-skin" href="#"><i class="socicon-facebook"></i></a>
              <a class="social-button shape-circle sb-twitter sb-light-skin" href="#"><i class="socicon-twitter"></i></a>
              <!--<a class="social-button shape-circle sb-instagram sb-light-skin" href="#"><i class="socicon-instagram"></i></a>-->
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Mobile App Buttons-->
            <section class="widget widget-light-skin">
              <h3 class="widget-title">Unsere Smartphone App</h3>
              <a class="market-button apple-button mb-light-skin" href="#">
                <span class="mb-subtitle">Hier herunterladen</span><span class="mb-title">App Store</span>
              </a>
              <a class="market-button google-button mb-light-skin" href="#">
                <span class="mb-subtitle">Hier herunterladen</span><span class="mb-title">Google Play</span>
              </a>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- About Us-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Über uns</h3>
              <ul>
                <li><a href="team">Team</a></li>
                <li><a href="about">Über deinsale.ch</a></li>
                <li><a href="history">Unsere Geschichte</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="contact">Kontakt</a></li>
              </ul>
            </section>
          </div>
          <div class="col-lg-3 col-md-6">
            <!-- Account / Shipping Info-->
            <section class="widget widget-links widget-light-skin">
              <h3 class="widget-title">Account &amp; Infos</h3>
              <ul>
                <li><a href="#">Mein Account</a></li>
                <li><a href="#">Versand Informationen</a></li>
                <li><a href="#">Rücksendungen & Ersatz</a></li>
                <li><a href="#">Gebühren</a></li>
              </ul>
            </section>
          </div>
        </div>
        <div class="row">

          <div class="col-md-5 padding-bottom-1x">
            <div class="margin-top-1x hidden-md-up"></div>
          </div>
        </div>
        <!-- Copyright-->
        <p class="footer-copyright">© Copyright by deinsale.ch</p>
      </div>
    </footer>
  </div>
  <!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
  <!-- Backdrop-->
  <div class="site-backdrop"></div>
  <!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
  <script src="js/vendor.min.js"></script>
  <script src="js/scripts.min.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
  </body>
  </html>

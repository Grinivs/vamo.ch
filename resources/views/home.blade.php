@extends('layouts/layoutindex')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
<!-- Page Content-->
<!-- Main Slider-->
<section class="hero-slider" style="background-image: url(img/hero-slider/main-bg.jpg);">
  <div class="owl-carousel large-controls dots-inside" data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;loop&quot;: true, &quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 7000 }">
    <div class="item">
      <div class="container padding-top-3x">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="img/logo/fust-logo.png" alt="Fust">
              <div class="h2 text-body text-normal mb-2 pt-1">Laptops zum Spezialpreis</div>
              <div class="h2 text-body text-normal mb-4 pb-1">Ab <span class="text-bold">CHF 370.99</span></div>
            </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">Jetzt bestellen</a>
          </div>
          <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/laptop.png" alt="Puma Backpack"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container padding-top-3x">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="img/logo/fust-logo.png" alt="Fust">
              <div class="h2 text-body text-normal mb-2 pt-1">Laptops zum Spezialpreis</div>
              <div class="h2 text-body text-normal mb-4 pb-1">Ab <span class="text-bold">CHF 370.99</span></div>
            </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">Jetzt bestellen</a>
          </div>
          <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/laptop.png" alt="Puma Backpack"></div>
        </div>
      </div>
    </div>
    <div class="item">
      <div class="container padding-top-3x">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-5 col-md-6 padding-bottom-2x text-md-left text-center">
            <div class="from-bottom"><img class="d-inline-block w-150 mb-4" src="img/logo/fust-logo.png" alt="Fust">
              <div class="h2 text-body text-normal mb-2 pt-1">Laptops zum Spezialpreis</div>
              <div class="h2 text-body text-normal mb-4 pb-1">Ab <span class="text-bold">CHF 370.99</span></div>
            </div><a class="btn btn-primary scale-up delay-1" href="shop-grid-ls.html">Jetzt bestellen</a>
          </div>
          <div class="col-md-6 padding-bottom-2x mb-3"><img class="d-block mx-auto" src="img/hero-slider/laptop.png" alt="Puma Backpack"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container padding-top-3x">
  <h3 class="text-center mb-30">Top Kategorien</h3>
  <div class="row">
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30">
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat1"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Computer & Elektronik</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30">
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat2"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Mode & Accessoires</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30">
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat3"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Schönheit & Gesundheit</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30">
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat4"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Wohnen & Haushalt</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30">
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat5"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Sport & Freizeit</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30">
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat6"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Baby & Kinder</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card mb-30"
        <a href="technik">
          <div class="inner">
            <div class="main-img text-center">
              <img src="{{ Voyager::image( Voyager::setting("frontend.kat7"), voyager_asset("images/bg.jpg") ) }}" alt="Category">
            </div>
          </div>
        </a>
        <div class="card-body text-center">
          <h4 class="card-title">Bau & Hobby</h4>
          <p class="text-muted">Ab CHF 49.95</p>
          <a class="btn btn-outline-primary btn-sm" href="technik">Zu den Produkten</a>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
@endsection

@extends('layouts/layoutindex')
@section('content')
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper">
  <!-- Page Title-->
  <div class="page-title">
    <div class="container">
      <div class="column">
        <h1>About Us</h1>
      </div>
      <div class="column">
        <ul class="breadcrumbs">
          <li><a href="index.html">Home</a>
          </li>
          <li class="separator">&nbsp;</li>
          <li>Services</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Page Content-->
  <div class="container padding-bottom-2x mb-2">
    <div class="row align-items-center padding-bottom-2x">
      <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/features/01.jpg" alt="Online Shopping"></div>
      <div class="col-md-7 text-md-left text-center">
        <div class="mt-30 hidden-md-up"></div>
        <h2>Suchen, Auswählen, Online kaufen.</h2>
        <p>Auf unserer Seite finden Sie alle Schnäppchen. Ingegensatz zu anderen Seiten finden Sie hir Schnäppchen von vielen verschiedenen Webseiten. Zudem können Sie die gefunden Schnäppchen direkt Online über uns bestellen und bequem nach Hause liefern lassen. Sie haben auch die Möglichkeit die Produkte in ausgewählten Shops abzuholen.</p>
        <a class="text-medium text-decoration-none" href="shop-grid-ls.html">Schnäppchen anzeigen<i class="icon-arrow-right"></i></a>
      </div>
    </div>
    <hr>
    <div class="row align-items-center padding-top-2x padding-bottom-2x">
      <div class="col-md-5 order-md-2"><img class="d-block w-270 m-auto" src="img/features/02.jpg" alt="Delivery"></div>
      <div class="col-md-7 order-md-1 text-md-left text-center">
        <div class="mt-30 hidden-md-up"></div>
        <h2>Schnelle Auslieferung.</h2>
        <p>Lassen Sie sich Ihre Bestellung von verschieden Anbietern schnell und einfach nach Hause liefern. Egal ob Sie Produkte von verschiedenen Geschäfte bestellen, müssen Sie nur eine Bestellung machen. Wir bestellen anschliessen für Sie bei den anderen Shops. Minimaler Aufwand, Maximals Erlebnis.</p><a class="text-medium text-decoration-none" href="#">Shipping Details&nbsp;<i class="icon-arrow-right"></i></a>
      </div>
    </div>
    <hr>
    <div class="row align-items-center padding-top-2x padding-bottom-2x">
      <div class="col-md-5"><img class="d-block w-270 m-auto" src="img/features/03.jpg" alt="Mobile App"></div>
      <div class="col-md-7 text-md-left text-center">
        <div class="mt-30 hidden-md-up"></div>
        <h2>Great Mobile App. Shop On The Go.</h2>
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor.</p><a class="market-button apple-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">App Store</span></a><a class="market-button google-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Google Play</span></a><a class="market-button windows-button" href="#"><span class="mb-subtitle">Download on the</span><span class="mb-title">Windows Store</span></a>
      </div>
    </div>
    <hr>
    <div class="row align-items-center padding-top-2x padding-bottom-2x">
      <div class="col-md-5 order-md-2"><img class="d-block w-270 m-auto" src="img/features/04.jpg" alt="Delivery"></div>
      <div class="col-md-7 order-md-1 text-md-left text-center">
        <div class="mt-30 hidden-md-up"></div>
        <h2>Shop Offline. Cozy Outlet Stores.</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis at, pharetra eu nisl. Phasellus id ante at velit tincidunt hendrerit. Aenean dolor dolor, tristique nec placerat nec.</p><a class="text-medium text-decoration-none" href="contacts.html">See Outlet Stores&nbsp;<i class="icon-arrow-right"></i></a>
      </div>
    </div>
  </div>
</div>
@endsection

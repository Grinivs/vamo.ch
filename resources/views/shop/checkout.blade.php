@extends('layouts/layoutindex')
@section('content')
<section class="container padding-top-3x">
  <div class="checkout-steps">
    <a href="checkout-review.html">4. Bestätigung</a>
    <a class="active" href="checkout-payment.html"><span class="angle"></span>3. Zahlung</a>
    <a class="completed" href="checkout-shipping.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>2. Versand</a>
    <a class="completed" href="checkout-address.html"><span class="step-indicator icon-circle-check"></span><span class="angle"></span>1. Adresse</a></div>
  <h4>Wählen Sie eine Zahlungsmethode</h4>
  <hr class="padding-bottom-1x">
  <p>Zu Bezahlen: CHF {{ $total }}</p>
  <div class="accordion" id="accordion" role="tablist">
    <form action="your-server-side-code" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_0hcCmi4GtrMGgT7IWHtW1qHl"
    data-amount="{{ $total }}00"
    data-name="deinsale.ch"
    data-description="Widget"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="chf">
  </script>
</form>
<script src="https://checkout.stripe.com/checkout.js"></script>

<button id="customButton">Purchase</button>

<script>
var handler = StripeCheckout.configure({
  key: 'pk_test_0hcCmi4GtrMGgT7IWHtW1qHl',
  image: 'https://stripe.com/img/documentation/checkout/marketplace.png',
  locale: 'auto',
  token: function(token) {
    // You can access the token ID with `token.id`.
    // Get the token ID to your server-side code for use.
  }
});

document.getElementById('customButton').addEventListener('click', function(e) {
  // Open Checkout with further options:
  handler.open({
    name: 'deinsale.ch',
    description: '2 widgets',
    currency: 'chf',
    amount: {{ $total }}00
  });
  e.preventDefault();
});

// Close Checkout on page navigation:
window.addEventListener('popstate', function() {
  handler.close();
});
</script>
    <!--<div class="card">
      <div class="card-header" role="tab">
        <h6><a href="#card" data-toggle="collapse" data-parent="#accordion"><i class="icon-columns"></i>Pay with Credit Card</a></h6>
      </div>
      <div class="collapse show" id="card" role="tabpanel">
        <div class="card-body">
          <p>We accept following credit cards:&nbsp;<img class="d-inline-block align-middle" src="img/credit-cards.png" style="width: 120px;" alt="Cerdit Cards"></p>
          <div class="card-wrapper"></div>
          <form class="interactive-credit-card row" action="{{ route('checkout') }}" method="post" id="checkout-form">
            <div class="form-group col-sm-6">
              <input class="form-control" type="text" id="card-number" placeholder="Kreditkarten Nummer" required>
            </div>
            <div class="form-group col-sm-6">
              <input class="form-control" type="text" id="name" placeholder="Name und Vorname" required>
            </div>
            <div class="form-group col-sm-6">
              <input class="form-control" type="text" id="adresse" placeholder="Adresse" required>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" id="plz" placeholder="PLZ" required>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" id="ort" placeholder="Ort" required>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" id="expiration-month" placeholder="MM" required>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" id="expiration-year" placeholder="YY" required>
            </div>
            <div class="form-group col-sm-3">
              <input class="form-control" type="text" id="card-cvc" placeholder="CVC" required>
            </div>
            {{ csrf_field() }}
            <div class="col-sm-6">
              <button class="btn btn-outline-primary btn-block margin-top-none" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div> -->
    <div class="card">
      <div class="card-header" role="tab">
        <h6><a class="collapsed" href="#paypal" data-toggle="collapse" data-parent="#accordion"><i class="socicon-paypal"></i>Pay with PayPal</a></h6>
      </div>
      <div class="collapse" id="paypal" role="tabpanel">
        <div class="card-body">
          <p>PayPal - the safer, easier way to pay</p>
          <form class="row" method="post">
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" type="email" placeholder="E-mail" required>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control" type="password" placeholder="Password" required>
              </div>
            </div>
            <div class="col-12">
              <div class="d-flex flex-wrap justify-content-between align-items-center"><a class="navi-link" href="#">Forgot password?</a>
                <button class="btn btn-outline-primary margin-top-none" type="submit">Log In</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header" role="tab">
        <h6><a class="collapsed" href="#points" data-toggle="collapse" data-parent="#accordion"><i class="icon-medal"></i>Redeem Reward Points</a></h6>
      </div>
      <div class="collapse" id="points" role="tabpanel">
        <div class="card-body">
          <p>You currently have<span class="text-medium"> 290</span> Reward Points to spend.</p>
          <div class="custom-control custom-checkbox d-block">
            <input class="custom-control-input" type="checkbox" id="use_points">
            <label class="custom-control-label" for="use_points">Use my Reward Points to pay for this order.</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('scripts')
<script src="https://js.stripe.com/v3/"></script>
<script src="{{ URL::to('js/checkout.js')}}"></script>
@endsection

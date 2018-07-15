@extends('layouts/layoutindex')
@section('content')
<div class="offcanvas-wrapper">
  <section class="container padding-top-3x">
    <h3 class="text-center mb-30">Warenkorb</h3>
    @if(Session::has('cart'))

      <div class="table-responsive shopping-cart">
            <table class="table">
              <thead>
                <tr>
                  <th>Produkt Name</th>
                  <th class="text-center">Anzahl</th>
                  <th class="text-center">Einzelpreis</th>
                  <th class="text-center">Subtotal</th>
                  <th class="text-center">
                    <a class="btn btn-sm btn-outline-danger" href="#">Warenkorb leeren</a>
                  </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($products as $product)
                <tr>
                  <td>
                    <div class="product-item"><a class="product-thumb" href="shop-single.html"><img src="{{ "/storage/" . trim($product['item']['image'], '[""]') }}" alt="Product"></a>
                      <div class="product-info">
                        <h4 class="product-title"><a href="shop-single.html">{{ $product['item']['title'] }}</a></h4><span><em>Size:</em> 10.5</span><span><em>Color:</em> Dark Blue</span>
                      </div>
                    </div>
                  </td>
                  <td class="text-center text-lg text-medium">{{ $product['qty']}}</td>
                  <td class="text-center text-lg text-medium">CHF {{ $product['price'] / $product['qty']}}</td>
                  <td class="text-center text-lg text-medium">CHF {{ $product['price']}}</td>
                  <td class="text-center"><a class="remove-from-cart" href="#" data-toggle="tooltip" title="Remove item"><i class="icon-cross"></i></a></td>

                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="shopping-cart-footer">
           <div class="column">
             <form class="coupon-form" method="post">
               <input class="form-control form-control-sm" type="text" placeholder="Gutschein-code" required>
               <button class="btn btn-outline-primary btn-sm" type="submit">Gutschein einlösen</button>
             </form>
           </div>
           <div class="column text-lg">Zwischentotal: <span class="text-medium">CHF {{ $totalPrice }}</span></div>
         </div>
         <div class="shopping-cart-footer">
           <div class="column">
             <a class="btn btn-outline-secondary" href="shop"><i class="icon-arrow-left"></i>&nbsp;Zurück zu Shop</a>
           </div>
           <div class="column">
             <a class="btn btn-primary" href="shoppingcard" data-toast data-toast-type="success" data-toast-position="topRight" data-toast-icon="icon-circle-check" data-toast-title="Your cart" data-toast-message="is updated successfully!">Warenkorb aktualisieren</a>
             <a class="btn btn-success" href="{{ route('checkout') }}">Checkout</a>
           </div>
         </div>
        @else
        <div class="row">
          <h2>Sie haben keine Produkte im Warenkorb</h2>
        </div>
        @endif
  </section>
</div>
@endsection

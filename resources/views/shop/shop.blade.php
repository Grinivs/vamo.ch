@extends('layouts/layoutindex')
@section('content')
<section class="container padding-top-3x">
  <h3 class="text-center mb-30">Alle Produkte</h3>

  @foreach($products->chunk(3) as $productChunk)
  @endforeach

  <div class="row">
    @foreach ($productChunk as $product)
      <div class="col-md-4 col-sm-6">
        <form method="post" action="{{ route('product.addToCart', ['id' => $product->id])}}">
          <div class="card mb-30">
            <a href="technik">
              <div class="inner">
                <div class="main-img text-center">
                  <img src="{{ "/storage/" . trim($product->image,'[""]') }}" style="width:100%;height:282px">
                </div>
              </div>
            </a>
            <div class="card-body text-center">
              <h4 class="card-title">{{ $product->title }}</h4>
              <p class="text-lg text-bold">{{ $product->price }} CHF</p>
              <input type="text" name="quantity" class="form-control" value="1" />
              <input type="submit" name="add_to_cart" class="btn btn-outline-primary btn-sm" value="Zum Warenkorb hinzufügen" />
              {{ csrf_field() }}
            </div>
          </div>
        </form>
      </div>
    @endforeach


  </div>
</section>

@endsection

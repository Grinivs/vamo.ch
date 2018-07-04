@extends('layouts/layoutindex')
@section('content')
<section class="container padding-top-3x">
  <h3 class="text-center mb-30">Suchen</h3>
  <div class="row">
    <div class="col-md-4 col-sm-6">
        @foreach ($products as $product)
         {{ $product->name }} <br>
        @endforeach
    </div>
  </div>
</section>
@endsection

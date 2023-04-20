@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">ProductPage</div>
  <div class="card-body">

        <div class="card-body">
        <h5 class="card-text">Product Name : {{ $products->pname }}</h5>
        <p class="card-title">Item code : {{ $products-> itemcode}}</p>
        <p class="card-text">Price: {{ $products->price }}</p>
        <p class="card-text">Quentity: {{ $products->qty }}</p>
  </div>

    </hr>

  </div>
</div>

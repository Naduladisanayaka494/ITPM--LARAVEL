@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">Product Edit Page</div>
  <div class="card-body">

      <form action="{{ url('product/' .$product->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$product->id}}" id="id" />
        <label>Itemcode</label></br>
        <input type="text" name="itemcode" id="itemcode" value="{{$product->itemcode}}" class="form-control"></br>
        <label>	Product name</label></br>
        <input type="text" name="pname" id="pname" value="{{$product->pname}}" class="form-control"></br>
        <label>Price</label></br>
        <input type="text"  name=">price" id=">price" value="{{$product->price}}" class="form-control"></br>
        <label>Quentity</label></br>
        <input type="text"  name="qty" id="qty" value="{{$product->qty}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>
@stop

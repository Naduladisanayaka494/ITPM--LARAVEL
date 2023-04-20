@extends('products.layout')
@section('content')
<div class="card">
  <div class="card-header">Product ADD Page</div>
  <div class="card-body">

      <form action="{{ url('product') }}" method="post">
        {!! csrf_field() !!}
        <label>Itemcode</label></br>
        <input type="text" name="itemcode" id="itemcode" class="form-control"></br>
        <label>	Product name</label></br>
        <input type="text" name="pname" id="pname" class="form-control"></br>
        <label>Quentity</label></br>
        <input type="text" name="qty" id="qty" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      
    </form>
  

  </div>
</div>
@stop




@extends('vegetables.layout')
@section('content')
<div class="card">
  <div class="card-header">Vegetable</div>
  <div class="card-body">

      <form action="{{ url('vegetable') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <label>Vegetable name</label></br>
        <input type="text" name="pname" id="pname" class="form-control"></br>
        <label>Quentity</label></br>
        <input type="text" name="qty" id="qty" class="form-control"></br>
        <label>Price</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
      
        <input class="form-control" name="photo" type="file" id="photo">
        <input type="submit" value="Save" class="btn btn-success"></br>


       
    </form>

  </div>
</div>
@stop

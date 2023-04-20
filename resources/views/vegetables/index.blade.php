@extends('vegetables.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <a href="{{ url('/vegetable/create') }}" class="btn btn-success btn-sm" title="Add New Product">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>

                                        <th>Vegetable Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Photo</th>
                                      

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($vegetables as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $item->pname }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->qty}}</td>
                                        <td>
                                            <img src="{{ asset($item->photo) }}" width= '50' height='50' class="img img-responsive" />


                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('products.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Products</div>
                    {{-- <h1>Dynamic Dropdown</h1>
                    <select name='' id=''>
                        @foreach ( $datas  as $row )
                          <option value="{{ $row->id }}">{{ $row->requirement }} </option>
                            
                        @endforeach
                    </select> --}}
                    <div class="card-body">
                       
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                       
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $item)
                                    <tr>
                                       
                                        <td>{{ $item->pname }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->qty}}</td>
                                      
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

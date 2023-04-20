@extends('layout.app')

@section('content')

<section class="section">
          <div class="section-header">
            <ul>
            <h1><i class="fa-solid fa-user"></i> &nbsp;  Products</h1>
            </ul>
          </div>

       <form class= "form-inline my-2 my-lg-0" type="get" action="{{ url('/searchpr') }}">
        <input class="form-control mr-sm-2" name="query"type="search" placeholder="Search Product">
        <a href="{{ url('/searchpr') }}"><button class="btn btn-outline-light my2 my-sm-0" type="submit">Search</button></a>
       </form>

           <!-- START: Breadcrumbs-->
                <div class="row ">
                    <div class="col-12  align-self-center">
                        <div class="sub-header mt-3 py-3 px-3 align-self-center d-sm-flex w-100 rounded">
                            <div class="w-sm-100 mr-auto"><h4 class="mb-0">Products Information</h4></div>
                            <div class="btn-group mb-2">
                                <a href="{{ url('/product/create') }}"><button type="button" class="btn btn-outline-primary rounded-btn btn-lg"><i class="fa-solid fa-plus"></i> &nbsp; New</button></a>
                            </div>
                         </div>
                    </div>

                </div>
                <!-- END: Breadcrumbs-->
     <!-- START: Main Content-->
        <main>
            <div class="container-fluid">
                                <!-- START: Card Data-->
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display table dataTable table-striped table-bordered">
                                        <thead>
                                            <tr>

                                                <th>Id</th>
                                                <th>Item code</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th width = "300">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->itemcode }}</td>
                                                <td>{{ $item->pname }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->qty}}</td>
                                                <td>

                                                    <a href="{{ url('/product/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                    <a href="{{ url('/product/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                                                    <form method="POST" action="{{ url('/product' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}
                                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Product" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a class="btn btn-success" href="{{ route('pdf' ) }}" >Download PDF</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END: Card DATA-->
            </div>
        </main>
        <!-- END: Content-->

</section>

@endSection

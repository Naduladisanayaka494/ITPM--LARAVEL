<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Req;
use Barryvdh\DomPDF\Facade\Pdf;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas=Req::all();


        $products = Product::all();
        return view ('products.index')->with('products', $products,'datas',$datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Req::all();
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Product::create($input);
        return redirect('product')->with('flash_message', 'Product Addedd!',);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('products', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'Product Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'Product deleted!');
    }
    function display(){
        $datas=Req::all();
        $products = Product::all();
        return view('products.dispaly', ['products' => $products, 'datas' => $datas]);
    }
    public function  pdf(){
        $datas = Req::all();
        $products = Product::all();

        $pdf = Pdf::loadView('products.dispaly',  ['products' => $products, 'datas' => $datas]);
        return $pdf->download('products.pdf');



    }

    public function search() {
        $search_text = request()->query('query'); // Get the value of the "query" parameter from the URL
        if ($search_text) {
            $products = Product::where('pname', 'LIKE', '%' . $search_text . '%')->get(); // Perform the search only if the "query" parameter contains a value
        } else {
            $products = []; // If the "query" parameter is not set or contains an empty value, return an empty array
        }
        return view('products.search', compact('products'));
    }
    
}

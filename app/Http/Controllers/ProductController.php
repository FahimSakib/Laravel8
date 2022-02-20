<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductFormValidation;
use App\Models\Brand;
use App\Models\Material;
use App\Models\Product;
use App\Rules\Uppercase;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::get();
        // $brands = Brand::first();

        // $materials = Material::insert([
        //     ['material_name' => 'water'],
        //     ['material_name' => 'milk']
        // ]);

        $products = Product::with('brand')->get();
        // $materials = Material::with('products')->get();

        // $product->materials()->attach(
        //     [
        //         1 => ['material_qty' => '5'],
        //         3 => ['material_qty' => '10'],
        //         4 => ['material_qty' => '15']
        //     ]
        // );

       
        return view('form.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductFormValidation $request)
    {
        $data    = $request->validated();
        $product = new Product();

        $product->product_name = $data['product_name'];
        $product->product_code = $data['product_code'];
        $product->brand_id     = $data['brand_id'];
        $product->category_id  = $data['category_id'];
        $product->price        = $data['price'];
        $product->qty          = $data['qty'];
        $product->min_qty      = $data['min_qty'];
        $product->max_qty      = $data['max_qty'];
        $product->image        = $data['image'];
        
        if($product->save()){
            session()->flash('successfull', 'Data stored successfully');
        }else{
            session()->flash('error', 'Data store failed!');
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

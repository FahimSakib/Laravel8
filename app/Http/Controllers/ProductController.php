<?php

namespace App\Http\Controllers;

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
        //
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
    public function store(Request $request)
    {

        $message = [
            'brand_id.required'     => 'The brand field is required.',
            'categorty_id.required' => 'The category field is required.',
            'qty.required'          => 'The quantity field is required.',
            'qty.numeric'           => 'The quantity must be a number.',
            'qty.min'               => 'The quantity must be at least 1.',
            'min_qty.required'      => 'The minimum quantity field is required.',
            'min_qty.numeric'       => 'The minimum quantity must be a number.',
            'min_qty.min'           => 'The minimum quantity must be at least 1.',
            'max_qty.required'      => 'The maximum quantity field is required.',
            'max_qty.numeric'       => 'The maximum quantity must be a number.',
            'max_qty.gt'            => 'The maximum quantity must be greater than minimum quantity.',
        ];

        $validateData = $request->validate([
            'product_name' => ['required','string', new Uppercase],
            'product_code' => 'required|string',
            'brand_id'     => 'required|integer',
            'category_id'  => 'required|integer',
            'price'        => 'required|numeric|min:1',
            'qty'          => 'required|numeric|min:1',
            'min_qty'      => 'required|numeric|min:1',
            'max_qty'      => 'required|numeric|gt:min_qty',
            'image'        => 'required|image|mimes:png,jpeg,jpg,svg',
        ], $message);
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

@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center my-4">Create a new product</h3>
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6 mb-4">
                        <label for="product_name">Product Name</label>
                        <input type="text" class="form-control @error('product_name') is-invalid @enderror"
                            value="{{ old('product_name') }}" name="product_name" id="product_name">
                        @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="product_code">Product Code</label>
                        <input type="text" class="form-control @error('product_code') is-invalid @enderror"
                            value="{{ old('product_code') }}" name="product_code" id="product_code">
                        @error('product_code')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="brand_id">Brand</label>
                        <select class="form-control @error('brand_id') is-invalid @enderror" name="brand_id" id="brand_id">
                            <option value="">Select Please</option>
                            <option value="1" {{ (old('brand_id'))==1 ? 'selected' : '' }}>Samsung</option>
                            <option value="2" {{ (old('brand_id'))==2 ? 'selected' : '' }}>Apple</option>
                            <option value="3" {{ (old('brand_id'))==3 ? 'selected' : '' }}>Huawei</option>
                        </select>
                        @error('brand_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="category_id">Category</label>
                        <select class="form-control @error('category_id') is-invalid @enderror" name="category_id"
                            id="category_id">
                            <option value="">Select Please</option>
                            <option value="1" {{ (old('category_id'))==1 ? 'selected' : '' }}>Phone</option>
                            <option value="2" {{ (old('category_id'))==2 ? 'selected' : '' }}>Tv</option>
                            <option value="3" {{ (old('category_id'))==3 ? 'selected' : '' }}>Watch</option>
                        </select>
                        @error('category_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="price">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"
                            name="price" id="price">
                        @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="qty">Quantity</label>
                        <input type="text" class="form-control @error('qty') is-invalid @enderror" value="{{ old('qty') }}"
                            name="qty" id="qty">
                        @error('qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="min_qty">Minimum Quantity</label>
                        <input type="text" class="form-control @error('min_qty') is-invalid @enderror" value="{{ old('min_qty') }}"
                            name="min_qty" id="min_qty">
                        @error('min_qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6 mb-4">
                        <label for="max_qty">Maximum Quantity</label>
                        <input type="text" class="form-control @error('max_qty') is-invalid @enderror" value="{{ old('max_qty') }}"
                            name="max_qty" id="max_qty">
                        @error('max_qty')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-12 mb-4">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                            id="image">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-12 mb-4 text-center">
                        <button type="reset" class="btn btn-danger">Reset</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

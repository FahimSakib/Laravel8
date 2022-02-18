@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Product Name</th>
                <th>Brand Name</th>
                <th>Category Name</th>
            </thead>
            <tbody>
                @foreach ($brands->products as $item)
                <tr>
                    <td>{{ $brands->id }}</td>
                    <td>{{ $item->product_name}}</td>
                    <td>{{ $brands->brand_name }}</td>
                    {{-- <td>{{ $item->category->category_name }}</td> --}}
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

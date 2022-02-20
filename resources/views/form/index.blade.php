@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Product Name</th>
                <th>Materials</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>
                        <ol>
                            @foreach ($product->materials as $item)
                            <li>{{ $item->material_name }} - {{ $item->pivot->material_qty }}</li>
                            @endforeach
                        </ol>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Material Name</th>
                <th>Products</th>
            </thead>
            <tbody>
                @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->id }}</td>
                    <td>{{ $material->material_name }}</td>
                    <td>
                        <ol>
                            @foreach ($material->products as $item)
                            <li>{{ $item->id }} {{ $item->product_name }} - {{ $item->pivot->material_qty }}</li>
                            @endforeach
                        </ol>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

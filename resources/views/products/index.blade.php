@extends('layouts.app')
@section('content')
    <a href="{{ route('products.create') }}" class="btn btn-primary">Add Product</a>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Categories</a>
    <table class="table">
        <h3 class="text-primary my-4">Products Details</h3>
        <thead>
            <tr>
                {{-- <th>ID</th> --}}
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($products as $product)
                <tr>
                    {{-- <td>{{ $i }}</td> --}}
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->category->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td class="d-flex">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-primary mx-2">Edit</a>
                        <form method="POST" action="{{ route('products.destroy', $product) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @php
                    $i++;
                @endphp
            @endforeach
        </tbody>
    </table>
    {{ $products->links('pagination::bootstrap-4') }}
@endsection

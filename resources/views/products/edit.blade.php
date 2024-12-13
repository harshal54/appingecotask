@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-6">
                <h2 class="text-primary">Add Product</h2>
                <form method="POST" action="{{ route('products.update', $product->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
                        <input type="text" name="name" value="{{ $product->name }}" class="form-control" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-select" name="category_id">
                            @if (!empty($categories))
                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                                @endforeach
                            @endif
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="price" value="{{ $product->price }}" class="form-control" />
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update Product</button>
                </form>

            </div>
        </div>
    </div>
@endsection

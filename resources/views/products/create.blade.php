@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-6">
                <h2 class="text-primary">Add Product</h2>
                <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="name" placeholder="Product Name" class="form-control" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <select class="form-select" name="category_id">
                            <option value="">Select Category</option>
                            @if (!empty($categories))
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('category_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <input type="number" name="price" placeholder="Product Price" class="form-control" />
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </form>

            </div>
        </div>
    </div>
@endsection

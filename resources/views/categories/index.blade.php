@extends('layouts.app')
@section('content')
<a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a>
<a href="{{ route('products.index') }}" class="btn btn-primary">Products</a>
<table class="table">
    <h3 class="text-primary my-4">Categories Details</h3>
    <thead>
        <tr>
            {{-- <th>ID</th> --}}
            <th>Name</th>
            <th>Product Count</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @php
             $i = 1;
        @endphp
        @foreach($categories as $category)
        <tr>
            {{-- <td>{{ $i }}</td> --}}
            <td>{{ $category->name }}</td>
            <td>{{ $category->products_count }}</td>
            <td class="d-flex">
                <a href="{{ route('categories.edit', $category) }}" class="btn btn-primary mx-2">Edit</a>
                <form method="POST" action="{{ route('categories.destroy', $category) }}">
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
{{ $categories->links('pagination::bootstrap-4') }}
@endsection

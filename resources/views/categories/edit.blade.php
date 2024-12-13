@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-primary">Edit Category</h2>
            <form action="{{ route('categories.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                   <input type="text" name="name" placeholder="Name" class="form-control" value="{{ $category->name }}" />
                   @error('name')
                   <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
               <button type="submit" class="btn btn-primary">Update Category</button>
            </form>

        </div>
    </div>
</div>
@endsection

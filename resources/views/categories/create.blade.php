@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-primary">Add Category</h2>
            <form method="POST" action="{{ route('categories.store') }}">
                @csrf
                <div class="form-group mb-3">
                   <input type="text" name="name" placeholder="Name" class="form-control" />
                   @error('name')
                   <span class="text-danger">{{ $message }}</span>
                   @enderror
                </div>
               <button type="submit" class="btn btn-primary">Add Category</button>
            </form>

        </div>
    </div>
</div>
@endsection

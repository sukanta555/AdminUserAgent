@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')        
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->title }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="product_name" class="form-control" placeholder="Product Name" value="{{ $product->product_name }}">
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product Code</label>
                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->product_code }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}">
            </div>
        </div>
        <div class="row">
            <div class="mb-3">
                <label for="product_img">Product Image</label>
                <input type="file" name="product_img" class="form-control">
                @if ($product->product_img) {{-- Check if there's an existing image --}}
                    <img src="{{ asset('storage/' . $product->product_img) }}" alt="Product Image" style="width: 100px; margin-top: 10px;">
                @endif
            </div>
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" placeholder="Description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="{{ url('/products') }}" class="btn btn-danger">Cancel</a>
            </div>
        </div>
    </form>
@endsection
@extends('master')

@section('title', 'Edit Product')

@section('content')

    <form action="/product/{{$product->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{-- validate error --}}
        @method("PUT")
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-3">
            <label class="form-label">Category</label>
            <select name="category_id" id="" class="form-control">
            <option value="">--pilih category--</option>
                @forelse ($categories as $item)
                    @if ($item->id === $product->category_id)
                        <option value="{{$item->id}}" selected>{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                    
                @empty
                    <option value="">Tidak ada Category</option>
                @endforelse
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="{{old('name', $product->name)}}">
        </div>

        <div class="mb-3">
            <label class="form-label">Change Image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="mb-3">
            <label class="form-label">Price</label>
            <input type="number" name="price" class="form-control" value="{{old('price', $product->price)}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Stock</label>
            <input type="number" name="stock" class="form-control" value="{{old('stock', $product->stock)}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" cols="30" rows="10">{{old('description', $product->description)}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
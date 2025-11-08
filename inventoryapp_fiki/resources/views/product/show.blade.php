@extends('master')

@section('title', 'List Product')

@section('content')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<a href="/product/create" class="btn btn-sm btn-primary my-3">Tambah</a>

<div class="row">
    @forelse ($product as $item)
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('image/' . $item->image) }}" style="height: 200px; object-fit: cover;" class="card-img-top" alt="{{ $item->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{Str::limit($item->name, 50)}}</h5>
                    <p class="card-text text-primary fw-bold fs-3 mb-1">Rp {{ number_format($item->price ?? 0, 0, ',', '.') }}</p>
                    <p class="card-text text-primary fs-3 mt-0 mb-2">Jumlah Stock: {{ $item->stock ?? 0 }}</p>
                    <p class="card-text mb-3">{{ Str::limit($item->description, 20) }}</p>
                    <div class="d-grid mb-3">
                        <a href="/product/{{$item->id}}" class="btn btn-primary">Read More</a>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="/product/{{$item->id}}/edit" class="btn btn-warning w-50 me-2">Edit</a>
                        
                        <form action="/product/{{$item->id}}" method="POST" class="w-50 ms-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="Delete" class="btn btn-danger w-100">Delete</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    @empty
        <h4>Product masih kosong</h4>
    @endforelse

</div>

@endsection
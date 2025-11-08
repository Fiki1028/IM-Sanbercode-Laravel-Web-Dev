@extends('master')

@section('title', 'Detail Product')

@section('content')

<img src="{{asset('image/'.$product->image)}}" width="100%"alt="">
<h5 class="card-title">{{($product->name)}}</h5>
<p class="card-text text-primary fw-bold fs-3 mb-1">Rp {{ number_format($product->price ?? 0, 0, ',', '.') }}</p>
<p class="card-text text-primary fs-3 mt-0 mb-2">Jumlah Stock: {{ $product->stock ?? 0 }}</p>
<p class="card-text mb-3">{{($product->description)}}</p>
<a href="/product" class="btn btn-primary">Kembali</a>

@endsection
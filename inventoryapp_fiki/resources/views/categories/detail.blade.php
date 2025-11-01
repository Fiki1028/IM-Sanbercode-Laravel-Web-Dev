@extends('master')

@section('title', 'Detail Category')

@section('content')

    <h1 class="text-primary">{{$category->name}}</h1>
    <p>{{$category->description}}</p>

    <a href="/category" class="btn btn-secondary btn-sm">Kembali</a>

@endsection
@extends('master')

@section('title', 'Tampil Category')

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="/category/create" class="btn btn-primary">Tambah</a>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$category->name}}</td>
                    <td>
                        <form action="/category/{{$category->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/category/{{$category->id}}" class="btn btn-primary btn-sm">Detail</a>
                            <a href="/category/{{$category->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                        </form>
                    </td>
                </tr>
            @empty
                <p><br>No categories</p>
            @endforelse
            
        </tbody>
    </table>

@endsection
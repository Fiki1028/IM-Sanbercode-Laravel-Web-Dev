<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Products;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Products::get();

        return view('product.show', ['product'=> $product]);
    }

    public function create()
    {
        $categories = Categories::get();

        return view('product.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request
        $request->validate(
            [
        'category_id' => 'required',
        'name' => 'required|min:4',
        'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        'price' => 'required',
        'stock' => 'required',
        'description' => 'required',
        ],
            [
                'required' => 'Inputan :attribute tidak boleh kosong',
                'min' => 'Inputan :attribute minimal 4 karakter'
            ]
        );

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('image'), $imageName);

        $product = new Products;

        $product->category_id = $request->input('category_id');
        $product->name = $request->input('name');
        $product->image = $imageName;

        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->description = $request->input('description');

        $product->save();

        return redirect('/product')->with('success', 'Product berhasil ditambah');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Products::find($id);
        return view('product.detail', ['product'=> $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Products::find($id);
        $categories = Categories::get();

        return view('product.edit', ['product'=> $product, 'categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
        'category_id' => 'required',
        'name' => 'required|min:4',
        'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        'price' => 'required',
        'stock' => 'required',
        'description' => 'required',
        ],
            [
                'required' => 'Inputan :attribute tidak boleh kosong',
                'min' => 'Inputan :attribute minimal 4 karakter'
            ]
        );

        $product  = Products::find($id);
        if($request->hasFile('image')){
            if($product->image){
                if(File::exists(public_path('image/'. $product->image))){
                    File::delete(public_path('image/'. $product->image));
                }

                $imageName = time().'.'.$request->image->extension();
                $request->image->move(public_path('image'), $imageName);

                $product->image = $imageName;

            }
        }

        $product->name  = $request->input('name');
        $product->description  = $request->input('description');
        $product->price  = $request->input('price');
        $product->stock  = $request->input('stock');
        $product->category_id  = $request->input('category_id');

        $product->save();

        return redirect('/product')->with('success', 'Product berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::find($id);

        if($product->image){
            if(File::exists(public_path('image/'. $product->image))){
                File::delete(public_path('image/'. $product->image));
            }
        }
        
        $product->delete();

        return redirect('/product')->with('success', 'Berhasil hapus data product!!!');
    }
}

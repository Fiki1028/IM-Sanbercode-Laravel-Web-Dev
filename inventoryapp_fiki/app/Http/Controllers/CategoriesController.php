<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }


    public function store(Request $request)
    {
        // validate request
        $request->validate(
            [
        'name' => 'required|min:4',
        'description' => 'required',
        ],
            [
                'required' => 'Inputan :attribute tidak boleh kosong',
                'min' => 'Inputan :attribute minimal 4 karakter'
            ]
        );

        $now = Carbon::now();
        // insert data
        DB::table('categories')->insert(
            [
        'name' => $request->input('name'),
        'description' => $request->input('description'),
        'created_at' => $now,
        'updated_at' => $now
    ]
        );

        return redirect('/category')->with('success', 'Category berhasil ditambah');
    }

    public function index()
    {
        $categories = DB::table('categories')->get();

        return view('categories.show', compact('categories'));
    }

    public function show($id)
    {
        $category = DB::table('categories')->find($id);

        return view('categories.detail', compact('category'));
    }

    public function edit($id)
    {

        $category = DB::table('categories')->find($id);

        return view('categories.edit', compact('category'));
    }

    public function update($id, Request $request)
    {
        // validate request
        $request->validate(
            [
        'name' => 'required|min:4',
        'description' => 'required',
        ],
            [
                'required' => 'Inputan :attribute tidak boleh kosong',
                'min' => 'Inputan :attribute minimal 4 karakter'
            ]
        );

        $now = Carbon::now();

        // update
        DB::table('categories')
            ->where('id', $id)
            ->update(
                [
                    'name' => $request->input('name'),
                    'description' => $request->input('description'),
                    'created_at' => $now,
                    'updated_at' => $now
                ]
            );

        return redirect('/category')->with('success', 'Category berhasil diupdate');
    }

    public function destroy($id)
    {
        // delete
        DB::table('categories')->where('id', $id)->delete();

        return redirect('/category')->with('success', 'Category berhasil dihapus');
    }
}

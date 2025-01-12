<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //menampilkan produk 
    public function index()
    {
        $produk = Produk::all();
        return view('produk.index', compact('produk'));
    }

    //menampilkan form tambah produk
    public function create()
    {
        return view('produk.create');
    }


    //fungsi untuk menyimpan produk
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'name' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'harga' => 'required',
            'stok' => 'required|integer',

        ]);


        produk::created($validatedData); // menyimpan data produk yang dibuat ke database webHerbal
        return redirect()->route('produk.index'); //redirect atau mengarahkand data ke halaman daftar produk
    }


    //fungsi untuk menampilkan form edit produk
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk')); //redirect data supaya kehalaman edit
    }

    //fungsi untuk mengupdate produk
    public function update(Request $request, Produk $produk)
    {
        $validateData = $request->validate([
            'name' => 'required|string|max:50',
            'deskripsi' => 'required|string',
            'harga' => 'required',
            'stok' => 'required|integer',

        ]);
        $produk->update($validateData);
        return redirect()->route('produk.index');
    }

    //fungsi untuk menghapus produk
    public function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect()->route('produk.index');
    }
}

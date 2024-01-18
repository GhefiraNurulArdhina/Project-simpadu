<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarangRequest;
use App\Http\Requests\UpdateBarangRequest;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index(Request $request)
    {
        $query = Barang::query();
        if ($request->has('name')) {
            $query->where('kode_barang', 'like', '%' . $request->input('name') . '%');
        }

        $barang = $query->paginate(10)->withQueryString();
     
        return view('pages.barang.index', compact('barang'));
    }
     

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarangRequest $request)
    {

        Barang::create([
            'kode_barang' => $request['kode_barang'],
            'nama_barang' => $request['nama_barang'],
            'satuan' => $request['satuan'],
            'quantity' => $request['quantity'],
        ]);

        return redirect(route('barang.index'))->with('success', 'data barang berhasil disimpan');
    }

    public function create()
    {
    return view('pages.barang.create');
    }

    public function edit(Barang $barang)
    {
        return view('pages.barang.edit')->with('barang', $barang);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarangRequest $request, Barang $barang)
    {
        $validate = $request->validated();
        $barang->update($validate);
        return redirect()->route('barang.index')->with('success', 'Edit Barang Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('success', 'Delete Barang Successfully');
    }
}

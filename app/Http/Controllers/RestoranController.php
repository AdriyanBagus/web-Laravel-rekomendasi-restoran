<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restoran;
use Illuminate\Support\Facades\DB;

class RestoranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Restoran::orderBy('id', 'asc')->get();
        return view('form')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nama_restoran' => 'required',
            'alamat_restoran' => 'required',
            'Harga' => 'required',
            'Lokasi' => 'required',
            'Menu' => 'required',
            'Pelayanan' => 'required',
            'Jarak' => 'required',
        ]);

        // $data = [
        //     'id' => $id,
        //     'nama' => $request->fname,
        //     'nama_restoran' => $request->restoran,
        //     'alamat_restoran' => $request->alamat
        // ];
        Restoran::create($data);

        return redirect()->to('/form')->with('success', 'Sukses Menambahkan Data');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Restoran::whereId($id)->first();
        return view('edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'nama_restoran' => 'required',
            'alamat_restoran' => 'required',
            'Harga' => 'required',
            'Lokasi' => 'required',
            'Menu' => 'required',
            'Pelayanan' => 'required',
            'Jarak' => 'required',
        ]);

        Restoran::where('id',$id)->update($data);

        return redirect()->to('/product')->with('success', 'Sukses Edit Data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Restoran::whereId($id)->first();
        $data->delete();
        return redirect()->to('/product');
    }
}

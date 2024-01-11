<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{

    public function index()
    {
        //
        $data = Pelanggan::all();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        //
        Pelanggan::create($request->all());

        return response()->json($request);
    }

    public function show($id)
    {
        //
        $data = Pelanggan::where('id_pelanggan',$id)->get();
        return response()->json($data);
    }

   
    public function update(Request $request,$id)
    {
        //
        Pelanggan::where('id_pelanggan',$id)->update($request->all());
        return response()->json("Data Pelanggan berhasil diupdate!");
    }

    public function destroy($id)
    {
        //
        Pelanggan::where('id_pelanggan',$id)->delete();
        return response()->json("Data Pelanggan berhasil dihapus!");
    }
}

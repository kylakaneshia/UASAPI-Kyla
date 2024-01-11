<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{

    public function index()
    {
        //
        $data = Pembelian::all();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        //
        Pembelian::create($request->all());

        return response()->json($request);
    }

    public function show($id)
    {
        //
        $data =  Pembelian::where('id_pembelian',$id)->get();
        return response()->json($data);
    }

   
    public function update(Request $request,$id)
    {
        //
        Pembelian::where('id_pembelian',$id)->update($request->all());
        return response()->json("Data  Pembelian berhasil diupdate!");
    }

    public function destroy($id)
    {
        //
        Pembelian::where('id_pembelian',$id)->delete();
        return response()->json("Data Pembelian berhasil dihapus!");
    }
}

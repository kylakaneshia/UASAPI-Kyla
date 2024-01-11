<?php

namespace App\Http\Controllers;


use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{

    public function index()
    {
        //
        $data = Tiket::all();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        //
        Tiket::create($request->all());

        return response()->json($request);
    }

    public function show($id)
    {
        //
        $data =   Tiket::where('id_tiket',$id)->get();
        return response()->json($data);
    }

   
    public function update(Request $request,$id)
    {
        //
        Tiket::where('id_tiket',$id)->update($request->all());
        return response()->json("Data   Tiket berhasil diupdate!");
    }

    public function destroy($id)
    {
        //
        Tiket::where('id_Tiket',$id)->delete();
        return response()->json("Data  Tiket berhasil dihapus!");
    }
}


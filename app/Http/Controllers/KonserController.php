<?php

namespace App\Http\Controllers;

use App\Models\Konser;
use Illuminate\Http\Request;

class KonserController extends Controller
{

    public function index()
    {
        //
        $data = Konser::all();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        //
        Konser::create($request->all());

        return response()->json($request);
    }

    public function show($id)
    {
        //
        $data = Konser::where('id_konser',$id)->get();
        return response()->json($data);
    }

   
    public function update(Request $request,$id)
    {
        //
        Konser::where('id_konser',$id)->update($request->all());
        return response()->json("Data Konser berhasil diupdate!");
    }

    public function destroy($id)
    {
        //
        Konser::where('id_konser',$id)->delete();
        return response()->json("Data Konser berhasil dihapus!");
    }
}

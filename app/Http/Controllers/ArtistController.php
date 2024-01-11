<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{

    public function index()
    {
        //
        $data = Artist::all();
        return response()->json($data);
    }

    public function create(Request $request)
    {
        //
        Artist::create($request->all());

        return response()->json($request);
    }

    public function show($id)
    {
        //
        $data = Artist::where('id_artis',$id)->get();
        return response()->json($data);
    }

   
    public function update(Request $request,$id)
    {
        //
        Artist::where('id_artis',$id)->update($request->all());
        return response()->json("Data berhasil diupdate!");
    }

    public function destroy($id)
    {
        //
        Artist::where('id_artis',$id)->delete();
        return response()->json("Data berhasil dihapus!");
    }
}

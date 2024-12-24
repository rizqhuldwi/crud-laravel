<?php

namespace App\Http\Controllers;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    function index(){
        $data = Pengguna::all();
        return view('pages.pengguna.index', compact('data'));
    }
    function tambah(){
        return view('pages.pengguna.tambah');
    }
    function simpan(Request $request){
        $data = $request->all();
        Pengguna::create($data);
        return redirect('/pengguna');
    }
    function edit($id){
        $data = Pengguna::find($id);
        return view('pages.pengguna.edit', compact('data'));
    }
    function update(Request $request, $id){
        $data = $request->all();
        $item = Pengguna::find($id);
        $item->update($data);
        return redirect('/pengguna');
    }
    function hapus($id){
        $item = Pengguna::find($id);
        $item->delete();
        return redirect('/pengguna');
    }
    
    
}

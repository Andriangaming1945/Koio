<?php

namespace App\Http\Controllers;

use App\Models\keterangan;
use Illuminate\Http\Request;

class KeteranganController extends Controller
{
    public function index()
    {
        return view('Keterangan');
    }
    public function show(){
        $keterangan = keterangan::all();
        return view('Keterangan_list', compact('keterangan'));
    }
    public function store(Request $request){
        $validated = $this->validate($request, [
            'nama' => 'required',
        ]);
        $keterangan = keterangan::create([
            'nama' => $validated['nama'],
        ]);
        if($keterangan){
            return redirect()->route('keterangan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('keterangan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit($id){
        $keterangan = keterangan::find($id);
        return view('Keterangan_edit', compact('keterangan'));
    }

    public function update(Request $request, $id){
        $validated = $this->validate($request, [
            'nama' => 'required',
        ]);
        $keterangan = keterangan::find($id);
        if($keterangan){
            $keterangan->update([
                'nama' => $validated['nama'],
            ]);
            return redirect()->route('keterangan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('keterangan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function destroy($id){
        $keterangan = keterangan::find($id);
        if($keterangan){
            $keterangan->delete();
            return redirect()->route('keterangan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('keterangan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\perizinan;
use App\Models\keterangan;
use Illuminate\Http\Request;

class PerizinanController extends Controller
{
    public function index()
    {
        $data['id'] = keterangan::pluck('id');
        $data['nama'] = keterangan::pluck('nama');
        return view('Perizinan',['nama' => $data['nama'], 'id' => $data['id']]);
    }
    public function show(){
        $perizinan = perizinan::select('id','user_id','tanggal','keterangan_id','surat_keterangan')->get()->toArray();
        
        //Thanks GPT
        $namaizin = [];
        foreach ($perizinan as $izin) { 
            $keterangan = keterangan::find($izin['keterangan_id']); 
            if ($keterangan) {
                $namaizin[] = $keterangan->nama;
            } else {
                
                $namaizin[] = 'Unknown';
            }
        }
        return view('Perizinan_list', ['perizinan' => $perizinan, 'namaizin' => $namaizin]);
    }
    public function store(Request $request){
        $validated = $this->validate($request, [
            'user_id' => 'required',
            'tanggal' => 'required',
            'keterangan_id' => 'required',
            'surat_keterangan' => 'required',
        ]);
        $perizinan = perizinan::create([
            'user_id' => $validated['user_id'],
            'tanggal' => $validated['tanggal'],
            'keterangan_id' => $validated['keterangan_id'],
            'surat_keterangan' => $validated['surat_keterangan'],
        ]);
        if($perizinan){
            return redirect()->route('perizinan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('perizinan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    public function edit($id){
        $perizinan = perizinan::find($id);
        $data['id'] = keterangan::pluck('id');
        $data['nama'] = keterangan::pluck('nama');
        return view('Perizinan_edit', ['perizinan' => $perizinan, 'nama' => $data['nama'], 'id' => $data['id']]);
    }

    public function update(Request $request, $id){
        $validated = $this->validate($request, [
            'user_id' => 'required',
            'tanggal' => 'required',
            'keterangan_id' => 'required',
            'surat_keterangan' => 'required',
        ]);
        $perizinan = perizinan::find($id);
        if($perizinan){
            $perizinan->update([
                'user_id' => $validated['user_id'],
                'tanggal' => $validated['tanggal'],
                'keterangan_id' => $validated['keterangan_id'],
                'surat_keterangan' => $validated['surat_keterangan'],
            ]);
            return redirect()->route('perizinan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('perizinan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
    
}

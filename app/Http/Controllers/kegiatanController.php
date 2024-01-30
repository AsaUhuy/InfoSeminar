<?php

namespace App\Http\Controllers;

use App\Models\kegiatanModels;
use Illuminate\Http\Request;
use App\Models\jenisKegiatanModels;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;

class kegiatanController extends Controller
{
    public function index(){
        $data = DB::table('jeniskegiatan')
            ->join('kegiatan', 'jeniskegiatan.id_jeniskegiatan', '=', 'kegiatan.id_jeniskegiatan')
            ->select('jeniskegiatan.nama', 'kegiatan.*')
            ->orderBy('kegiatan.id_kegiatan','DESC')
            ->get();
        return view('kegiatan/index',["title" => "Kegiatan"])->with('kegiatan',$data);
    }

    public function create(Request $request){
        return view('kegiatan/create');
    }

    public function store(Request $request){
        $request->validate([
            'namaKegiatan' => 'required',
            'jenisKegiatan' => 'required',
            'temaKegiatan' => 'required',
            'tanggalPelaksanaan' => 'required',
            'narasumber1' => 'required',
            'instansiNarasumber1' => 'required',
            'narasumber2' => 'required',
            'instansiNrasumber2' => 'required',
            'moderator' => 'required',
            'bgSertifikat' => 'required',
            'namaTTDser1' => 'required',
            'instansiTTDser1' => 'required',
            'namaTTDser2' => 'required',
            'instansiTTDser2' => 'required',
            'tanggalSertifikat' => 'required'
        ]);
        
        $kegiatan = new kegiatanModels();
        $kegiatan->id_kegiatan = $request->id_kegiatan;
        $kegiatan->namaKegiatan = $request->namaKegiatan;
        $kegiatan->id_jeniskegiatan = $request->id_jeniskegiatan;
        $kegiatan->temaKegiatan = $request->temaKegiatan;
        $kegiatan->tanggalPelaksanaan = $request->tanggalPelaksanaan;
        $kegiatan->narasumber1 = $request->narasumber1;
        $kegiatan->instansiNarasumber1 = $request->instansiNarasumber1;
        $kegiatan->narasumber2 = $request->narasumber2;
        $kegiatan->instansiNarasumber2 = $request->instansiNarasumber2;
        $kegiatan->moderator = $request->moderator;
        $kegiatan->bgSertifikat = $request->bgSertifikat;
        $kegiatan->namaTTDser1 = $request->namaTTDser1;
        $kegiatan->instansiTTDser1 = $request->instansiTTDser1;
        $kegiatan->namaTTDser2 = $request->namaTTDser2;
        $kegiatan->instansiTTDser2 = $request->instansiTTDser2;
        $kegiatan->tanggalSertifikat = $request->tanggalSertifikat;
        $kegiatan->save();
        
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('bgser/', $request->file('foto')->getClientOriginalName());
            $kegiatan->foto = $request->file('foto')->getClientOriginalName();
            $kegiatan->save();
        }
        
        kegiatanModels::create($request->all());
        
        dd($request->all());
            return redirect()->route('kegiatan/index')->with('success', 'Kegiatan added successfully');
        
        // kegiatanModels::create($request->all());
        // return redirect()->route('kegiatan/index')->with('success', 'Kegiatan added successfully');
    }

    // kegiatanModels $kegiatan
    public function show(string $id){
        $kegiatan = DB::table('users')
        ->join('kegiatankegiatan', 'users.id', '=', 'kegiatankegiatan.iduser')
        ->select('users.*', 'kegiatankegiatan.*')
        ->where('kegiatankegiatan.id', '=', $id)
        ->get();
        return view('kegiatan/index', ["title" => "Kegiatan","kegiatan" => $kegiatan]);
        // return view('kegiatan/index', compact('kegiatan'));
    }

    public function edit(string $id){
        $kegiatan = DB::table('users')
        ->join('kegiatan', 'jeniskegiatan.id_jeniskegiatan', '=', 'kegiatan.id_jeniskegiatan')
        ->select('jeniskegiatan.nama', 'kegiatan.*')
        ->orderBy('kegiatan.id_kegiatan','DESC')
        ->get();
        return view('admin.kegiatankegiatan.edit',["title" => "Kegiatan","kegiatan" => $kegiatan]);
        // $kegiatan = kegiatanModels::findOrFail($id);
        // return view('kegiatan/edit', compact('kegiatan'));
    }

    public function update(Request $request, $id){
        $kegiatan = kegiatanModels::findOrFail($id);
        $kegiatan->update($request->all());

        return redirect()->route('kegiatan/index', ['id' => $id])->with('success', 'Kegiatan berhasil diupdate');
    }

    public function destroy(string $id){
        $kegiatan = kegiatanModels::find($id);

        $kegiatan->delete();

        return redirect('kegiatan/destroy')->with('alert', 'Behasil di hapus');
    }
}

<?php
  namespace App\Http\Controllers;

  use Illuminate\Http\Request;
  use App\Models\JenisKegiatanModels;
  
  class JenisKegiatanController extends Controller
  {
      public function index()
      {
          $jenisKegiatan = JenisKegiatanModels::orderBy('created_at')->get();
          return view('jenisKegiatan/index', compact('jenisKegiatan'));
      }
  
      public function create(Request $request)
      { 
        return view('jenisKegiatan.create');
      }
  
      public function store(Request $request)
      {
        // dd($request->all());
          $request->validate([
              'nama' => 'required',
              'keterangan' => 'required'
          ]);
  
          JenisKegiatanModels::create($request->all());
  
          return redirect()->route('jenisKegiatan/index')->with('success', 'jenisKegiatan added successfully');
      }
  
      public function show(JenisKegiatanModels $jenisKegiatan)
    {
        return view('jenisKegiatan/show', compact('jenisKegiatan'));
    }
      
  
      public function edit(string $id)
    {
        $jenisKegiatan = JenisKegiatanModels::findOrFail($id);
        return view('jenisKegiatan/edit', compact('jenisKegiatan'));
    }

    public function update(Request $request,string $id)
    {
        $jenisKegiatan = JenisKegiatanModels::findOrFail($id);
        $request->validate([
            'nama' => 'required',
            'keterangan' => 'required',
        ]);

        $jenisKegiatan->update($request->all());

        return redirect()->route('jenisKegiatan/index')->with('success', 'Jenis Kegiatan berhasil diupdate');
    }
        public function destroy(string $id){
            $jenisKegiatan = JenisKegiatanModels::find($id);

            $jenisKegiatan->delete();
    
            return redirect()->route('jenisKegiatan/index')->with('alert', 'Behasil di hapus');
    }
        
  }
  
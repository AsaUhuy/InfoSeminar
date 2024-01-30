@extends('layouts.app')
  
@section('title', 'Show Jenis Kegiatan')
  
@section('contents')
    <h1 class="mb-0">Detail Jenis Kegiatan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <h4 class="m-0 font-weight-bold text-primary">A</h4> 
            <form action="{{ route('jenisKegiatan/index', ['id' => $jenisKegiatan->id_jeniskegiatan]) }}" method="POST">
                @csrf
                @method('PUT')
            <label class="form-label">Nama Jenis Kegiatan</label>
            <input type="text" name="nama" class="form-control"  value="{{ $jenisKegiatan->nama }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="{{ $jenisKegiatan->keterangan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" value="{{ $jenisKegiatan->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" value="{{ $jenisKegiatan->updated_at }}" readonly>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Edit Jenis Kegiatan')

@section('contents')
    <h1 class="mb-0">Edit Jenis Kegiatan</h1>
    <hr />
    <form action="{{ route('jenisKegiatan/index', ['id' => $jenisKegiatan->id_jeniskegiatan]) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $jenisKegiatan->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="{{ $jenisKegiatan->keterangan }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection

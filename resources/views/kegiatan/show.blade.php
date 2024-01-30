@extends('layouts.app')
  
@section('title', 'Show Jenis Kegiatan')
  
@section('contents')
    <h1 class="mb-0">Detail Jenis Kegiatan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Kegiatan</label>
            <input type="text" name="namaKegiatan" class="form-control" placeholder="namaKegiatan" value="{{ $kegiatan->namaKegiatan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jenis Kegiatan</label>
            <input type="text" name="jenisKegiatan" class="form-control" placeholder="jenisKegiatan" value="{{ $kegiatan->jenisKegiatan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tema Kegiatan</label>
            <input type="text" name="temaKegiatan" class="form-control" placeholder="temaKegiatan" value="{{ $kegiatan->temaKegiatan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Tanggal Pelaksanaan Kegiatan</label>
            <input type="text" name="tanggalKegiatan" class="form-control" placeholder="tanggalKegiatan" value="{{ $kegiatan->tanggalKegiatan }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Narasumber 1</label>
            <input type="text" name="narasumber1" class="form-control" placeholder="narasumber1" value="{{ $kegiatan->narasumber1 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">instansi Narasumber 1</label>
            <input type="text" name="instansiNarasumber1" class="form-control" placeholder="instansiNarasumber1" value="{{ $kegiatan->instansiNarasumber1 }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Narasumber 2</label>
            <input type="text" name="narasumber1" class="form-control" placeholder="narasumber2" value="{{ $kegiatan->narasumber2 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">instansi Narasumber 2</label>
            <input type="text" name="instansiNarasumber2" class="form-control" placeholder="instansiNarasumber2" value="{{ $kegiatan->instansiNarasumber2 }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Moderator</label>
            <input type="text" name="moderator" class="form-control" placeholder="moderator" value="{{ $kegiatan->moderator }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Background Sertifikat</label>
            <input type="text" name="bgsertifikat" class="form-control" placeholder="bgsertifikat" value="{{ $kegiatan->bgsertifikat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama TTD Sertifikat 1</label>
            <input type="text" name="namaTTDser1" class="form-control" placeholder="namaTTDser1" value="{{ $kegiatan->namaTTDser1 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Instansi TTd Sertifikat 1</label>
            <input type="text" name="instansiTTDser1" class="form-control" placeholder="instansiTTDser1" value="{{ $kegiatan->instansiTTDser1 }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama TTD Sertifikat 2</label>
            <input type="text" name="namaTTDser2" class="form-control" placeholder="namaTTDser2" value="{{ $kegiatan->namaTTDser2 }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Instansi TTd Sertifikat 2</label>
            <input type="text" name="instansiTTDser2" class="form-control" placeholder="instansiTTDser2" value="{{ $kegiatan->instansiTTDser2 }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Tanggal Sertifikat</label>
            <input type="date" name="tanggalSertifikat" class="form-control" placeholder="tanggalSertifikat" value="{{ $kegiatan->tanggalSertifikat }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $kegiatan->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $kegiatan->updated_at }}" readonly>
        </div>
    </div>
@endsection
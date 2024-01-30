@extends('layouts.app')
  
@section('title', 'Buat Kegiatan')
  
@section('contents')
    <h1 class="mb-0">Tambahkan Kegiatan</h1>
    <hr />
    <form action="{{ route('kegiatan/store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Nama Kegiatan</label>
                <input type="text" name="namaKegiatan" class="form-control" placeholder="Nama Kegiatan">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Jenis Kegiatan</label>
                <input type="text" name="id_jeniskegiatan" class="form-control" placeholder="Jenis Kegiatan">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Tema Kegiatan</label>
                <input type="text" name="temaKegiatan" class="form-control" placeholder="Tema Kegiatan">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Tanggal Pelaksanaan Kegiatan</label>
                <input type="date" name="tanggalPelaksanaan" class="form-control" placeholder="" >
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Narasumber 1</label>
                <input type="text" name="narasumber1" class="form-control" placeholder="Narasumber 1">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Instansi Narasumber 1</label>
                <input type="text" name="instansiNararumber1" class="form-control" placeholder="Instansi Narasumber 1">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Narasumber 2</label>
                <input type="text" name="narasumber2" class="form-control" placeholder="Narasumber 2">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Instansi Narasumber 2</label>
                <input type="text" name="instansiNararumber2" class="form-control" placeholder="Instansi Narasumber 2">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Moderator</label>
                <input type="text" name="moderator" class="form-control" placeholder="moderator">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Background Sertifikat</label>
                <input type="file" name="bgsertifikat" class="form-control" placeholder="bgsertifikat">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Nama TTD Sertifikat 1</label>
                <input type="text" name="namaTTDser1" class="form-control" placeholder="namaTTDser1">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Instansi TTD Sertifikat 1</label>
                <input type="text" name="instansiTTDser1" class="form-control" placeholder="instansiTTDser1">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Nama TTD Sertifikat 2</label>
                <input type="text" name="namaTTDser2" class="form-control" placeholder="namaTTDser2">
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Instansi TTD Sertifikat 2</label>
                <input type="text" name="instansiTTDser2" class="form-control" placeholder="instansiTTDser2">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col">
                <label for="inputState" class="form-label">Tanggal Sertifikat</label>
                <input type="date" name="tanggalSertifikat" class="form-control" placeholder="tanggalSertifikat">
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
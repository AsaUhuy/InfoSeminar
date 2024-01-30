@extends('layouts.app')
  
@section('title', 'Edit Kegiatan')
  
@section('contents')
    <h1 class="mb-0">Edit Kegiatan</h1>
    <hr />
    <form action="{{ route('jenisKegiatan/update', $jKegiatan->id) }}" method="POST">
        @csrf
        @method('GET')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $jKegiatan->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $jKegiatan->keterangan }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
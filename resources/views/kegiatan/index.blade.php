@extends('layouts/app')
  
@section('title', 'Kegiatan')
  
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">List Kegiatan</h4>
        <a href="{{ route('kegiatan/create') }}" class="btn btn-primary ml-auto"><i class="fa fa-plus" aria-hidden="true"></i></i></a>  
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead class="table-primary">
            <tr>
                <th class="col-1">Id</th>
                <th>Nama Kegiatan</th>
                <th>Jenis Kegaiatan</th>
                <th>Tema Kegiatan</th>
                <th>Tanggal Kegiatan</th>
                <th>Action</th>
                {{-- <th>Narasumber 1</th>
                <th>Instansi Narasumber 1</th>
                <th>Narasumber 2</th>
                <th>Instansi Narasumber 2</th>
                <th>Moderator</th>
                <th>BG Sertifikat</th>
                <th>Nama TTD Sertifikat 1</th>
                <th>Instansi TTD Sertifikat 1</th>
                <th>Nama TTD Sertifikat 2</th>
                <th>Instansi TTD Sertifikat 2</th>
                <th>Tannggal Sertifikat</th>
                <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>+
            @if($kegiatan->count() > 0)
                @foreach($kegiatan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->namaKegiatan }}</td>
                        <td class="align-middle">{{ $rs->id_jeniskegiatan }}</td>
                        <td class="align-middle">{{ $rs->temaKegiatan }}</td>
                        <td class="align-middle">{{ $rs->tanggalPelaksanaan }}</td>
                        {{-- <td class="align-middle">{{ $rs->narasumber1 }}</td>
                        <td class="align-middle">{{ $rs->instansiNarasumber1 }}</td>
                        <td class="align-middle">{{ $rs->narasumber2 }}</td>
                        <td class="align-middle">{{ $rs->instansiNarasumber2 }}</td>
                        <td class="align-middle">{{ $rs->moderator }}</td>
                        <td class="align-middle">{{ $rs->bgsertifikat }}</td>
                        <td class="align-middle">{{ $rs->namaTTDser1 }}</td>
                        <td class="align-middle">{{ $rs->instansiTTDser1 }}</td>
                        <td class="align-middle">{{ $rs->namaTTDser2 }}</td>
                        <td class="align-middle">{{ $rs->instansiTTDser2 }}</td>
                        <td class="align-middle">{{ $rs->tanggalSertifikat }}</td> --}}
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kegiatan/show', ['id' => $rs->id_kegiatan]) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kegiatan/update', ['id' => $rs->id_kegiatan]) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('kegiatan/destroy', ['id' => $rs->id_kegiatan]) }}" method="delete" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">jenis Kegiatan Tidak DItemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
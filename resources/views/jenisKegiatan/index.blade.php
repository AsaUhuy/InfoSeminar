@extends('layouts/app')
  
@section('title', 'Jenis Kegiatan')
  
@section('contents')
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-end">
        <h4 class="m-0 font-weight-bold text-primary">List Jenis Kegiatan</h4>
        <a href="{{ route('jenisKegiatan/create') }}" class="btn btn-primary ml-auto"><i class="fa fa-plus" aria-hidden="true"></i></i></a>  
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
                <th>Nama</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($jenisKegiatan->count() > 0)
                @foreach($jenisKegiatan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->keterangan }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('jenisKegiatan/show', ['id' => $rs->id_jeniskegiatan]) }}" type="button" class="btn btn-secondary">Detail</a>
                                <form action="{{ route('jenisKegiatan/edit', ['id' => $rs->id_jeniskegiatan]) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-warning m-0">Edit</button>
                                </form>
                                <form action="{{ route('jenisKegiatan/destroy', ['id' => $rs->id_jeniskegiatan]) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
</div>
@endsection
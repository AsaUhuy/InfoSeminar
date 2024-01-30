@extends('layouts/app')
  
@section('title', 'Home Product')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Product</h1>
        <a href="{{ route('jenisKegiatan/create') }}" class="btn btn-primary">Tamabahkan Jenis Kegiatan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
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
                                <a href="{{ route('jenisKegiatan/update', ['id' => $rs->id_jeniskegiatan]) }}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('jenisKegiatan/destroy', ['id' => $rs->id_jeniskegiatan]) }}" method="delete" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
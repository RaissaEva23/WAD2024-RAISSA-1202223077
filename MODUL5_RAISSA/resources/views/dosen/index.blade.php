@extends('layouts.app')
@section('content')
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary d-flex gap-2">
            <div class=""><span class="material-symbols-rounded fs-6">add</span></div> Tambah Dosen
        </a>
    </div>

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel Dosen --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Kode Dosen</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telpon</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosens as $id)
                        <tr>
                            <td>{{ $id->kode_dosen }}</td>
                            <td>{{ $id->nama_dosen }}</td>
                            <td>{{ $id->nip }}</td>
                            <td>{{ $id->email }}</td>
                            <td>{{ $id->no_telepon}}</td>
                            <td>
                                <a href="{{ route('dosen.edit', $id->id) }}" class="btn btn-info text-white">Edit</a>
                                <a href="{{ route('dosen.show', $id->id) }}" class="btn btn-warning text-white">Detail</a>
                                <form action="{{ route('dosen.destroy', $id->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger text-white">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection

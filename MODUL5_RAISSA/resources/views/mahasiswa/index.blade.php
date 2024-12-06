@extends('layouts.app')
@section('content')
    {{-- Button Tambah Mahasiswa --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary d-flex gap-2">
            <div class=""><span class="material-symbols-rounded fs-6">add</span></div> Tambah Mahasiswa
        </a>
    </div>

    {{-- Success Alert --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Tabel Mahasiswa --}}
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Dosen Id</th>
                        <th scope="col">Email</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mahasiswas as $id)
                        <tr>
                            <td>{{ $id->nim }}</td>
                            <td>{{ $id->nama_mahasiswa }}</td>
                            <td>{{ $id->dosen_id }}</td>
                            <td>{{ $id->email }}</td>
                            <td>{{ $id->jurusan }}</td>
                            <td>
                                <a href="{{ route('mahasiswa.show', $id->id) }}" class="btn btn-info text-white">Detail</a>
                                <a href="{{ route('mahasiswa.edit', $id->id) }}" class="btn btn-warning text-white">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $id->id) }}" method="post" class="d-inline">
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

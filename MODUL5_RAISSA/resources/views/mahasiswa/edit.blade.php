@extends('layouts.app')
@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary d-flex gap-2">
            <div class="">
            </div> Daftar Mahasiswa
        </a>
    </div>

    {{-- Edit Mahasiswa --}}
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                <label for="nim" class="form-label">Kode Dosen</label>
                    <input type="text" class="form-control @error('nim') is-invalid @enderror" id="nim"
                        name="nim" placeholder="Masukkan nim mahasiswa" value="{{ old('nim', $mahasiswa->nim) }}">
                    @error('nim')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                    <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror" id="nama_mahasiswa"
                        name = "nama_mahasiswa" placeholder="Masukkan nama mahasiswa" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}">
                    @error('nama_mahasiswa')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="dosen_id" class="form-label">Dosen Id</label>
                    <input type="text" class="form-control @error('dosen_id') is-invalid @enderror" id="dosen_id"
                        name="dosen_id" placeholder="Dosen Id" value="{{ old('dosen_id', $mahasiswa->dosen_id) }}">
                    @error('dosen_id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Masukkan email" value="{{ old('email', $mahasiswa->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan"
                        name="jurusan" placeholder="Masukkan nama jurusan" value="{{ old('jurusan', $mahasiswa->jurusan) }}">
                    @error('jurusan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-danger">Batalkan</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection

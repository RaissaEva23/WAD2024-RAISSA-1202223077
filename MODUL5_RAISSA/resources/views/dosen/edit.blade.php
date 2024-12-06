@extends('layouts.app')

@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary d-flex gap-2">
            <div class="">
            </div> Daftar Dosen
        </a>
    </div>

    {{-- Edit Sebuah Dosen --}}
    <form action="{{ route('dosen.update', $dosen->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="kode_dosen" class="form-label">Kode Dosen</label>
                    <input type="text" class="form-control @error('kode_dosen') is-invalid @enderror" id="kode_dosen"
                        name="kode_dosen" placeholder="Masukkan kode dosen" value="{{ old('kode_dosen', $dosen->kode_dosen) }}" readonly>
                    @error('kode_dosen')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen</label>
                    <input type="text" class="form-control @error('nama_dosen') is-invalid @enderror" id="nama_dosen"
                        name="nama_dosen" placeholder="Masukkan nama dosen" value="{{ old('nama_dosen', $dosen->nama_dosen) }}">
                    @error('nama_dosen')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip"
                        name="nip" placeholder="Masukkan NIP" value="{{ old('nip', $dosen->nip) }}">
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                        name="email" placeholder="Masukkan email" value="{{ old('email', $dosen->email) }}">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="no_telepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control @error('no_telepon') is-invalid @enderror" id="no_telepon"
                        name="no_telepon" placeholder="Masukkan nomor telepon" value="{{ old('no_telepon', $dosen->no_telepon) }}">
                    @error('no_telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <a href="{{ route('dosen.index') }}" class="btn btn-danger">Batalkan</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection
    
@extends('layouts.app')

@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary d-flex gap-2">
            <div class="">
                <span class="material-symbols-rounded fs-6">
                    mahasiswa
                </span>
            </div> Daftar Mahasiswa
        </a>
    </div>

    {{-- Show Detail Mahasiswa --}}
    <div class="card">
        <div class="card-header">
            <h3>Detail Mahasiswa</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>NIM:</strong>
                <p>{{ $mahasiswa->nim }}</p>
            </div>
            <div class="mb-3">
                <strong>Nama:</strong>
                <p>{{ $mahasiswa->nama_mahasiswa }}</p>
            </div>
            <div class="mb-3">
                <strong>Dosen Id:</strong>
                <p>{{ $mahasiswa->dosen_id }}</p>
            </div>
            <div class="mb-3">
                <strong>Email:</strong>
                <p>{{ $mahasiswa->email }}</p>
            </div>
            <div class="mb-3">
                <strong>Jurusan:</strong>
                <p>{{ $mahasiswa->jurusan }}</p>
            </div>
            <div class="mb-3">
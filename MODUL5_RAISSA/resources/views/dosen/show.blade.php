@extends('layouts.app')

@section('content')
    {{-- Back Button --}}
    <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-3">
        <a href="{{ route('dosen.index') }}" class="btn btn-outline-primary d-flex gap-2">
            <div class="">
                <span class="material-symbols-rounded fs-6">
                    dosen
                </span>
            </div> Daftar Dosen
        </a>
    </div>

    {{-- Show Detail Dosen --}}
    <div class="card">
        <div class="card-header">
            <h3>Detail Dosen</h3>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Kode Dosen:</strong>
                <p>{{ $dosen->kode_dosen }}</p>
            </div>
            <div class="mb-3">
                <strong>Nama:</strong>
                <p>{{ $dosen->nama_dosen }}</p>
            </div>
            <div class="mb-3">
                <strong>NIP:</strong>
                <p>{{ $dosen->nip }}</p>
            </div>
            <div class="mb-3">
                <strong>Email:</strong>
                <p>{{ $dosen->email }}</p>
            </div>
            <div class="mb-3">
@extends('layouts.app')

@section('content')

<style>
    body {
        background: #080d19;
        color: white;
    }

    .form-page {
        max-width: 750px;
        margin: 40px auto;
    }

    .form-card {
        background: #111827;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 15px 40px rgba(0,0,0,.25);
    }

    .page-title {
        font-size: 28px;
        font-weight: 800;
    }

    .form-label {
        color: #cbd5e1;
        font-weight: 600;
    }

    .form-control {
        background: #0f172a;
        border: 1px solid #334155;
        color: white;
        padding: 12px;
    }

    .form-control:focus {
        background: #0f172a;
        color: white;
        border-color: #6366f1;
        box-shadow: 0 0 0 .2rem rgba(99,102,241,.15);
    }

    .btn-save {
        background: #6366f1;
        border: none;
        color: white;
        font-weight: 700;
        padding: 11px 20px;
        border-radius: 8px;
    }

    .btn-back {
        background: #334155;
        color: white;
        padding: 11px 20px;
        border-radius: 8px;
        text-decoration: none;
    }

    .text-danger {
        font-size: 13px;
    }
</style>

<div class="container form-page">

    <div class="form-card">

        <h1 class="page-title mb-2">
            <i class="bi bi-pencil-square me-2"></i>
            Edit Jenis
        </h1>

        <p class="text-secondary mb-4">
            Ubah informasi jenis produk.
        </p>

        @if($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('jenis.update', $jenis->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="mb-3">

                <label class="form-label">
                    Nama Jenis
                </label>

                {{-- PERBAIKAN: name="nama_jenis", old('nama_jenis', $jenis->nama_jenis), @error('nama_jenis') --}}
                <input
                    type="text"
                    name="nama_jenis"
                    class="form-control"
                    value="{{ old('nama_jenis', $jenis->nama_jenis) }}"
                    required
                >

                @error('nama_jenis')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="mb-4">

                <label class="form-label">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control"
                    rows="5"
                >{{ old('deskripsi', $jenis->deskripsi) }}</textarea>

                @error('deskripsi')
                    <div class="text-danger mt-1">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            <div class="d-flex gap-2">

                <a href="{{ route('jenis.index') }}" class="btn-back">
                    <i class="bi bi-arrow-left me-1"></i>
                    Kembali
                </a>

                <button type="submit" class="btn-save">
                    <i class="bi bi-save me-1"></i>
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

@endsection
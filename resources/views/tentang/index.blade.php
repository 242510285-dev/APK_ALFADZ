@extends('layouts.app')

@section('content')

<style>
    body {
        background: #080d19;
        color: #f8fafc;
    }

    .tentang-page {
        max-width: 1000px;
        margin: 40px auto;
        padding: 20px;
    }

    .tentang-card {
        background: #111827;
        border: 1px solid rgba(255,255,255,.08);
        border-radius: 18px;
        padding: 35px;
        box-shadow: 0 10px 30px rgba(0,0,0,.25);
    }

    .tentang-title {
        font-size: 32px;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 8px;
    }

    .tentang-subtitle {
        color: #94a3b8;
        margin-bottom: 30px;
    }

    .section {
        margin-bottom: 30px;
    }

    .section h2 {
        font-size: 22px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 12px;
    }

    .section p {
        color: #cbd5e1;
        font-size: 16px;
        line-height: 1.8;
    }

    .contact-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
        margin-top: 15px;
    }

    .contact-item {
        background: #1e293b;
        border: 1px solid #334155;
        border-radius: 12px;
        padding: 16px 20px;
    }

    .contact-item .label {
        color: #94a3b8;
        font-size: 13px;
        margin-bottom: 5px;
    }

    .contact-item .value {
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
    }

    .btn-back {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        margin-top: 10px;
        padding: 10px 18px;
        background: #1e293b;
        border: 1px solid #334155;
        border-radius: 10px;
        color: #ffffff;
        text-decoration: none;
        transition: .2s;
    }

    .btn-back:hover {
        background: #334155;
        color: #ffffff;
    }

    @media (max-width: 700px) {
        .contact-grid {
            grid-template-columns: 1fr;
        }

        .tentang-card {
            padding: 25px;
        }
    }
</style>

<div class="tentang-page">

    <div class="tentang-card">

        <div class="section">
            <h2>Tentang Saya</h2>

            <p>
                Halo, saya <strong>{{ auth()->user()->name ?? 'Alfadz' }}</strong>, saya merupakan siswa
                kelas <strong>XII PPLG 4</strong>.
            </p>

            <p>
                Saya memiliki ketertarikan dalam bidang teknologi,
                khususnya pemrograman dan pengembangan aplikasi.
                Saat ini saya sedang belajar dan mengembangkan kemampuan
                dalam membuat aplikasi berbasis web.
            </p>
        </div>

        <div class="section">
            <h2>Pendidikan</h2>

            <p>
                <strong>SMK NEGERI 4 TASIKMALAYA Kelas XII PPLG 4</strong><br>
                Jurusan <strong>Pengembangan Perangkat Lunak dan Gim (PPLG)</strong>.
            </p>

            <p>
                Selama belajar, saya mempelajari berbagai hal tentang
                pemrograman, pengembangan website, database, serta
                pembuatan aplikasi.
            </p>
        </div>

        <div class="section">
            <h2>Kontak</h2>

            <div class="contact-grid">

                <div class="contact-item">
                    <div class="label">Nama</div>
                    <div class="value">{{ auth()->user()->name ?? 'Alfadz' }}</div>
                </div>

                <div class="contact-item">
                    <div class="label">Kelas</div>
                    <div class="value">XII PPLG 4</div>
                </div>

                <div class="contact-item">
                    <div class="label">Jurusan</div>
                    <div class="value">PPLG</div>
                </div>

                <div class="contact-item">
                    <div class="label">Email</div>
                    <div class="value">{{ auth()->user()->email }}</div>
                </div>

                <div class="contact-item">
                    <div class="label">Telepon</div>
                    <div class="value">{{ auth()->user()->telepon ?? '0899990909' }}</div>
                </div>

            </div>
        </div>

        <a href="{{ url()->previous() }}" class="btn-back">
            ← Kembali
        </a>

    </div>

</div>

@endsection
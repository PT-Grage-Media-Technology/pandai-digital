@extends('dinas-2.layout')

@section('content')
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="text-center mb-4">Semua Agenda</h1>
            <hr>
            <ul class="list-unstyled">
                @foreach($agenda as $berita)
                    <li class="mb-4">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('foto_agenda/' . $berita->gambar) }}" class="img-fluid" alt="{{ $berita->tema }}" style="border-radius: 10px;">
                            </div>
                            <div class="col-md-8 d-flex flex-column justify-content-between">
                                <div>
                                    <h3 class="text-danger">{{ $berita->tema }}</h3>
                                    {!! Str::limit($berita->isi_agenda, 100, '...') !!} <!-- Menampilkan isi berita tanpa tag HTML -->
                                    <p class="text-muted">
                                        <i class="fa fa-calendar"></i> {{ $berita->tgl_mulai }}
                                    </p>
                                </div>
                                <div class="text-right">
                                    <a href="{{ route('detailagenda', $berita->tema_seo) }}" class="btn btn-danger">Read more...</a> <!-- Tautan ke halaman detail -->
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <!-- Tambahkan pagination -->
            <div class="d-flex justify-content-center mb-5">
            </div>
        </div>
    </div>
</div>
@endsection
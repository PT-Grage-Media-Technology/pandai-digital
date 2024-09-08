@extends('dinas-3.layout')


@section('content')

<div class="container mt-5 pt-5">
    <h1>Album</h1>
    <hr>
    <div class="row mb-5">
        @foreach($album as $item)
        <div class="col-md-4">
            <div class="card mb-4">
                <a href="{{ route('detailalbum', $item->album_seo) }}">
                    <img src="{{ asset('img_album/' . $item->gbr_album) }}" class="card-img-top" alt="{{ $item->jdl_album }}">
                </a>
                <div class="card-body">
                    <a href="{{ route('detailalbum', $item->album_seo) }}">
                        <h5 class="card-title">{{ $item->jdl_album }}</h5>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
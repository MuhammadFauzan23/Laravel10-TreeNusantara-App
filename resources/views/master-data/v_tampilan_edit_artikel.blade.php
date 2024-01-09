@extends('layout.template')
@extends('layout.sidebar')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-6 mt-3">
                <lottie-player class="text-center" src="../../asset/animasi/computer.json" background="transparent"
                    speed="1.2" style="width: auto; height: auto;" loop autoplay></lottie-player>
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6 text-left">
                                            <h5 class="modal-title">Ubah {{ $title }}</h5>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <span class="btn badge badge-success"><a style="color: black"
                                                    href="{{ '/list_artikel' }}"><i class="fas fa-reply"></i>
                                                    Kembali</a></span>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($data_artikel as $da)
                                    <form class="was-validated" action="/list_artikel/proses_edit/{{ $da->id }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Judul</label>
                                                        <input type="text" name="judul" class="form-control"
                                                            id="" value="{{ $da->judul }}" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Gambar Artikel</label>
                                                        <input type="file" name="gambar_artikel" class="form-control"
                                                            id="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Status</label>
                                                        <select name="is_active" id=""
                                                            class="select-control select2">
                                                            <option value="">-- Pilih Status --</option>
                                                            @if ($da->is_active == 1)
                                                                <option value="1" selected> Publish </option>
                                                                <option value="0"> Draft </option>
                                                            @elseif ($da->is_active == 0)
                                                                <option value="1"> Publish </option>
                                                                <option value="0"selected> Draft </option>
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Kategori</label>
                                                        <select name="kategori_id" id=""
                                                            class="select-control select2">
                                                            <option value="">-- Pilih --</option>
                                                            @foreach ($data_kategori as $dk)
                                                                @if ($da->kategori_id == $dk->id)
                                                                    <option value="{{ $dk->id }}" selected>
                                                                        {{ $dk->nama_kategori }}
                                                                    </option>
                                                                @else
                                                                    <option value="{{ $dk->id }}">
                                                                        {{ $dk->nama_kategori }}
                                                                    </option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Deskripsi</label>
                                                        <textarea rows="5" type="text" name="body" class="form-control editor" id="" required>{{ $da->body }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <button class="btn btn-success btn-sm" type="submit"> Simpan
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

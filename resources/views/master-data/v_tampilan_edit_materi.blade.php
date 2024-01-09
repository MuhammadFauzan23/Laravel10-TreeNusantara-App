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
                                                    href="{{ '/list_materi' }}"><i class="fas fa-reply"></i>
                                                    Kembali</a></span>

                                        </div>
                                    </div>
                                </div>
                                @foreach ($data_materi as $dm)
                                    <form action="/list_materi/proses_edit/{{ $dm->id }}" method="POST"
                                        enctype="multipart/form-data">
                                        <div class="card-body">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Judul</label>
                                                                <input type="text" name="judul_materi"
                                                                    class="form-control" id=""
                                                                    value="{{ $dm->judul_materi }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Link</label>
                                                                <input type="text" name="link" class="form-control"
                                                                    id="" value="{{ $dm->link }}" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Gambar Artikel</label>
                                                                <input type="file" name="gambar_materi"
                                                                    class="form-control" id="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Status</label>
                                                            <select name="is_active" id=""
                                                                class="select-control select2">
                                                                <option value="">-- Pilih Status --</option>
                                                                @if ($dm->is_active == 1)
                                                                    <option value="1" selected>Publish</option>
                                                                    <option value="0">Draft</option>
                                                                @elseif ($dm->is_active == 0)
                                                                    <option value="1">Publish</option>
                                                                    <option value="0"selected>Draft</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="">Playlist</label>
                                                            <select name="jenis_playlist" id=""
                                                                class="select-control select2">
                                                                <option value="">-- Pilih --</option>
                                                                @foreach ($data_playlist as $dp)
                                                                    @if ($dp->id == $dm->playlist_id)
                                                                        <option value="{{ $dp->id }}" selected>
                                                                            {{ $dp->judul_playlist }}
                                                                        </option>
                                                                    @else
                                                                        <option value="{{ $dp->id }}">
                                                                            {{ $dp->judul_playlist }}
                                                                        </option>
                                                                    @endif
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="">Body</label>
                                                        <textarea rows="5" id="" type="text" name="deskripsi" class="form-control editor" id=""
                                                            required>{{ $dm->deskripsi_materi }}</textarea>
                                                    </div>
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

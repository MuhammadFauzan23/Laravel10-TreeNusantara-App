@extends('layout.template')
@extends('layout.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col text-left">
                                    <h5>Master {{ $title }}</h5>
                                </div>
                                <div class="col text-right">
                                    <a href="" style="background-color:#7FFFD4" class="btn mr-1" data-toggle="modal"
                                        data-target="#addform"> <i class="nav-icon far fa-plus-square"></i>&nbsp; Tambah</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered tableView">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Materi Video</th>
                                        <th>Playlist</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data_materi as $dm)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $dm->judul_materi }}</td>
                                            <td>{{ $dm->playlist->judul_playlist }}</td>
                                            @if ($dm->is_active == 1)
                                                <td>Publish</td>
                                            @else
                                                <td>Draft</td>
                                            @endif
                                            <td class="text-center"><img src="{{ asset('uploads/' . $dm->gambar_materi) }}"
                                                    width="150" height="75"></td>
                                            <td class="text-center">
                                                <a href="{{ '/list_materi/tampilan_edit/' . $dm->id }}"
                                                    class="btn btn-warning mb-1"><i class="fas fa-edit"></i></a>
                                                {{-- <a href="" class="btn btn-warning mb-1" data-toggle="modal"
                                                    data-target="#editForm{{ $dm->id }}"><i
                                                        class="fas fa-edit"></i></a> --}}
                                                <a href="/list_materi/proses_hapus/{{ $dm->id }}"
                                                    class="btn btn-danger mb-1 hapus"><i class="far fa-trash-alt"></i> </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah-->
    <div class="modal fade" id="addform">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah data {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="was-validated" action="/list_materi/proses_tambah" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Materi Video</label>
                                    <input type="text" name="judul_materi" class="form-control" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Playlist</label>
                                            <select name="jenis_playlist" id="" class="select-control select2">
                                                <option value="">-- Pilih --</option>
                                                @foreach ($data_playlist as $dp)
                                                    <option value="{{ $dp->id }}">{{ $dp->judul_playlist }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Link Video</label>
                                    <input type="text" name="link" class="form-control" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="is_active" id="" class="select-control select2">
                                                <option value="">-- Pilih --</option>
                                                <option value="1">Publish</option>
                                                <option value="2">Draft</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Gambar Materi</label>
                                    <input type="file" name="gambar_materi" class="form-control" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Deskripsi</label>
                                    <textarea type="text" id="" name="deskripsi" class="form-control editor" id=""></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <!-- Modal Edit-->
    @foreach ($data_materi as $dm)
        <div class="modal fade" id="editForm{{ $dm->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah data {{ $title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="was-validated" action="/list_materi/proses_edit/{{ $dm->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul_materi" class="form-control"
                                                    id="" value="{{ $dm->judul_materi }}" required>
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
                                                <input type="text" name="link" class="form-control" id=""
                                                    value="{{ $dm->link }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Gambar Artikel</label>
                                                <input type="file" name="gambar_materi" class="form-control"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="is_active" id="" class="select-control select2">
                                                <option value="">-- Pilih --</option>
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
                                            <select name="jenis_playlist" id="" class="select-control select2">
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
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

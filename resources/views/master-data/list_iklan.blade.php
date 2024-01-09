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
                                        <th>Judul Iklan</th>
                                        <th>Link</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data_iklan as $di)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $di->judul_iklan }}</td>
                                            <td>{{ $di->link }}</td>
                                            @if ($di->status == 1)
                                                <td>Aktif</td>
                                            @else
                                                <td>Draft</td>
                                            @endif
                                            <td class="text-center"><img src="{{ asset('uploads/' . $di->gambar_iklan) }}"
                                                    width="150" height="75"></td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-warning mb-1" data-toggle="modal"
                                                    data-target="#editForm{{ $di->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="/list_iklan/proses_hapus/{{ $di->id }}"
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
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah data {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="was-validated" action="/list_iklan/proses_tambah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Judul Iklan</label>
                                    <input type="text" name="judul_iklan" class="form-control" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Link Iklan</label>
                                    <input type="text" name="link" class="form-control" id="" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Status</label>
                                    <select name="is_active" id="" class="select-control select2">
                                        <option value="">-- Pilih --</option>
                                        <option value="1">Aktif</option>
                                        <option value="2">Draft</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Gambar Iklan</label>
                                    <input type="file" name="gambar_iklan" class="form-control" id="" required>
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
    @foreach ($data_iklan as $di)
        <div class="modal fade" id="editForm{{ $di->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah data {{ $title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="was-validated" action="/list_iklan/proses_edit/{{ $di->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Judul</label>
                                                <input type="text" name="judul_iklan" class="form-control"
                                                    id="" value="{{ $di->judul_iklan }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Link</label>
                                                <input type="text" name="link" class="form-control" id=""
                                                    value="{{ $di->link }}" required>
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
                                                <label for="">Gambar Iklan</label>
                                                <input type="file" name="gambar_iklan" class="form-control"
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
                                                @if ($di->status == 1)
                                                    <option value="1" selected>Aktif</option>
                                                    <option value="0">Draft</option>
                                                @elseif ($di->status == 0)
                                                    <option value="1">Aktif</option>
                                                    <option value="0"selected>Draft</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Gambar saat ini</label><br>
                                        @if ($di->gambar_iklan)
                                            <img src="{{ asset('uploads/' . $di->gambar_iklan) }}" width="760"
                                                height="440">
                                        @else
                                            <span>No image found!</span>
                                        @endif
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

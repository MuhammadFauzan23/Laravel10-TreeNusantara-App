@extends('layout.template')
@extends('layout.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <lottie-player src="asset/animasi/calender.json" class="text-center" background="transparent" speed="0.5"
                        style="width: 100%; height: 100%;" loop autoplay></lottie-player>
                </div>
                <div class="col-md-6 mt-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col text-left">
                                    <h5>Master Kategori</h5>
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
                                        <th>Nama Kategori</th>
                                        <th>Slug</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data_kategori as $djb)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $djb->nama_kategori }}</td>
                                            <td>{{ $djb->slug }}</td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-warning mb-1" data-toggle="modal"
                                                    data-target="#editForm{{ $djb->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="/list_kategori/proses_hapus/{{ $djb->id }}"
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
                <form class="was-validated" action="/list_kategori/proses_tambah" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Jenis Kategori</label>
                                    <input type="text" name="nama_jenis" class="form-control" id="" required>
                                    <div class="invalid-feedback">
                                        Jenis kategori masih kosong...
                                    </div>
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
    @foreach ($data_kategori as $djb)
        <div class="modal fade" id="editForm{{ $djb->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah data {{ $title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="was-validated" action="/list_kategori/proses_edit/{{ $djb->id }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nama Kategori</label>
                                        <input type="text" name="nama_jenis_edit" class="form-control" id=""
                                            value="{{ $djb->nama_kategori }}" required>
                                        <div class="invalid-feedback">
                                            Nama Kategori masih kosong...
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Slug</label>
                                        <input type="text" name="slug_edit" class="form-control" id=""
                                            value="{{ $djb->slug }}" required>
                                        <div class="invalid-feedback">
                                            Slug masih kosong...
                                        </div>
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

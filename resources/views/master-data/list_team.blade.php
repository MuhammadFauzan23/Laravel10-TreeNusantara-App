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
                            <table class="table table-bordered table-responsive tableView">
                                <thead class="text-center">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Role</th>
                                        <th>Jabatan</th>
                                        <th>Status</th>
                                        <th>Gambar</th>
                                        <th>Instagram</th>
                                        <th>Twitter</th>
                                        <th>Facebook</th>
                                        <th>Linkedin</th>
                                        <th>Tiktok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach ($data_team as $dt)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td>{{ $dt->name }}</td>
                                            <td>{{ $dt->role }}</td>
                                            <td>{{ $dt->jabatan }}</td>
                                            @if ($dt->status == 1)
                                                <td>Aktif</td>
                                            @else
                                                <td>Blokir</td>
                                            @endif
                                            <td class="text-center"><img src="{{ asset('uploads/' . $dt->gambar_user) }}"
                                                    width="50" height="60"></td>
                                            <td class="text-center">
                                                <div class="member">
                                                    <div class="member-img">
                                                        <div class="social">
                                                            @if ($dt->instagram != null)
                                                                <a href="{{ $dt->instagram }}"><i
                                                                        class="bi bi-instagram"></i></a>
                                                            @else
                                                                <p>-</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="member">
                                                    <div class="member-img">
                                                        <div class="social">
                                                            @if ($dt->twitter != null)
                                                                <a href="{{ $dt->twitter }}"><i
                                                                        class="bi bi-twitter"></i></a>
                                                            @else
                                                                <p>-</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="member">
                                                    <div class="member-img">
                                                        <div class="social">
                                                            @if ($dt->facebook != null)
                                                                <a href="{{ $dt->facebook }}"><i
                                                                        class="bi bi-facebook"></i></a>
                                                            @else
                                                                <p>-</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="member">
                                                    <div class="member-img">
                                                        <div class="social">
                                                            @if ($dt->linkedin != null)
                                                                <a href="{{ $dt->linkedin }}"><i
                                                                        class="bi bi-linkedin"></i></a>
                                                            @else
                                                                <p>-</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <div class="member">
                                                    <div class="member-img">
                                                        <div class="social">
                                                            @if ($dt->tiktok != null)
                                                                <a href="{{ $dt->tiktok }}"><i
                                                                        class="bi bi-tiktok"></i></a>
                                                            @else
                                                                <p>-</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-center">
                                                <a href="" class="btn btn-warning mb-1" data-toggle="modal"
                                                    data-target="#editForm{{ $dt->id }}"><i
                                                        class="fas fa-edit"></i></a>
                                                <a href="/list_users/proses_hapus/{{ $dt->id }}"
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
                <form action="/list_users/proses_tambah" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Nama</label>
                                            <input type="text" name="username" class="form-control" id=""
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Foto</label>
                                            <input type="file" name="gambar_users" class="form-control" id=""
                                                required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Link Instagram</label>
                                            <input type="text" name="instagram" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Link Twitter</label>
                                            <input type="text" name="twitter" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Link Tiktok</label>
                                            <input type="text" name="tiktok" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Status</label>
                                        <select name="status" id="" class="select-control select2">
                                            <option value="">-- Pilih --</option>
                                            <option value="1">Aktif</option>
                                            <option value="2">Blokir</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Role</label>
                                        <select name="role" id="" class="select-control select2">
                                            <option value="">-- Pilih --</option>
                                            <option value="administrator">Administrator</option>
                                            <option value="penulis">Penulis</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Jabatan</label>
                                            <input type="text" name="jabatan" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Link Facebook</label>
                                            <input type="text" name="facebook" class="form-control" id="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Link Linkedin</label>
                                            <input type="text" name="linkedin" class="form-control" id="">
                                        </div>
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
    @foreach ($data_team as $dt)
        <div class="modal fade" id="editForm{{ $dt->id }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ubah data {{ $title }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/list_users/proses_edit/{{ $dt->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Nama</label>
                                                <input type="text" name="username" class="form-control"
                                                    id="" value="{{ $dt->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Foto</label>
                                                <input type="file" name="gambar_users" class="form-control"
                                                    id="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Link Instagram</label>
                                                <input type="text" name="instagram" class="form-control"
                                                    id="" value="{{ $dt->instagram }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Link Twitter</label>
                                                <input type="text" name="twitter" class="form-control" id=""
                                                    value="{{ $dt->twitter }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Link Tiktok</label>
                                                <input type="text" name="tiktok" class="form-control" id=""
                                                    value="{{ $dt->tiktok }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <select name="status" id="" class="select-control select2">
                                                <option value="">-- Pilih --</option>
                                                @if ($dt->status == '1')
                                                    <option value="1" selected>Aktif</option>
                                                    <option value="2">Blokir</option>
                                                @else
                                                    <option value="1">Aktif</option>
                                                    <option value="2" selected>Blokir</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select name="role" id="" class="select-control select2">
                                                <option value="">-- Pilih --</option>
                                                @if ($dt->role == 'administrator')
                                                    <option value="administrator" selected>Administrator</option>
                                                    <option value="penulis">Penulis</option>
                                                @else
                                                    <option value="administrator">Administrator</option>
                                                    <option value="penulis" selected>Penulis</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Jabatan</label>
                                                <input type="text" name="jabatan" class="form-control" id=""
                                                    value="{{ $dt->jabatan }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Link Facebook</label>
                                                <input type="text" name="facebook" class="form-control"
                                                    id="" value="{{ $dt->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="">Link Linkedin</label>
                                                <input type="text" name="linkedin" class="form-control"
                                                    id="" value="{{ $dt->linkedin }}">
                                            </div>
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

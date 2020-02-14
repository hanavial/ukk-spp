@extends('layouts.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-user icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>User
                    <div class="page-title-subheading">Daftar Pengguna
                    </div>
                </div>
            </div>

            <div class="page-title-actions">
                <button type="button" data-toggle="tooltip" title="Bintang hehe" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                    <i class="fa fa-star"></i>
                </button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-header">Tabel User
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <a href="{{route('user.create')}}" class="btn btn-focus" >Tambah +</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="dataTable">
                        <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">Nama</th>
                            <th class="text-center">Email</th>
                            <th class="text-center">Tahun Masuk</th>
                            <th class="text-center">Level</th>
                            <th class="text-center">Kelas</th>
                            <th class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=1
                        @endphp
                        @foreach($user as $u)
                            <tr>
                                <td class="text-center text-muted">{{$i++}}</td>
                                <td class="text-center">{{$u->name}}</td>
                                <td class="text-center">{{$u->email}}</td>
                                <td class="text-center">{{$u->tahun_masuk}}</td>
                                <td class="text-center">{{$u->level->nama}}</td>
                                <td class="text-center">{{$u->kelas->kelas}}</td>
                                <td class="text-center">
                                    <div class="columns">
                                        <a href="{{route('user.edit', $u->id)}}" class="mr-2 btn-wide btn btn-info">Edit</a>
                                        <a href="" class="mr-2 btn-icon btn-icon-only btn btn-danger" data-toggle="modal" data-target="#modelId" onclick="prepare({{$u->id}})"><i class="pe-7s-trash btn-icon-wrapper"> </i></a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-block text-center card-footer">
                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                    <button class="btn-wide btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 15vh">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="hidden" name="id" id="userid" readonly>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus User <b><span id="kelas">{{$u->name}}</span></b>?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                        <input type="submit" value="Hapus" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

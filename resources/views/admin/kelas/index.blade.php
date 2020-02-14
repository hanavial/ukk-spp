@extends('layouts.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-menu icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Kelas
                    <div class="page-title-subheading">Daftar Kelas Siswa
                    </div>
                </div>
{{--                <!-- Button trigger modal -->--}}
{{--                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">--}}
{{--                    Launch demo modal--}}
{{--                </button>--}}

{{--                <!-- Modal -->--}}
{{--                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">--}}
{{--                    <div class="modal-dialog" role="document">--}}
{{--                        <div class="modal-content">--}}
{{--                            <div class="modal-header">--}}
{{--                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
{{--                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                                    <span aria-hidden="true">&times;</span>--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                            <div class="modal-body">--}}
{{--                                ...--}}
{{--                            </div>--}}
{{--                            <div class="modal-footer">--}}
{{--                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                                <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
                <div class="card-header">Tabel Kelas
                    <div class="btn-actions-pane-right">
                        <div role="group" class="btn-group-sm btn-group">
                            <a href="{{route('kelas.create')}}" class="btn btn-focus" >Tambah +</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="dataTable">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">Wali Kelas</th>
                                <th class="text-center">Tahun Ajaran</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $i=1
                            @endphp
                            @foreach($kelas as $k)
                                <tr>
                                    <td class="text-center text-muted">{{$i++}}</td>
                                    <td class="text-center">{{$k->kelas}}</td>
                                    <td class="text-center">{{$k->wali_kelas}}</td>
                                    <td class="text-center">{{$k->tahun_ajaran}}</td>
                                    <td class="text-center">
                                        <div class="columns">
                                            <a href="{{route('kelas.edit',$k->id)}}" class="mr-2 btn-wide btn btn-info">Edit</a>
                                            <a href="" class="mr-2 btn-icon btn-icon-only btn btn-danger" data-toggle="modal" data-target="#modelId" onclick="prepare({{$k->id}})"><i class="pe-7s-trash btn-icon-wrapper"> </i></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="d-block text-center card-footer">
{{--                    <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>--}}
                    <button class="btn-wide btn btn-success">Oke</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog" role="document" style="margin-top: 15vh">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Konfirmasi Hapus Kelas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('kelas.destroy', $k->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <input type="hidden" name="id" id="kelasid" readonly>
                    <div class="modal-body">
                        Apakah anda yakin ingin menghapus kelas <b><span id="kelas">{{$k->kelas}}</span></b>?
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

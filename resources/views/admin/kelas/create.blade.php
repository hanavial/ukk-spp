@extends('layouts.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-user icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Tambah Kelas
                    <div class="page-title-subheading">Menambahkan Daftar Kelas
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
    <form method="POST" action="{{route('kelas.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            <label for="kelas" class="col-md-4 control-label">Kelas</label>
                            <div class="col-md-6">
                                <input id="kelas" type="text" class="form-control" name="kelas" value="" required>
                                @if ($errors->has('kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- <div class="form-group{{ $errors->has('nomor_anggota') ? ' has-error' : '' }}">
                                  <label for="penyedia" class="col-md-4 control-label">Penyedia</label>
                                    <div class="col-md-6">
                                        <input id="penyedia" type="text" class="form-control" name="penyedia" value="{{ old('penyedia') }}" required>
                                        @if ($errors->has('penyedia'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('penyedia') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> --}}



                        <div class="form-group{{ $errors->has('wali_kelas') ? ' has-error' : '' }}">
                            <label for="wali_kelas" class="col-md-4 control-label">Wali Kelas</label>
                            <div class="col-md-12">
                                <input id="wali_kelas" type="text"  class="form-control" name="wali_kelas" value="" required>
                                @if ($errors->has('wali_kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('wali_kelas') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tahun_ajaran') ? ' has-error' : '' }}">
                            <label for="tahun_ajaran" class="col-md-4 control-label">Tahun Ajaran</label>
                            <div class="col-md-12">
                                <input id="tahun_ajaran" type="text" class="form-control" name="tahun_ajaran" value="" >
                                @if ($errors->has('tahun_ajaran'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_ajaran') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submit">
                                    Submit
                                </button>
                                <button type="reset" class="btn btn-danger">
                                    Reset
                                </button>
                                <a href="{{route('kelas.index')}}" class="btn btn-light pull-right">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

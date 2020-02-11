@extends('layouts.app')

@section('content')
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-user icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>Edit User <b>{{$user->name}}</b> 
                    <div class="page-title-subheading">Mengedit User
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
    <form method="POST" action="{{route('user.update',$user->id)}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put')}}
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>
                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control" name="username" value="{{$user->username}}" required>
                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-12">
                                <input id="name" type="text"  class="form-control" name="name" value="{{$user->name}}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>
                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control" name="email" value="{{$user->email}}" >
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-12">
                                <input id="password" type="password"  class="form-control" name="password" value="{{$user->password}}" readonly>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('tahun_masuk') ? ' has-error' : '' }}">
                            <label for="tahun_masuk" class="col-md-4 control-label">Tahun Masuk</label>
                            <div class="col-md-8">
                                <input id="tahun_masuk" type="text"  class="form-control" name="tahun_masuk" value="{{$user->tahun_masuk}}" required>
                                @if ($errors->has('tahun_masuk'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tahun_masuk') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('level') ? ' has-error' : '' }}">
                            <label for="level" class="col-md-4 control-label">Level</label>
                            <div class="col-md-8">
                                <select name="level" id="" class="form-control">
                                    <option value="{{$user->id_level}}">{{$user->level->nama}}</option>
                                    @foreach($level as $l)
                                            @if ($l->id != $user->id_level)
                                                <option value="{{$l->id}}">{{$l->nama}}</option>
                                            @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('level'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('level') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('kelas') ? ' has-error' : '' }}">
                            <label for="kelas" class="col-md-4 control-label">Kelas</label>
                            <div class="col-md-8">
                                <select name="kelas" id="" class="form-control">
                                    <option value="{{$user->id_kelas}}">{{$user->kelas->kelas}}</option>
                                    @foreach($kelas as $k)
                                        @if ($k->id != $user->id_kelas)
                                            <option value="{{$k->id}}">{{$k->kelas}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('kelas'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('kelas') }}</strong>
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
                                <a href="{{route('user.index')}}" class="btn btn-light pull-right">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection

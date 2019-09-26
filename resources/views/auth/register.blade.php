@extends('layouts.app')

@section('content')
        <div class="col-md-8 col-md-offset-2">
                <h4 class="_title" align="center" style="margin-left: 100px;">Daftar Akun</h4>
              <p class="sub-title" align="center" style="margin-left: 120px;">Isi form di bawah ini dengan benar.</p>

                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Alamat E-Mail </label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Konfirmasi Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{$errors->has('status') ? 'has-error':''}}">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option></option>
                                    <option value="admin">admin</option>
                                    <option value="mitra">mitra</option>
                                </select>
                            </div>
                        </div>
                    <div class="form-group{{$errors->has('status') ? 'has-error':''}}">
                            <label class="col-md-4 control-label">Status</label>
                            <div class="col-md-6">
                                <select name="status" class="form-control">
                                    <option></option>
                                    <option value="admin">admin</option>
                                    <option value="mitra">mitra</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-warning" style="width: 407px;">
                                    Daftar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection

@extends('master.master')
@section('title','Profil Düzenle')
@section('content')
        <div class="col-md-12 text-center">
            <div class="panel panel-default">
                <div class="panel-heading">Your Profile</div>
                <div class="panel-body">
                    <div class="container">
                        <form action="{{ route('profil.guncelle') }}" method="post" style="width:1030px;">
                            {{ csrf_field() }}
                            <div class="form-group" >
                                <input type="text" name="fullname" autofocus placeholder="Full name"
                                     class="form-control" value="{{ $user->ad}}">
                            </div>
                            <div class="form-group">
                                <input type="text" name="lastname" autofocus placeholder="Last Name"
                                       class="form-control" value="{{ $user->soyad}}">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" autofocus placeholder="Email"
                                       class="form-control" value="{{ $user->email }}">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="description"
                                          placeholder="Description">{{ $user->aciklama}}</textarea>
                            </div>
                            <div class="form-group{{ $errors->has('current_password') ? ' has-error' : '' }}">
                                <input type="password" name="current_password" autofocus
                                       placeholder="Current Password"
                                       class="form-control">
                                @if ($errors->has('current_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('current_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" autofocus
                                       placeholder="New Password (leave blank if you don't want to change it)"
                                       class="form-control">
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <input type="password" name="password_confirmation" autofocus
                                       placeholder="Confirm Password"
                                       class="form-control">
                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="actions">
                                <input type="submit" class="btn btn-primary" value="Save">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

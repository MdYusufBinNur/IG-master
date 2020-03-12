@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


            </div>
        </div>
    </div>
</div>

<div class="content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                @if(Session::get('success'))
                    <div class="alert alert-success">
                        <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                        <span><b> Success - </b> {{ Session::get('success') }}</span>
                    </div>
                @endif

                @if(Session::get('error'))
                    <div class="alert alert-warning">
                        <button type="button" aria-hidden="true" data-notify="dismiss" class="close">×</button>
                        <span><b> Error - </b> {{ Session::get('error') }}</span>
                    </div>
                @endif

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <form id="" action="{{ route('reset/credential') }}" method="post" >
                        @csrf()
                        <div class="card-header">
                            <div class="form-group pull-left">
                                <h5><strong>Reset Password </strong></h5>
                            </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="card-content">
                            <div class="card-body p-2">


                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                            </div>
                        </div>

                        <div class="card-footer">
                            <div class="form-group row mb-0 text-center">

                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

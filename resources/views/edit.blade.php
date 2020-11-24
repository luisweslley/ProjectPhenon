@extends('layouts.index')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Register.css') }}">
</head>
<div class="container">
    <div class="row justify-content-center">
    <form class="form-horizontal container-fluid pl-5 pr-5 pt-4 pb-4" role="form" method="POST" action="{{route('update', ['id' => $id])}}">
            {{ csrf_field() }}
            <p class="text-center mb-3">Editar Usuario</p>

                <div class="form-group{{ $errors->has('nm_user') ? ' has-error' : '' }} col-md-12 d-flex flex-column p-0 mb-1">
                    <label for="nm_user" class="control-label">Nome completo </label>
                    <input id="nm_user" type="text" class="form-control mb-1" name="nm_user" value="{{ $User->nm_user }}" required>
                    @if ($errors->has('nm_user'))
                        <span class="help-block">
                            <strong>Preencher de novo</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email_user') ? ' has-error' : '' }} col-md-12 d-flex flex-column p-0 mb-1">
                    <label for="email_user" class="control-label">Email </label>
                    <input id="email_user" type="email_user" class="form-control mb-1" name="email_user" value="{{ $User->email_user }}" required>

                    @if ($errors->has('email_user'))
                        <span class="help-block">
                            <strong>Preencher de novo</strong>
                        </span>
                    @endif
                </div>

            <div class="form-group{{ $errors->has('tel_user') ? ' has-error' : '' }} col-md-12 d-flex flex-column p-0 mb-1">
                <label for="tel_user" class="col-md-10 p-0 control-label">Telefone </label>
                <input id="password" type="text" class="form-control mb-1" name="tel_user"  onblur="maskTelefone(this)" value="{{$User->tel_user }}" required>

                @if ($errors->has('tel_user'))
                    <span class="help-block">
                        <strong>Preencher de novo</strong>
                    </span>
                @endif
            </div>
            <div class="form-group p-0 col-md-12">
                <button type="submit" class="button center">
                    Salvar
                </button>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{ asset('../js/maskTelefone.js')}}"></script>
@endsection

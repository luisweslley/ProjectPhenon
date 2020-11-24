@extends('layouts.index')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Register.css') }}">
</head>
<div class="container">
    <div class="row justify-content-center">
        <form class="form-horizontal container-fluid pl-5 pr-5 pt-4 pb-4" method="POST" action="{{ route('store') }}">
            {{ csrf_field() }}
            <div class="form-group row mb-0">
                <div class="col-mb-6 offset-mb-4">
                    <button class="button col-12" type="button" onclick="addInput()">Adicionar usuario</button>
                </div>
            </div>
                <ul class="no_dec pt-4 pl-4 mb-0" id="listCheck">
                    <div class="row chacklist-1">
                        <div class="form-group row">
                            <label for="name" class="control-label">Nome</label>
                            <input id="inputCheck-${count}" type="text" class="form-control" name="nm_user-1" required>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="control-label">Email</label>
                            <input id="inputCheck-${count}" type="email" class="form-control" name="email_user-1" required>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="control-label">Telefone</label>
                            <input id="inputCheck-${count}" type="text" onblur="maskTelefone(this)" class="form-control" name="tel_user-1" placeholder="9999-9999 ou 9999-99999" maxlength="9" required>
                        </div>
                    </div>
                </ul>
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-10">
                    <button type="submit" class="button center">
                        Salvar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{ asset('../js/createInput.js')}}"></script>
<script type="text/javascript" src="{{ asset('../js/maskTelefone.js')}}"></script>
<script>
    function removerInput(input) {
        count = count - 1;
        $(`.${input.id}`).remove();
    }
</script>
@endsection

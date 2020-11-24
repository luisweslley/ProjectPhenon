@extends('layouts.index')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/cards.css') }}">
</head>
  <div class="container">
    <div class="row justify-content-center">
        <div class="info-num-card">
            <div class="box-nums">
                <div class="title">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="info-card col-8 pr-0">
                    <p>Usuarios Total:</p>
                    <p>{{ $Total }}</p>
                </div>
                </div>
                <div class="box-nums">
                <div class="title">
                    <i class="fa fa-credit-card"></i>
                </div>
                <div class="info-card col-8 pr-0">
                    <p>Usuarios deletados:</p>
                    <p>{{ $Deleted }}</p>
                </div>
            </div>
            <div class="box-nums">
                <button class="button add" type="button">
                    <a class="text-white" href="{{ route('create')}}">Adicionar novo usuario</a>
                </button>
            </div>
        </div>

        <div class="all-content divTable">
            @if (count($Users) > 0)
            <table id="dtBasicExample" class="table table-striped" cellspacing="0">
            <thead>
                <tr>
                <th>Numero</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Users as $User)
                <tr>
                <td class="pt-12">{{ $User->id }}</td>
                <td class="pt-12">{{ $User->nm_user }}</td>
                <td class="pt-12">{{ $User->tel_user }}</td>
                <td class="pt-12">{{ $User->email_user }}</td>
                @if($User->delete_dt == null)
                <td class="pt-12">Ativo</td>
                @else
                <td class="pt-12">Excluido</td>
                @endif
                <td class="pt-12">
                    <button class="button edit" type="button">
                    <a class="text-white" href="{{ route('edit', ['id' => $User->id ])}}">Editar</a>
                    </button>
                </td>
                @if($User->delete_dt == null)
                <td class="pt-12">
                    <form role="form" method="POST" action="{{ route('delete', ['id' => "$User->id"])}}">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="button delete" type="submit">Deletar</button>
                    </form>
                </td>
                @else
                <td class="pt-12">
                    <form role="form" method="POST" action="{{ route('free-access', ['id' => "$User->id"])}}">
                    {{ csrf_field() }}
                    <button class="button add" type="submit">Liberar</button>
                    </form>
                </td>
                @endif
                </tr>
                @endforeach
            </tbody>
            </table>
            @else
                <div class="alert alert-info text-center" role="alert">
                Você não possui nenhum usuario cadastrada no momento!
                </div>
            @endif
        </div>
    </div>
</div>
@endsection

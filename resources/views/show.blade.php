@extends('../layout/app')
@section('title', 'e-diaristas')
@section('header')
@section('main')

    <div class="row mt-4">
        <div class="col-md-5">
            <h4>Diarista: {{ $diarista->nome_completo }}</h4>
        </div>
        <div class="col-md-5">
            <a href="{{ route('diarista.create') }}" class="btn btn-primary" style="float:right">
                Cadastrar nova diarista
            </a>
        </div>
        <div class="col-md-2" style="text">
            <a href="{{ route('diaristas.index') }}" class="btn btn-warning" style="float:right">
                Voltar
            </a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col" class="text-center">Nome Completo</th>
                <th scope="col" class="text-center">Telefone</th>
                <th scope="col" class="text-center">Email</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row">{{ $diarista->id }}</th>
                <td class="text-center">{{ $diarista->nome_completo }}</td>
                <td class="text-center">{{ $diarista->telefone }}</td>
                <td class="text-center">{{ $diarista->email }}</td>
            </tr>

        </tbody>
    </table>
@endsection
@section('footer')

@extends('../layout/app')
@section('title', 'e-diaristas')
@section('header')
@section('main')

    <div class="row mt-4">
        <div class="col-md-6">
            <h1>Diaristas</h1>
        </div>
        <div class="col-md-6">
            <a href="{{ route('diarista.create') }}" class="btn btn-primary" style="float:right">
                Cadastrar nova diarista
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
                <th scope="col" colspan="3" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ( $diaristas as $diarista)
                <tr>
                    <th scope="row">{{ $diarista->id }}</th>
                    <td class="text-center">{{ $diarista->nome_completo }}</td>
                    <td class="text-center">{{ $diarista->telefone }}</td>
                    <td class="text-center">{{ $diarista->email }}</td>
                    <td colspan="3" class="text-center">
                        <a href="{{ route('diarista.show', $diarista) }}" class="btn btn-success btn-sm px-3"
                            data-toggle="tooltip" data-placement="top" title="visualizar">
                            <i class="fas fa-eye" aria-hidden="true"></i>
                        </a>
                        <a href="{{ route('diarista.edit', $diarista) }}" class="btn btn-warning btn-sm px-3"
                            data-toggle="tooltip" data-placement="top" title="editar">
                            <i class="fas fa-edit" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm px-3" data-toggle="tooltip" data-placement="top"
                            title="deletar" data-mdb-toggle="modal" data-mdb-target="#deleteModal">
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Nenhum registro encontrado
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
@section('footer')

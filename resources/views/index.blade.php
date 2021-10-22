@extends('../layout/app')
@section('title', 'e-diaristas')
@section('header')
@section('main')

    <div class="row mt-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-2">
            <h4>Diaristas</h4>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" />
                    <label class="form-label" for="form1">Pesquisar registro</label>
                </div>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{{ route('diarista.create') }}" class="btn btn-primary" style="float:right">
                Cadastrar nova diarista
            </a>
        </div>
    </div>
    <table class="table table-striped mt-4">
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
                    <td class="text-center">
                        {{ \Clemdesign\PhpMask\Mask::apply($diarista->telefone, '(00) 00000-0000') }}</td>
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
                <!-- Modal -->
                <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Exclusão de registro</h5>
                                <button type="button" class="btn-close" data-mdb-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Deseja apagar este registro?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                    Cancelar
                                </button>

                                <a href="{{ route('diarista.destroy', $diarista) }}" type="button"
                                    class="btn btn-primary">Apagar
                                    registro</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td colspan="7" class="text-center">
                        Nenhum registro encontrado
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{-- Pagination --}}

    <div class="row mt-4">
        <div class="col-md-12 text-center">

        </div>
    </div>


@endsection
@section('footer')

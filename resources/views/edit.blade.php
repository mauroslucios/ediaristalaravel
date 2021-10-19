@extends('../layout/app')
@section('title', 'Editar diarista')
@section('header')
@section('main')
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Editar(o) Diaristas</h6>
        </div>
        <div class="col-md-6">
            <a href="{{ route('diaristas.index') }}" class="btn btn-primary" style="float:right">
                Voltar
            </a>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('diaristas.update', $diarista) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @include('_form')
        </form>
    </div>
@endsection
@section('footer')

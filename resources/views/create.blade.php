@extends('../layout/app')
@section('title', 'Cadastrar diarista')
@section('header')
@section('main')
    <div class="row mt-2">
        <div class="col-md-6">
            <h6>Nova(o) Diaristas</h6>
        </div>
        <div class="col-md-6">
            <a href="{{ route('diaristas.index') }}" class="btn btn-primary" style="float:right">
                Voltar
            </a>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('diaristas.store') }}" method="POST" enctype="multipart/form-data">
            @include('_form')
        </form>
    </div>
@endsection
@section('footer')

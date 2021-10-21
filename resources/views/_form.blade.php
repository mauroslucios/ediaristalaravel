@csrf
<div class="row">
    <div class="col-md-6">
        <div class="col">
            <label for="nome" class="form-label">Nome:</label>
            <input value="{{ @$diarista->nome_completo }}" type="text" class="form-control form-control-sm"
                placeholder="Nome Completo" aria-label="Nome" name="nome_completo" id="nome" required maxlength="30">
        </div>
        <div class="col mt-2">
            <label for="cpf" class="form-label">Cpf:</label>
            <input value="{{ @$diarista->cpf }}" type="text" class="form-control form-control-sm" placeholder="Cpf"
                aria-label="Cpf" name="cpf" id="cpf" required maxlength="11">
        </div>
        <div class="col mt-2">
            <label for="email" class="form-label">Email:</label>
            <input value="{{ @$diarista->email }}" type="email" class="form-control form-control-sm"
                placeholder="email" aria-label="Email" name="email" id="email" required maxlength="50">
        </div>
        <div class="col mt-2">
            <label for="telefone" class="form-label">Telefone:</label>
            <input value="{{ @$diarista->telefone }}" type="text" class="form-control form-control-sm"
                placeholder="Telefone" aria-label="Telefone" name="telefone" id="telefone" required maxlength="11">
        </div>
        <div class="col mt-2">
            <label for="logradouro" class="form-label">Logradouro:</label>
            <input value="{{ @$diarista->logradouro }}" type="text" class="form-control form-control-sm"
                placeholder="Logradouro" aria-label="Logradouro" name="logradouro" id="logradouro" required
                maxlength="30">
        </div>
        <div class="col mt-2">
            <label for="numero" class="form-label">Número:</label>
            <input value="{{ @$diarista->numero }}" type="number" class="form-control form-control-sm"
                placeholder="numero" aria-label="Número" name="numero" id="numero" required maxlength="5">
        </div>
        <div class="col mt-2">
            <label for="foto usuario" class="form-label">Foto Usuário:</label>
            <input type="file" class="form-control form-control-sm" aria-label="Foto usuário" name="foto_usuario"
                id="foto_usuario">
        </div>
    </div>
    <div class="col-md-6">
        <div class="col">
            <label for="bairro" class="form-label">Bairro:</label>
            <input value="{{ @$diarista->bairro }}" type="text" class="form-control form-control-sm"
                placeholder="Bairro" aria-label="Bairro" name="bairro" id="bairro" required maxlength="30">
        </div>
        <div class="col">
            <label for="cidade" class="form-label">Cidade:</label>
            <input value="{{ @$diarista->cidade }}" type="text" class="form-control form-control-sm"
                placeholder="Cidade" aria-label="Cidade" name="cidade" id="cidade" required maxlength="30">
        </div>
        <div class="col mt-2">
            <label for="complemento" class="form-label">Complemento:</label>
            <input value="{{ @$diarista->complemento }}" type="text" class="form-control form-control-sm"
                placeholder="Complemento" aria-label="complemento" name="complemento" id="complemento">
        </div>
        <div class="col mt-2">
            <label for="cep" class="form-label">Cep:</label>
            <input value="{{ @$diarista->cep }}" type="text" class="form-control form-control-sm" placeholder="Cep"
                aria-label="Cep" name="cep" id="cep" required max="8">
        </div>
        <div class="col mt-2">
            <label for="estado" class="form-label">Estado:</label>
            <input value="{{ @$diarista->estado }}" type="text" class="form-control form-control-sm"
                placeholder="Estado" aria-label="Estado" name="estado" id="estado" required maxlength="2">
        </div>
        <div class="col mt-2">
            <label for="codigo ibge" class="form-label">Código IBGE:</label>
            <input value="{{ @$diarista->codigo_ibge }}" type="text" class="form-control form-control-sm"
                placeholder="Código ibge" aria-label="Codigo Ibge" name="codigo_ibge" id="codigo_ibge" required
                maxlength="8">
        </div>
    </div>
</div>
<a href="{{ route('diaristas.index') }}" class="btn btn-warning mt-4">Cancelar</a>

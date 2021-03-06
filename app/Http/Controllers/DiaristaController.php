<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiaristaRequest;
use App\Models\Diarista;
use App\Services\ViaCEP;
use Illuminate\Http\Request;

class DiaristaController extends Controller
{
    protected ViaCEP $viaCep;

    public function __construct(ViaCEP $viaCep)
    {
        $this->viaCep = $viaCep;
    }

    /**
     * exibição de todas diaristas
     */
    public function index()
    {
        $diaristas = Diarista::get();

        return view('index', [
            'diaristas' => $diaristas
        ]);
    }

    /**
     * exibiação do formulário para cadastro de novas diaristas
     */
    public function create()
    {
        return view('create');
    }

    /**
     * cadastra nova diarista no banco de dados
     */
    public function store(DiaristaRequest $request)
    {
        $dados = $request->except('_token');
        $dados['foto_usuario'] = $request->foto_usuario->store('public');

        $dados['cpf'] = str_replace(['.', '-'], '', $dados['cpf']);
        $dados['cep'] = str_replace('-', '', $dados['cep']);
        $dados['telefone'] = str_replace(['(', ')', ' ', '-'], '', $dados['telefone']);
        $dados['codigo_ibge'] = $this->viaCep->buscar($dados['cep'])['ibge'];

        if (Diarista::create($dados)) {
            return redirect()->route('diaristas.index')->with('success', 'Registro cadastrado com sucesso!');
        }
    }

    /**
     * exibição do formulário para edição de diaristas
     */
    public function edit(int $id)
    {
        $diarista = Diarista::findOrFail($id);

        return view('edit', ['diarista' => $diarista]);
    }

    /**
     * atualiza uma diarista no banco de dados
     */
    public function update(int $id, DiaristaRequest $request)
    {
        $diarista = Diarista::findOrFail($id);
        $dados = $request->except(['_token', '_method']);
        $dados['cpf'] = str_replace(['.', '-'], '', $dados['cpf']);
        $dados['cep'] = str_replace('-', '', $dados['cep']);
        $dados['telefone'] = str_replace(['(', ')', ' ', '-'], '', $dados['telefone']);
        $dados['codigo_ibge'] = $this->viaCep->buscar($dados['cep'])['ibge'];

        if ($request->hasFile('foto_usuario')) {
            $dados['foto_usuario'] = $request->foto_usuario->store('public');
        }

        if ($diarista->update($dados)) {
            return redirect()->route('diaristas.index')->with('info', 'Registro atualizada com sucesso!');
        }
    }

    /**
     * exibição de uma única diarista
     */
    public function show(int $id)
    {
        $diarista = Diarista::findOrFail($id);

        return view('show', ['diarista' => $diarista]);
    }

    /**
     * apaga uma diarista no banco de dados
     */
    public function destroy(int $id)
    {
        $diarista = Diarista::findOrFail($id);

        if ($diarista->delete()) {
            return redirect()->route('diaristas.index')->with('warning', 'Registro deletado com sucesso!');
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use Illuminate\Http\Request;

class DiaristaController extends Controller
{
    /**
     * exibiação de todas diaristas
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
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        $dados['foto_usuario'] = $request->foto_usuario->store('public');

        $dados['cpf'] = str_replace(['.', '-'], '', $dados['cpf']);
        $dados['cep'] = str_replace('-', '', $dados['cep']);
        $dados['telefone'] = str_replace(['(', ')', ' ', '-'], '', $dados['telefone']);

        if (Diarista::create($dados)) {
            return redirect()->route('diaristas.index')->with('success', 'Registro cadastrado com sucesso!');
        } else {
            return redirect()->route('diaristas.index')->with('danger', 'Houve um erro ao cadastrar diarista, favor verificar!');
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
    public function update(int $id, Request $request)
    {
        $diarista = Diarista::findOrFail($id);
        $dados = $request->except(['_token', '_method']);
        $dados['cpf'] = str_replace(['.', '-'], '', $dados['cpf']);
        $dados['cep'] = str_replace('-', '', $dados['cep']);
        $dados['telefone'] = str_replace(['(', ')', ' ', '-'], '', $dados['telefone']);

        if ($request->hasFile('foto_usuario')) {
            $dados['foto_usuario'] = $request->foto_usuario->store('public');
        }

        if ($diarista->update($dados)) {
            return redirect()->route('diaristas.index')->with('info', 'Registro atualizada com sucesso!');
        } else {
            return redirect()->route('diaristas.index') - with('error', 'Houve um erro ao editar o resgistro, favor verificar!');
        };
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
        } else {
            return redirect()->route('diaristas.index')->with('danger', 'Houve um erro ao deletar o registro.');
        };
    }
}

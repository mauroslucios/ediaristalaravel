<?php

namespace App\Http\Controllers;

use App\Models\Diarista;
use Illuminate\Http\Request;

class DiaristaController extends Controller
{
    //view all diaristas
    public function index()
    {
        $diaristas = Diarista::get();

        return view('index', [
            'diaristas' => $diaristas
        ]);
    }

    //create new diarista
    public function create()
    {
        return view('create');
    }

    //store new diarista
    public function store(Request $request)
    {
        $dados = $request->except('_token');
        $dados['foto_usuario'] = $request->foto_usuario->store('public');

        Diarista::create($dados);

        return redirect()->route('diaristas.index');
    }

    //edit unique diarista
    public function edit(int $id)
    {
        $diarista = Diarista::findOrFail($id);

        return view('edit', ['diarista' => $diarista]);
    }

    //update unique diarista
    public function update(int $id, Request $request)
    {
        $diarista = Diarista::findOrFail($id);
        $dados = $request->except(['_token', '_method']);

        if ($request->hasFile('foto_usuario')) {
            $dados['foto_usuario'] = $request->foto_usuario->store('public');
        }

        $diarista->update($dados);
        return redirect()->route('diaristas.index');
    }

    //delete unique diarista
    public function delete(int $id)
    {
        $diarista = Diarista::findOrFail($id);

        return view('delete', ['diarista' => $diarista]);
    }

    //show unique diarista
    public function show(int $id)
    {
        $diarista = Diarista::findOrFail($id);

        return view('show', ['diarista' => $diarista]);
    }
}

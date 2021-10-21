<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome_completo',
        'cpf',
        'email',
        'telefone',
        'logradouro',
        'numero',
        'bairro',
        'cidade',
        'complemento',
        'cep',
        'estado',
        'codigo_ibge',
        'foto_usuario'
    ];

    protected $visible = ['nome_completo', 'cidade', 'foto_usuario'];
    /**
     * buscando código ibge igual ao cep
     */
    static public function buscaPorCodigoIbge(int $codigoIbge)
    {
        return self::where('codigo_ibge', $codigoIbge)->limit(6)->get();
    }

    static public function quantidadePorCodigoIbge(int $codigoIbge)
    {
        $quantidade =  self::where('codigo_ibge', $codigoIbge)->count();
        return $quantidade > 6 ? $quantidade - 6 : 0;
    }
}

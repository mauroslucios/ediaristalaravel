<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diarista extends Model
{
    use HasFactory;

    /**
     * define os campos que serão gravados
     */
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

    /**
     * tornando visível apenas os campos que eu preciso da entidade
     */
    protected $visible = ['nome_completo', 'cidade', 'foto_usuario', 'reputacao'];

    /**
     * retornando uma reputação randômica
     */
    protected $appends = ['reputacao'];

    /**
     * mostrar a imagem do usuário para a aplicação
     * monta a url da imagem
     */
    public function getFotoUsuarioAttribute(string $valor)
    {
        return config('app.url') . '/' . $valor;
    }

    public function getReputacaoAttribute($valor)
    {
        return mt_rand(1, 5);
    }

    /**
     * buscando código ibge da diarista
     */
    static public function buscaPorCodigoIbge(int $codigoIbge)
    {
        return self::where('codigo_ibge', $codigoIbge)->limit(6)->get();
    }

    /**
     * retorna a quantidade de diaristas
     */
    static public function quantidadePorCodigoIbge(int $codigoIbge)
    {
        $quantidade =  self::where('codigo_ibge', $codigoIbge)->count();
        return $quantidade > 6 ? $quantidade - 6 : 0;
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdemDeServico extends Model
{
    use HasFactory;
    protected $table = 'ordem_de_servicos';
    protected $fillable = [
        'nome_tecnico',
        'data_solicitacao',
        'prazo_atendimento',
        'endereco_atendimento',
        'status'
    ];
}

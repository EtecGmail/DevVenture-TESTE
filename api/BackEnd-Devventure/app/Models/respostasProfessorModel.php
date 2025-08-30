<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class respostasProfessorModel extends Model
{
    use HasFactory;
    protected $table = 'table_respostas_professor';
    protected $primaryKey = 'id_resposta_professor';
    protected $fillable = [
        'id_resposta_professor',
        'id_pergunta_aluno',
        'resposta',
    ];
}

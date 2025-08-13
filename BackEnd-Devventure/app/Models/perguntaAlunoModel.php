<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perguntaAlunoModel extends Model
{
    use HasFactory;

    protected $table = 'table_perguntas_aluno';
    protected $primaryKey = 'id_pergunta_aluno';
    protected $fillable = [
        'id_pergunta_aluno',
        'id_aluno',
        'pergunta',
    ];

public function resposta()
{
    return $this->hasOne(respostasProfessorModel::class, 'id_pergunta_aluno', 'id_pergunta_aluno');
}


}

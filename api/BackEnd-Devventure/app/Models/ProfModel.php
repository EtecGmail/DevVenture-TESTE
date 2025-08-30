<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfModel extends Model
{
    use HasFactory;
    protected $table = 'table_professor';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'cpf',
        'especializacao',
        'formacao',
        'registro_profissional',
        'telefone',
        'email',
        'password'
    ];
}

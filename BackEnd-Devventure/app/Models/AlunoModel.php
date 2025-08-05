<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
    use HasFactory;

    protected $table = 'aluno';
    public $fillable = ['id','name','email','password','ra','curso','semestre','telefone','created_at','updated_at'];
}

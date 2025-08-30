<?php

namespace App\Http\Controllers;

use App\Models\AlunoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthAlunoController extends Controller
{
    public function loginAluno(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Verifica se o aluno existe
        $aluno = AlunoModel::where('email', $request->email)->first();

        if (! $aluno) {
            return response()->json(['message' => 'Aluno não encontrado.'], 404);
        }

        // Verifica se a senha está correta
        if (! Hash::check($request->password, $aluno->password)) {
            return response()->json(['message' => 'Senha incorreta.'], 401);
        }

        return response()->json([
            'message' => 'Login realizado com sucesso.',
            'aluno' => $aluno,
        ]);
    }
}

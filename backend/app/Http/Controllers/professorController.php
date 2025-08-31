<?php

namespace App\Http\Controllers;

use App\Models\ProfModel;
use App\Models\respostasProfessorModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class professorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function cadastroProfessor(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cpf' => 'required|string|unique:table_professor,cpf',
            'especializacao' => 'required|string',
            'formacao' => 'required|string',
            'registro_profissional' => 'required|string',
            'telefone' => 'nullable|string',
            'email' => 'required|email|unique:table_professor,email',
            'password' => 'required|min:8',
        ]);

        $professor = new ProfModel;

        $professor->name = $validated['name'];
        $professor->cpf = $validated['cpf'];
        $professor->especializacao = $validated['especializacao'];
        $professor->formacao = $validated['formacao'];
        $professor->registro_profissional = $validated['registro_profissional'];
        $professor->telefone = $validated['telefone'] ?? null;
        $professor->email = $validated['email'];
        $professor->password = Hash::make($validated['password']);

        $professor->save();

        return response()->json($professor, 201);
    }

    public function loginProfessor(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $professor = ProfModel::where('email', $request->email)->first();

        if ($professor && Hash::check($request->password, $professor->password)) {
            return response()->json([
                'message' => 'Login realizado com sucesso!',
                'professor' => $professor,
            ], 200);
        }

        return response()->json(['message' => 'Credenciais inválidas!'], 401);
    }

    public function listarProfessores()
    {
        $professores = ProfModel::all();

        return response()->json($professores, 200);
    }

    public function insertRespostaProfessor(Request $request)
    {
        $respostaProfessor = new respostasProfessorModel;

        $respostaProfessor->id_pergunta_aluno = $request->id_pergunta_aluno;
        $respostaProfessor->resposta = $request->resposta;

        $respostaProfessor->save();

        return response()->json($respostaProfessor, 201);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

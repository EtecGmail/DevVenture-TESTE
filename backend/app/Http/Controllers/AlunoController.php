<?php

namespace App\Http\Controllers;

use App\Models\AlunoModel;
use App\Models\perguntaAlunoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlunoController extends Controller
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

    public function listarAlunos()
    {
        $alunos = AlunoModel::all();

        return response()->json($alunos);
    }

    public function insertAlunoAPI(Request $request)
    {
        $aluno = new AlunoModel;

        $aluno->name = $request->name;
        $aluno->email = $request->email;
        $aluno->password = Hash::make($request->password);
        $aluno->ra = $request->ra;
        $aluno->semestre = $request->semestre;
        $aluno->telefone = $request->telefone;

        $aluno->save();

        return response()->json($aluno, 201);
    }

    public function insertPerguntaAluno(Request $request)
    {
        $perguntaAluno = new perguntaAlunoModel;

        $perguntaAluno->id_aluno = $request->id_aluno;
        $perguntaAluno->pergunta = $request->pergunta;

        $perguntaAluno->save();

        return response()->json($perguntaAluno, 201);
    }

    public function listarPerguntasAlunos()
    {
        $perguntasAlunos = perguntaAlunoModel::all();

        return response()->json($perguntasAlunos);
    }

    public function listarPerguntasComResposta()
    {
        $perguntas = perguntaAlunoModel::with('resposta')->get();

        return response()->json($perguntas);
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

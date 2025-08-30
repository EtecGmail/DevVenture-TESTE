<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProfModel;
use Illuminate\Support\Facades\Hash;
use App\Models\respostasProfessorModel;


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
        $professor = new ProfModel();

        $professor->name = $request->name;
        $professor->cpf = $request->cpf;
        $professor->especializacao = $request->especializacao;
        $professor->formacao = $request->formacao;
        $professor->registro_profissional = $request->registro_profissional;
        $professor->telefone = $request->telefone;
        $professor->email = $request->email;
        $professor->password = Hash::make($request->password);

        $professor->save();

        return response()->json(['message' => 'Professor cadastrado com sucesso!'], 201);
    }

    public function loginProfessor(Request $request)
    {
        $professor = ProfModel::where('email', $request->email)->first();

        if ($professor && Hash::check($request->password, $professor->password)) {
            return response()->json(['message' => 'Login realizado com sucesso!'], 200);
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
        $respostaProfessor = new respostasProfessorModel();

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
     * @param  \Illuminate\Http\Request  $request
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
     * @param  \Illuminate\Http\Request  $request
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

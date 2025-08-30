<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = UsuarioModel::all();

        return $usuario;
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

    public function storeapi(Request $request)
    {
        $usuario = new UsuarioModel;

        $usuario->nomeUsuario = $request->nomeUsuario;
        $usuario->senhaUsuario = $request->senhaUsuario;
        $usuario->emailUsuario = $request->emailUsuario;
        $usuario->dataNascUsuario = $request->dataNascUsuario;
        $usuario->generoUsuario = $request->generoUsuario;
        $usuario->fotoUsuario = $request->fotoUsuario;
        $usuario->alturaUsuario = $request->alturaUsuario;
        $usuario->pesoUsuario = $request->pesoUsuario;

        $usuario->save();

        // Retorna o usuário recém-criado com status 201 (Created)
        return response()->json($usuario, 201);
    }

    // Nessa parte eu fiz, um sistema onde busca o maior ID, e depois busca o usuário com esse ID, e apresenta todos os valores dele.
    public function consultarUltimoID()
    {
        // pega o maior ID
        $ultimoId = DB::table('tb_usuario')->max('id');

        if (! $ultimoId) {
            return response()->json(['mensagem' => 'Nenhum usuário encontrado'], 404);
        }

        $usuario = UsuarioModel::find($ultimoId);

        if (! $usuario) {
            return response()->json(['mensagem' => 'Usuário não encontrado'], 404);
        }

        return response()->json($usuario);
    }

    // Método para consultar a quantidade de registros
    public function consultarRegistros()
    {
        $quantidade = DB::table('tb_usuario')->count('id');

        if ($quantidade === 0) {
            return response()->json([
                'mensagem' => 'Nenhum usuário encontrado',
                'quantidade' => 0,
            ], 200);
        }

        return response()->json([
            'quantidade' => $quantidade,
        ], 200);
    }

    // Consulta os usuarios em ordem descrescente de ID
    public function consultarUsuariosDescrescente()
    {
        $usuarios = UsuarioModel::orderBy('id', 'desc')->get();

        if ($usuarios->isEmpty()) {
            return response()->json(['mensagem' => 'Nenhum usuário encontrado'], 404);
        }

        return response()->json($usuarios);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = UsuarioModel::find($id);

        if (! $usuario) {
            return response()->json(['mensagem' => 'Usuário não encontrado'], 404);
        }

        return response()->json($usuario);
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

    public function updateApi(Request $request, $id)
    {
        UsuarioModel::where('id', $id)->update([
            'nomeUsuario' => $request->nomeUsuario,
            'senhaUsuario' => $request->senhaUsuario,
            'emailUsuario' => $request->emailUsuario,
            'dataNascUsuario' => $request->dataNascUsuario,
            'generoUsuario' => $request->generoUsuario,
            'fotoUsuario' => $request->fotoUsuario,
            'alturaUsuario' => $request->alturaUsuario,
            'pesoUsuario' => $request->pesoUsuario,
        ]);

        return response()->json([
            'message' => 'User updated successfully.',
        ], 200);
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

    public function destroyApi($id)
    {
        UsuarioModel::where('id', '=', $id)->delete();

        return response()->json([
            'message' => 'User deleted successfully.',
        ], 200);
    }
}

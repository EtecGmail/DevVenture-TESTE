<?php

namespace App\Http\Controllers;

use App\Models\AdmModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdmController extends Controller
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

    public function cadastroAdm(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:table_administrador,email',
            'password' => 'required|min:8',
        ]);

        $adm = new AdmModel;

        $adm->name = $validated['name'];
        $adm->email = $validated['email'];
        $adm->password = Hash::make($validated['password']);

        $adm->save();

        return response()->json($adm, 201);
    }

    public function loginAdmin(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $adm = AdmModel::where('email', $request->email)->first();
        if (! $adm) {
            return response()->json(['message' => 'Administrador não encontrado.'], 404);
        }
        if (! Hash::check($request->password, $adm->password)) {
            return response()->json(['message' => 'Senha incorreta.'], 401);
        }

        return response()->json([
            'message' => 'Login realizado com sucesso.',
            'adm' => $adm,
        ]);

    }

    public function listarAdm()
    {
        $adm = AdmModel::all();

        return response()->json($adm);
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
    public function update(Request $request, $id) {}

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

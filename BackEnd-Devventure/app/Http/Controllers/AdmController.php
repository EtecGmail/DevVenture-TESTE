<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher; 
use App\Models\AdmModel;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function cadastroAdm(Request $request)
    {
        $adm = new AdmModel();

        $adm->name = $request->name;
        $adm->email = $request->email;    
        $adm->password = Hash::make($request->password);

        $adm->save();

        return response()->json(['message' => 'Administrador cadastrado com sucesso!'], 201);
    }



    public function loginAdmin(Request $request)
    {

        $request->validate([
         'email' => 'required|email',
        'password' => 'required',
        ]);

        
        $credentials = $request->only('email', 'password');

        
        if (auth()->attempt($credentials)) {
            
            return response()->json(['message' => 'Login successful'], 200);
        }

        
        return response()->json(['message' => 'Invalid credentials'], 401);
        
       
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

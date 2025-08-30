<?php

use App\Http\Controllers\AlunoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/* 
Route::get('/usuario','App\Http\Controllers\UsuarioController@index');
Route::post('/usuario','App\Http\Controllers\UsuarioController@storeapi');

Route::get('/usuario/{id}', 'App\Http\Controllers\UsuarioController@show');

Route::get('/usuarioRecente', 'App\Http\Controllers\UsuarioController@consultarUltimoID');

route::delete('/usuario/{id}', 'App\Http\Controllers\UsuarioController@destroyApi');

Route::put('/usuario/{id}', 'App\Http\Controllers\UsuarioController@updateApi');

Route::get('/consultarQuantidade', 'App\Http\Controllers\UsuarioController@consultarRegistros');

Route::get('/consultarUsuariosDescrescente', 'App\Http\Controllers\UsuarioController@consultarUsuariosDescrescente'); */


//Aluno
Route::post('/aluno','App\Http\Controllers\AlunoController@insertAlunoAPI');

Route::get('/listarAlunos','App\Http\Controllers\AlunoController@listarAlunos');

Route::post('/loginAluno', 'App\Http\Controllers\AuthAlunoController@loginAluno');

route::post('/insertPerguntaAluno', 'App\Http\Controllers\AlunoController@insertPerguntaAluno');

route::get('/listarPerguntasAlunos', 'App\Http\Controllers\AlunoController@listarPerguntasAlunos');


//Professor
Route::post('/cadastroProfessor', 'App\Http\Controllers\professorController@cadastroProfessor');
Route::post('/loginProfessor', 'App\Http\Controllers\professorController@loginProfessor');
Route::get('/listarProfessores', 'App\Http\Controllers\professorController@listarProfessores');
route::post('/insertRespostaProfessor', 'App\Http\Controllers\professorController@insertRespostaProfessor');

Route::get('/perguntas-com-respostas', [AlunoController::class, 'listarPerguntasComResposta']);



//Administrador
Route::post('/loginAdmin', 'App\Http\Controllers\AdmController@loginAdmin');
Route::post('/cadastroAdm', 'App\Http\Controllers\AdmController@cadastroAdm');
Route::get('/listarAdm', 'App\Http\Controllers\AdmController@listarAdm');



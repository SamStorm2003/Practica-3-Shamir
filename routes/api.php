<?php

use App\Http\Controllers\pacientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
/*Gestor de pacientes*/
//Mostrar el listado completo de los pacientes que esta defenido en el controlador de pacientes
Route::get('/hospital_pacientes',[pacientesController::class, 'listaPacientesgeneral']);
//Mostrar el listado logica de los pacientes con estado 1
Route::get('/hospitallogical_pacientes',[pacientesController::class, 'listaPacienteslogica']);
//guardar el paciente//
Route::post('/save_pacientes',[pacientesController::class, 'guardarPacientes']);
//Buscar al paciente//
Route::get('/find_pacientes/{codigo_paciente}',[pacientesController::class, 'buscarPaciente']);
//Actualizar o Modificar el paciente//
Route::put('/update_paciente/{codigo_paciente}',[pacientesController::class, 'actualizarPaciente']);
//Eliminar el paciente//
Route::delete('/delete_paciente/{codigo_paciente}',[pacientesController::class, 'borrarPaciente']);
//Eliminar de forma logica el paciente//
Route::put('/deletelogical_paciente/{codigo_paciente}',[pacientesController::class, 'eliminarPaciente']);
//Estadisticas por genero de pacientes y el total que hay
Route::get('/statistics_pacientes', [pacientesController::class, 'obtenerEstadisticasPacientes']);
/* Fin de la gestion del controlador de la lista de pasajeros*/
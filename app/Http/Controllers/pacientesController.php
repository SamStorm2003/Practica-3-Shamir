<?php

namespace App\Http\Controllers;

use App\Models\pacientes;
use Exception;
use Illuminate\Http\Request;

class pacientesController extends Controller
{
    //
    public function listaPacientesgeneral()
    {
        $pacientes = pacientes::get();
        return response()->json([
            'pacientes' => $pacientes,
            'status' => true
        ]);
    }
    public function listaPacienteslogica()
    {
        $pacientes = pacientes::where('estado', '!=', 0)->get();
        return response()->json([
            'Pacientes' => $pacientes,
            'status' => true
        ]);
    }

    public function guardarPacientes(Request $request)
    {
        try {
            $paciente = new pacientes;
            $paciente->nombre = $request->nombre_paciente;
            $paciente->apellido_paterno = $request->ape_pater_paciente;
            $paciente->apellido_materno = $request->ape_mater_paciente;
            $paciente->fecha_nacimiento = $request->fecha_nacimiento_paciente;
            $paciente->genero = $request->genero_paciente;
            $paciente->direccion = $request->direccion_paciente;
            $paciente->telefono = $request->telefono_paciente;
            $paciente->email = $request->email_paciente;
            $paciente->tipo_sangre = $request->tipo_sangre_paciente;
            $paciente->alergias = $request->alergias_paciente;
            $paciente->fecha_ingreso = $request->fecha_ingreso_paciente;
            $paciente->medico_asignado = $request->medico_asignado_paciente;
            $paciente->estado = $request->estado_paciente;

            $paciente->save();

            return response()->json([
                'mensaje' => 'El paciente esta creado correctamente!',
                'status' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'mensaje' => 'Error en la api de guardar el paciente',
                'status' => false
            ]);
        }
    }

    public function buscarPaciente($codigo_paciente)
    {
        $paciente = pacientes::findOrFail($codigo_paciente);
        return response()->json([
            'paciente_buscado' => $paciente,
            'status' => true
        ]);
    }

    public function actualizarPaciente(Request $request, $codigo_paciente)
    {
        try {
            $paciente = pacientes::findOrFail($codigo_paciente);
            $paciente->nombre = $request->nombre_paciente;
            $paciente->apellido_paterno = $request->ape_pater_paciente;
            $paciente->apellido_materno = $request->ape_mater_paciente;
            $paciente->fecha_nacimiento = $request->fecha_nacimiento_paciente;
            $paciente->genero = $request->genero_paciente;
            $paciente->direccion = $request->direccion_paciente;
            $paciente->telefono = $request->telefono_paciente;
            $paciente->email = $request->email_paciente;
            $paciente->tipo_sangre = $request->tipo_sangre_paciente;
            $paciente->alergias = $request->alergias_paciente;
            $paciente->fecha_ingreso = $request->fecha_ingreso_paciente;
            $paciente->medico_asignado = $request->medico_asignado_paciente;
            $paciente->estado = $request->estado_paciente;

            $paciente->update();
            return response()->json([
                'mensaje' => 'Paciente modificado correctamente',
                'status' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'mensaje' => 'Error en la api de guardar el paciente',
                'status' => false
            ]);
        }
    }
    public function borrarPaciente($codigo_paciente)
    {
        try {
            $paciente = pacientes::findOrFail($codigo_paciente);
            $paciente->delete();

            return response()->json([
                'mensaje' => 'Paciente eliminado correctamente',
                'status' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'mensaje' => 'Error en la api de eliminar el paciente',
                'status' => false
            ]);
        }
    }
    public function eliminarPaciente(Request $request, $codigo_paciente)
    {
        try {
            $paciente = pacientes::findOrFail($codigo_paciente);
            $paciente->estado = 0;

            $paciente->update();

            return response()->json([
                'mensaje' => 'Paciente eliminado correctamente',
                'status' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'mensaje' => 'Error en la api de eliminar el paciente',
                'status' => false
            ]);
        }
    }
    public function obtenerEstadisticasPacientes()
    {
        try {
            $pacientes = pacientes::count();
            $pacientesPorGenero = pacientes::all()
                ->groupBy('genero')
                ->map(function ($grupopaciente) {
                    return $grupopaciente->count();
                });
            return response()->json([
                'Total de pacietes' => $pacientes,
                'Pacientes por genero' => $pacientesPorGenero,
                'status' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'mensaje' => 'Error en la api de las estadísticas de los pacientes',
                'status' => false,
            ]);
        }
    }
}

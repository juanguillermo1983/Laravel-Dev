<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mtx;
use Illuminate\Support\Facades\DB;

class MtxController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Obtener todos los registros de la tabla 'mtxes'
        $mtxes = Mtx::all();

        // Devolver los registros en formato JSON
        return response()->json($mtxes);
    }

    public function consultarDatos()
    {
        // Ejemplo de consulta SQL cruda utilizando select raw
        $resultados = DB::select('SELECT * FROM mtxes');

        // Retornar los resultados como una respuesta JSON
        return response()->json($resultados);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaqueteController extends Controller
{
    /**
     * GET /api/paquetes
     * Retorna la lista de paquetes
     */
    public function index()
    {
        // Obtenemos los paquetes y mapeamos el nombre del campo para la respuesta
        $paquetes = Paquete::all()->map(function ($paquete) {
            return [
                'id' => $paquete->id,
                'codigo' => $paquete->codigo,
                'destinatario' => $paquete->destinatario,
                'fechaIngreso' => $paquete->fecha_ingreso
            ];
        });

        return response()->json($paquetes, 200);
    }

    /**
     * POST /api/paquetes
     * Inserta un nuevo paquete
     */
    public function store(Request $request)
    {
        // 1. Validar campos requeridos y formatos (400 Bad Request) PRIMERO
        $validator = Validator::make($request->all(), [
            'codigo'=>'required|string|max:30|alpha_num',
            'destinatario' => 'required|string|max:100',
            'fechaIngreso' => 'required|date_format:Y-m-d',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Bad Request',
                'message' => 'Faltan campos o el formato es inválido.',
                'details' => $validator->errors()
            ], 400);
        }

        // 2. Validar conflicto de unicidad (409 Conflict) DESPUÉS
        if (Paquete::where('codigo', $request->codigo)->exists()) {
            return response()->json([
                'error' => 'Conflict',
                'message' => 'El código de paquete ya existe.'
            ], 409);
        }

        // 3. Crear el registro (201 Created)
        $paquete = Paquete::create([
            'codigo'        => $request->codigo,
            'destinatario'  => $request->destinatario,
            'fecha_ingreso' => $request->fechaIngreso,
        ]);

        return response()->json([
            'id' => $paquete->id,
            'codigo' => $paquete->codigo,
            'destinatario' => $paquete->destinatario,
            'fechaIngreso' => $paquete->fecha_ingreso
        ], 201);
    }
}
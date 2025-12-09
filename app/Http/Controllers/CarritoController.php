<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CarritoController extends Controller
{
    // Obtener el carrito de un usuario
    public function index($userId): JsonResponse
    {
        // Aquí deberías consultar tu base de datos.
        // Por ahora devolveremos un carrito vacío o datos de prueba.
        
        return response()->json([
            'userId' => $userId,
            'items' => [] // Retorna array vacío por defecto
        ]);
    }

    // Agregar item al carrito
    public function agregar(Request $request, $userId): JsonResponse
    {
        $validated = $request->validate([
            'productoId' => 'required',
            'talla' => 'required',
            'cantidad' => 'required|integer|min:1'
        ]);

        // Aquí guardarías en la base de datos
        
        return response()->json([
            'success' => true,
            'message' => 'Producto agregado al carrito',
            'items' => [
                // Simulación de item agregado
                [
                    'productoId' => $validated['productoId'],
                    'talla' => $validated['talla'],
                    'cantidad' => $validated['cantidad']
                ]
            ]
        ]);
    }
}

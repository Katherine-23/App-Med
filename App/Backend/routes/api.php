<?php

use Illuminate\Support\Facades\Route;

Route::get('/ejemplo', function () {
    return response()->json([
        'mensaje' => 'API funcionando correctamente'
    ]); 
});

use Illuminate\Http\Request;
use App\Models\Paciente;

Route::post('/pacientes', function (Request $request) {
    return Paciente::create([
        'nombre' => $request->nombre,
        'documento' => $request->documento,
        'telefono' => $request->telefono,
    ]);
});
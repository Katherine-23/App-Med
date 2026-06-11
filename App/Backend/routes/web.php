<?php

use Illuminate\Http\Request;
use App\Models\Paciente;

Route::post('/pacientes', function (Request $request) {

    $paciente = Paciente::create([
        'nombre' => $request->nombre,
        'documento' => $request->documento,
        'telefono' => $request->telefono
    ]);

    return response()->json([
        'mensaje' => 'Paciente creado correctamente',
        'data' => $paciente
    ]);
});


Route::put('/pacientes/{id}', function (Request $request, $id) {

    $paciente = Paciente::findOrFail($id);

    $paciente->update([
        'nombre' => $request->nombre,
        'documento' => $request->documento,
        'telefono' => $request->telefono
    ]);

    return response()->json([
        'mensaje' => 'Paciente actualizado correctamente',
        'data' => $paciente
    ]);
});

Route::delete('/pacientes/{id}', function ($id) {

    $paciente = Paciente::findOrFail($id);

    $paciente->delete();

    return response()->json([
        'mensaje' => 'Paciente eliminado correctamente'
    ]);
});
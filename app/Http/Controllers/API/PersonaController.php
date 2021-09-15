<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Persona;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Http\Resources\PersonaResource;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return response([ 'personas' => PersonaResource::collection($personas), 'message' => 'OK'], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $validator = Validator::make($data, [
            'nombres' => 'required|max:50',
            'apellidos' => 'required|max:50',
            'fecha_nacimiento' => 'required',
            'email' => 'required|unique:personas|max:70',
            'direccion' => 'required|max:100',
            'ciudad' => 'required|max:80',
        ]);

        if ($validator->fails()) {
            return response(['error' => $validator->errors(), 'Error en Validación de datos']);
        }

        $persona = Persona::create($data);

        return response(['persona' => new PersonaResource($persona), 'message' => 'Ok...'], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return response(['persona' => new PersonaResource($persona), 'message' => 'Ok'], 200);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $persona->update($request->all());

        return response(['persona' => new PersonaResource($project), 'message' => 'Ok...'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();

        return response(['message' => 'Ok']);
    }
}

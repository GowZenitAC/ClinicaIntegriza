<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Models\Especialidad;
use Inertia\Inertia;
use Illuminate\Support\Facades\Redirect;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $pacientes = Paciente::orderBy("id"); 

            if(request()->has("nombre")){
                $nombre=request("nombre");
                $pacientes->where('nombre', 'like','%'.$nombre."%");
            }

            $pacientes = $pacientes->paginate(5); //se pagina de cinco en cinco 

            return Inertia::render('Mostrar', ['pacientes'=>$pacientes]); //retornamos a la vista mostras llevando las props
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('FormCrear'); //retornamos a la vista de creacion
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([   //declaramos los valores que son requeridos para guardar los datos
            'nombre' => 'required',
            'diagnostico' => 'required',
            'edad' => 'required',
            'fecha_valoracion' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'historial' => 'required',
            'observaciones' => 'required',
            'seguimiento' => 'required',
            'id_especialidad' => 'required'
        ]);

        Paciente::create($request->all());
        return Redirect::route('pacientes.index'); //una vez que sea almacenado los datos se hace un redirect
        //a la vista principal en este caso mostrar
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
        
        return Inertia::render('Detalles', ['paciente' => $paciente]);//se crea la vista de detalles de cada paciente
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return Inertia::render('FormEditar', ['paciente' => $paciente]);//se renderiza la vista de editar
        //llevando las props que seran necesarias para efectuar la edicion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $paciente->update($request->all());//se hace un request de todos los datos y una vez editado
        return Redirect::route('pacientes.index');//se redirige a la vista principal
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return Redirect::route('pacientes.index');//dando click al boton de eliminar nos retorna a la vista
        //principal
    }
}

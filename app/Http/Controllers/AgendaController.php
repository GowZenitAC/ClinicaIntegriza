<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Agenda;
use Illuminate\Support\Facades\Redirect;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agendas = Agenda::orderBy("id");
        if(request()->has("title")){
            $title=request("title");
            $agendas->where('title', 'like','%'.$title."%");
        }
        $agendas = $agendas->paginate(5);
        return Inertia::render('Agenda', ['agendas'=>$agendas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return Inertia::render('CrearCita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required',
            'descripcion' => 'required',
            'start' => 'required',
            'end' => 'required',
            'id_paciente' => 'required'
        ]);

        Agenda::create($request->all());
        return Redirect::route('agenda.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
        return Inertia::render('DetalleCita', ['agenda' => $agenda]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        //
        return Inertia::render('EditarCita', ['agenda' => $agenda]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
         $agenda->update($request->all());
        return Redirect::route('agenda.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
        $agenda->delete();
        return Redirect::route('agenda.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use Illuminate\Http\Request;
use App\Models\Ambiente;
use App\Models\Docente;
use App\Models\Competencia;
use App\Models\PeriodoAcademico;
use App\Models\Dia;
use App\Http\Controller\DiaController;

/**
 * Class HorarioController
 * @package App\Http\Controllers
 */
class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horarios = Horario::paginate();

        return view('horario.index', compact('horarios'))
            ->with('i', (request()->input('page', 1) - 1) * $horarios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docentes = Docente::where('estado', 1)->get()->pluck('nombre', 'id');
        $competencias = Competencia::all()->pluck('nombre', 'id');
        $periodoAcademicos = PeriodoAcademico::all()->pluck('nombre', 'id');
        $ambientes = Ambiente::where('estado', 1)->get()->pluck('nombre', 'id');

        $horario = new Horario();
        return view('horario.create', compact('horario', 'docentes', 'competencias', 'periodoAcademicos', 'ambientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Horario::$rules);
        $horario =new Horario();
        if($horario->validarAmbiente($request)){
            return redirect()->route('horarios.create')
                ->with('error', 'El ambiente ya se encuentra ocupado en el horario.');
        }

        $horario = Horario::create($request->all());

        if(($request -> input('lunes')) != null){
            foreach ($request -> input('lunes') as $key => $value) {
                $dia = new Dia();
                $dia->nombre = 'Lunes';
                $dia->hora = $value;
                $dia->horario_id = $horario->id;
                $dia->save();
            }
        }
        if(($request -> input('martes')) != null){
            foreach ($request -> input('martes') as $key => $value) {
                $dia = new Dia();
                $dia->nombre = 'Martes';
                $dia->hora = $value;
                $dia->horario_id = $horario->id;
                $dia->save();
            }
        }

        if (($request -> input('miercoles')) != null) {
            foreach ($request -> input('miercoles') as $key => $value) {
                $dia = new Dia();
                $dia->nombre = 'Miercoles';
                $dia->hora = $value;
                $dia->horario_id = $horario->id;
                $dia->save();
            }
        }
        if (($request -> input('jueves')) != null) {
            foreach ($request -> input('jueves') as $key => $value) {
                $dia = new Dia();
                $dia->nombre = 'Jueves';
                $dia->hora = $value;
                $dia->horario_id = $horario->id;
                $dia->save();
            }
        }
        if (($request -> input('viernes')) != null) {
            foreach ($request -> input('viernes') as $key => $value) {
                $dia = new Dia();
                $dia->nombre = 'Viernes';
                $dia->hora = $value;
                $dia->horario_id = $horario->id;
                $dia->save();
            }
        }
        if (($request -> input('sabado')) != null) {
            foreach ($request -> input('sabado') as $key => $value) {
                $dia = new Dia();
                $dia->nombre = 'Sabado';
                $dia->hora = $value;
                $dia->horario_id = $horario->id;
                $dia->save();
            }
        }




        return redirect()->route('horarios.index')
            ->with('success', 'Horario created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $horario = Horario::find($id);
        $docente = Docente::where('id', $horario->docente_id)->get()->pluck('nombre');
        $competencia = Competencia::where('id', $horario->competencia_id)->pluck('nombre');
        $periodoAcademico  = PeriodoAcademico::where('id', $horario->periodo_academico_id)->pluck('nombre');
        $ambiente = Ambiente::where('id', $horario->ambiente_id)->get()->pluck('nombre');
        $dias = Dia::where('horario_id', $horario->id)->get();


        return view('horario.show', compact('horario', 'docente', 'competencia', 'periodoAcademico', 'ambiente', 'dias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horario = Horario::find($id);

        return view('horario.edit', compact('horario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Horario $horario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Horario $horario)
    {
        request()->validate(Horario::$rules);

        $horario->update($request->all());

        return redirect()->route('horarios.index')
            ->with('success', 'Horario updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $horario = Horario::find($id)->delete();

        return redirect()->route('horarios.index')
            ->with('success', 'Horario deleted successfully');
    }




}

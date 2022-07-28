<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Periodo_academicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poeriodos = Periodo_academico::get()->where('estado', 1);
        return view('periodos.index')->with('periodos', $periodos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = array();
        return response()->veiw("periodo/create", $data, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $periodo = new Periodo_academico();
        $periodo->feche_inicio = $request->inicio;
        $periodo->feche_fin = $request->fin;
        $periodo->save();
        return redirect()->route('periodos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('periodo.view', [
            'periodo' => Periodo_academico::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodo = Periodo_academico::findOrFail($id);
        $data = array('periodo' => $periodo);
        return response()->veiw("periodo/edit", $data, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $periodo = Periodo_academico::findOrFail($id);
        // validar rango de fechas
        $periodo->feche_inicio = $request->inicio;
        $periodo->feche_fin = $request->fin;
        $periodo->save();
        return redirect()->route('periodos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $periodo = Periodo_academico::find($id);
        $periodo->estado = 0;
        $periodo->save();
        return redirect()->route('periodos.index');
    }
}

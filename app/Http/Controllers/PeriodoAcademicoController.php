<?php

namespace App\Http\Controllers;

use App\Models\PeriodoAcademico;
use Illuminate\Http\Request;

/**
 * Class PeriodoAcademicoController
 * @package App\Http\Controllers
 */
class PeriodoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodoAcademicos = PeriodoAcademico::paginate();

        return view('periodo-academico.index', compact('periodoAcademicos'))
            ->with('i', (request()->input('page', 1) - 1) * $periodoAcademicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodoAcademico = new PeriodoAcademico();
        return view('periodo-academico.create', compact('periodoAcademico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(PeriodoAcademico::$rules);

        $periodoAcademico = PeriodoAcademico::create($request->all());

        return redirect()->route('periodo-academicos.index')
            ->with('success', 'PeriodoAcademico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $periodoAcademico = PeriodoAcademico::find($id);

        return view('periodo-academico.show', compact('periodoAcademico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $periodoAcademico = PeriodoAcademico::find($id);

        return view('periodo-academico.edit', compact('periodoAcademico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  PeriodoAcademico $periodoAcademico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeriodoAcademico $periodoAcademico)
    {
        request()->validate(PeriodoAcademico::$rules);

        $periodoAcademico->update($request->all());

        return redirect()->route('periodo-academicos.index')
            ->with('success', 'PeriodoAcademico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $periodoAcademico = PeriodoAcademico::find($id)->delete();

        return redirect()->route('periodo-academicos.index')
            ->with('success', 'PeriodoAcademico deleted successfully');
    }
}

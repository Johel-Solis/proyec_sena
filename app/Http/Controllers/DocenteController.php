<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use RegisterController;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use RegistersUsers;
use Illuminate\Support\Facades\Hash;
use  App\Model\Horario;
/**
 * Class DocenteController
 * @package App\Http\Controllers
 */
class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::paginate();

        return view('docente.index', compact('docentes'))
            ->with('i', (request()->input('page', 1) - 1) * $docentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $docente = new Docente();
        return view('docente.create', compact('docente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //request()->validate(Docente::$rules);


            $user= User::create([
                'name' => $request->input('nombre'),
                'email' => $request->input('email'),
                'tipo_usuario' => 1,
                'password' => Hash::make($request->input('password')),
            ]);

            $user->assignRole('docente');


        $docente = new Docente();
        $docente->nombre = $request->input('nombre');
        $docente->email = $request->input('email');
        $docente->id =$request->input('id');
        $docente->tipo_documento = $request->input('tipo_documento');
        $docente->tipo_contrato = $request->input('tipo_contrato');
        $docente->tipo_docente = $request->input('tipo_docente');
        $docente->area = $request->input('area');
        $docente->apellido = $request->input('apellido');
        $docente->user_id =$user->id;
        $docente->save();



        //$docente = Docente::create($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $docente = Docente::find($id);

        return view('docente.show', compact('docente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);

        return view('docente.edit', compact('docente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Docente $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docente $docente)
    {
        request()->validate(Docente::$rules);

        $docente->update($request->all());

        return redirect()->route('docentes.index')
            ->with('success', 'Docente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $docente = Docente::find($id)->delete();

        return redirect()->route('docentes.index')
            ->with('success', 'Docente deleted successfully');
    }

    public function horario($id)
    {
        $docente = Docente::where('user_id',$id)->get();
        $horarios = Horario::where('docente_id', $docente->id)->get();
        $cantidad=0;
        return view('docente.horario', compact('docente','horarios','cantidad'));
    }


}

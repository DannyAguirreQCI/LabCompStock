<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use Illuminate\Http\Request;

class ComputadoraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
        //->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $computadoras = Computadora::all();
        return view('computadora.indexComputadora', compact('computadoras'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computadora.createComputadora');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca' => ['required', 'string', 'max:255'],
            'modelo' => 'required',
            'numserie' => 'required|string|min:10',
            'cpu' => 'required',
            'ram' => 'required',
            'hdd' => 'required',
            'gpu' => 'required',
            'os' => 'required',
            'estado' => 'required',
            'ubicacion' => 'required',
        ]);

        //Computadora::create($request->all());
        $computadora = new Computadora();
        $computadora->marca = $request->marca;
        $computadora->modelo = $request->modelo;
        $computadora->numserie = $request->numserie;
        $computadora->cpu = $request->cpu;
        $computadora->ram = $request->ram;
        $computadora->hdd = $request->hdd;
        $computadora->gpu = $request->gpu;
        $computadora->os = $request->os;
        $computadora->estado = $request->estado;
        $computadora->ubicacion = $request->ubicacion;
        $computadora->save();

        // Redireccion
        return redirect()->route('computadora.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Computadora $computadora)
    {
        return view('computadora.showComputadora', compact('computadora'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Computadora $computadora)
    {
        return view('computadora.editComputadora', compact('computadora'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Computadora $computadora)
    {
        $request->validate([
            'marca' => ['required', 'string', 'max:255'],
            'modelo' => 'required',
            'numserie' => 'required|string|min:10',
            'cpu' => 'required',
            'ram' => 'required',
            'hdd' => 'required',
            'gpu' => 'required',
            'os' => 'required',
            'estado' => 'required',
            'ubicacion' => 'required',
        ]);

        //$computadora->update($request->all());
        $computadora->marca = $request->marca;
        $computadora->modelo = $request->modelo;
        $computadora->numserie = $request->numserie;
        $computadora->cpu = $request->cpu;
        $computadora->ram = $request->ram;
        $computadora->hdd = $request->hdd;
        $computadora->gpu = $request->gpu;
        $computadora->os = $request->os;
        $computadora->estado = $request->estado;
        $computadora->ubicacion = $request->ubicacion;
        $computadora->save();

        return redirect()->route('computadora.show', $computadora);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->route('computadora.index');
    }
}

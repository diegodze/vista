<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function index()
    {
        $datos = registro::get();
        return view('layout', compact('datos'));
    }

    public function formulario()
    {
        return view('nuevoregistro');
    }

    public function nuevo(Request $request)
    {
        registro::create([
            'curp' => $request->curp,
            'paciente' => $request->paciente,
            'institucion' => $request->institucion,
        ]);

        return redirect('index');
    }

    public function info($id)
    {
        $datos = registro::find($id);
        return view('editarregistro', compact('datos'));
    }

    public function editar(Request $request, $id)
    {
        $datos = registro::find($id);
        $datos->curp = $request->get('curp');
        $datos->paciente = $request->get('paciente');
        $datos->institucion = $request->get('institucion');
        $datos->save();

        return redirect('index');
    }

    public function eliminar($id)
    {
        $datos = registro::find($id);
        $datos->delete();
        return back();
    }
}

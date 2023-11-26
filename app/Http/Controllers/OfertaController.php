<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Oferta;

class OfertaController extends Controller
{
    //Index

    //Create

    public function editar(Oferta $oferta)
    {
        return View('ofertas.editar', ['oferta' => $oferta]);
    }

    public function actualizar(Request $request)
    {
        $oferta = Oferta::find($request->id);
        $oferta->carreras_solicitadas = $request->carreras_solicitadas;
        $oferta->puesto = $request->puesto;
        $oferta->cantidad_estudiantes = $request->cantidad_estudiantes;
        $oferta->salario = $request->salario;
        $oferta->descripcion_proyecto = $request->descripcion_proyecto;
        $oferta->fecha_inicio = $request->fecha_inicio;
        $oferta->fecha_fin = $request->fecha_fin;
        $oferta->fecha_max_aplicar = $request->fecha_max_aplicar;
        $oferta->save();
        //redirigir al index del controlador
        return redirect()->route('ofertas.index');
    }

    public function eliminar($id)
    {
        Oferta::destroy($id);
        //redirigir al index del controlador
        return redirect()->route('ofertas.index');
    }

    //Obtener las ofertas con el id del usuario logueado
    public function index()
    {
        $ofertas = Oferta::where('id_empresa', auth()->user()->id)->get();
        return View('ofertas.ofertas_index', ['ofertas' => $ofertas]);
        //retonar las ofertas del usuario logueado en un json
        //return response()->json($ofertas);
    }

    //egistar una nueva oferta para que tenga el id del usuario logueado
    public function store(Request $request)
    {
        $oferta = new Oferta();
        $oferta->carreras_solicitadas = $request->carreras_solicitadas;
        $oferta->puesto = $request->puesto;
        $oferta->cantidad_estudiantes = $request->cantidad_estudiantes;
        $oferta->salario = $request->salario;
        $oferta->descripcion_proyecto = $request->descripcion_proyecto;
        $oferta->fecha_inicio = $request->fecha_inicio;
        $oferta->fecha_fin = $request->fecha_fin;
        $oferta->fecha_max_aplicar = $request->fecha_max_aplicar;
        $oferta->id_empresa = auth()->user()->id;
        $oferta->save();
        //redirigir al index del controlador
        return redirect()->route('ofertas.index');
    }

    //Guardar la oferta creada en la base de datos
    public function create()
    {
        return View('ofertas.ofertas_crear');
    }

    //Api para obtener todas las ofertas de la base de datos que incluya el nombre de la empresa, la direccion y el telefono
    public function ofertasEstudiantes()
    {
        $ofertas = Oferta::join('users', 'users.id', '=', 'ofertas.id_empresa')
            ->select('ofertas.*', 'users.nombre_empresa', 'users.rubro', 'users.direccion', 'users.telefono', 'users.email')->get();

        return response()->json(['ofertas' => $ofertas]);
    }

    //Api para obtener una oferta especifica de la base de datos que incluya el nombre de la empresa, rubro, direccion, telefono, email y la oferta
    public function ofertaEE($id)
    {
        $oferta = Oferta::join('users', 'users.id', '=', 'ofertas.id_empresa')
            ->select('ofertas.*', 'users.nombre_empresa', 'users.rubro', 'users.direccion', 'users.telefono', 'users.email')
            ->where('ofertas.id', '=', $id)->get();

        return response()->json(['oferta' => $oferta]);
    }
}

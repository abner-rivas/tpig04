<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Postulado;

class PostuladoController extends Controller
{
    //Index

    //Create

    public function eliminar($id)
    {
        Postulado::destroy($id);
        //redirigir al index del controlador
        return redirect()->route('postulados.consulta');
    }

    //Obtener las ofertas con el id del usuario logueado
    public function consulta()
    {
        $postulados = Postulado::where('id', auth()->user()->id)->get();
        return View('postulados.postulados_consulta', ['postulados' => $postulados]);
        //retonar las ofertas del usuario logueado en un json
        //return response()->json($ofertas);
    }

    public function revisar($id)
    {
        // Encuentra el postulado por su ID
        $postulado = Postulado::findOrFail($id);

        return view('postulados.postulados_consulta', ['postulado' => $postulado]);
        // Retorna la vista con el postulado encontrado
    }

    
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    public function getData()
    {
        $client = new Client([
            'verify' => false, // Ignorar la verificación del certificado SSL
        ]);

        try {
            $response = $client->get('https://cat-fact.herokuapp.com/facts');
            $data = json_decode($response->getBody(), true);

            // Retorna la vista con los datos
            return view('postulados.postulados_consulta', ['catFacts' => $data]);
        } catch (RequestException $e) {
            if (view()->exists('error')) {
                return view('error', ['message' => $e->getMessage()]);
            } else {
                return $e->getMessage(); // Si la vista 'error' no existe, muestra solo el mensaje de error en texto plano
            }
        }
    }
    public function revisar($id)
    {
    $client = new Client([
        'verify' => false, // Ignorar la verificación del certificado SSL
    ]);

    try {
        $response = $client->get("https://cat-fact.herokuapp.com/facts");
        $data = json_decode($response->getBody(), true);

        // Busca el detalle correspondiente al ID en los datos obtenidos
        $detalle = collect($data)->firstWhere('_id', $id);

        // Retorna una vista con los detalles obtenidos
        return view('postulados.postulado_datos', ['detalle' => $detalle]);
    } catch (\Exception $e) {
        // Manejar errores, por ejemplo, mostrando un mensaje de error
        if (view()->exists('error')) {
            return view('error', ['message' => $e->getMessage()]);
        } else {
            return $e->getMessage(); // Si la vista 'error' no existe, muestra solo el mensaje de error en texto plano
        }
    }
    }

}

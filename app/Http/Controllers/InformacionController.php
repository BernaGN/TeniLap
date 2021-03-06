<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;
use DB;
use Illuminate\Support\Facades\Redirect;

class InformacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request) {
            //$material = MaterialQuimico::findOrFail($id);
            $sql = trim($request->get('buscarTexto'));
            $dispositivo = DB::table('dispositivos')
                ->join('clientes', 'dispositivos.cliente_id', '=', 'clientes.id')
                ->join('tipos', 'dispositivos.tipo_id', '=', 'tipos.id')
                ->join('users', 'dispositivos.user_id', '=', 'users.id')
                ->select('dispositivos.id',
                    'dispositivos.fecha_inicio', 'dispositivos.fecha_entrega',
                    'dispositivos.estado', 'dispositivos.total', 'dispositivos.marca',
                    'tipos.nombre as tipo','clientes.nombre as cliente',
                    'users.name as empleado')
                ->where('dispositivos.no_serie', $sql)
                ->orWhere('dispositivos.id', $sql)
                ->get();
            return view('usuario.ver-informacion', [
                'dispositivo' => $dispositivo,
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

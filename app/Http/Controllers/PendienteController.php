<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;
use App\Models\Tipo;
use DB;
use Illuminate\Support\Facades\Redirect;

class PendienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dispositivo = DB::table('dispositivos')
            ->join('clientes', 'dispositivos.cliente_id', '=', 'clientes.id')
            ->join('tipos', 'dispositivos.tipo_id', '=', 'tipos.id')
            ->join('empleados', 'dispositivos.empleado_id', '=', 'empleados.id')
            ->select('dispositivos.id', 'dispositivos.nombre',
                'dispositivos.fecha_inicio', 'dispositivos.fecha_entrega',
                'dispositivos.estado', 'dispositivos.total', 'dispositivos.marca',
                'tipos.nombre as tipo','clientes.nombre as cliente',
                'empleados.nombre as empleado')
            ->where('dispositivos.estado', '=', 'Pendiente')
            ->get();
        return view('admin.dispositivos',[
            "nombre" =>'Pendientes',
            'dispositivos' => $dispositivo,
            'tipos' => DB::table('tipos')
                ->orderBy('id', 'ASC')
                ->get(),
        ]);
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
        $dispositivo = Dispositivo::findOrFail($request->id_dispositivo);
        $dispositivo->marca = $request->marca;
        $dispositivo->fecha_inicio = $request->fecha_inicio;
        $dispositivo->fecha_entrega = $request->fecha_entrega;
        $dispositivo->estado = $request->estado;
        $dispositivo->total = $request->total;
        $dispositivo->save();
        return Redirect::to('dispositivos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dispositivo = Dispositivo::findOrFail($id);
        $dispositivo->delete();
        return Redirect::to('dispositivos')
            ->with('success','Eliminado correctamente');
    }
}

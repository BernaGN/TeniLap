<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Localidad;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.cliente', [
            'clientes' => DB::table('clientes')
                ->join('localidades','clientes.localidad_id','=','localidades.id')
                ->select('clientes.id', 'clientes.nombre', 'clientes.email', 'clientes.telefono',
                            'clientes.estado', 'localidades.nombre as localidad')
                ->orderBY('clientes.id', 'ASC')
                ->get(),
            'localidades' => DB::table('localidades')
                ->orderBY('id', 'ASC')
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
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->estado = $request->status;
        $cliente->localidad_id = $request->localidad;
        $cliente->save();
        return Redirect::to('clientes');
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
        $cliente = Cliente::findOrFail($request->id_cliente);
        $cliente->nombre = $request->nombre;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->estado = $request->status;
        $cliente->localidad_id = $request->localidad;
        $cliente->save();
        return Redirect::to('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return Redirect::to('clientes')
            ->with('success','Eliminado correctamente');
    }
}

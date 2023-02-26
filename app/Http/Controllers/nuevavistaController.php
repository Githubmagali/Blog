<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class nuevavistaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "hola desde la funcion index";

    }
 public function recibirParametros($id){
    return "El id recibido es:" .$id;
 }

 function mostrarProductos(){
    return "Lista de Productos";
 }

 function noAdmin(){
    return "No tiene acceso a la lista de productos";
 }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return "Funcion create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
       return "Funcion show";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return "Funcion edit";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        return "Funcion update";
    }

    /**
     * Remove the specified resource from storage.
     *
    * @param int
    * @return \Illuminate\Http\Response

    */

    public function destroy()
    {
       return "Funcion destroy";
    }
}

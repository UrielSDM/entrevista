<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all(); //Solicita todas los clientes almacenadas en la base de datos
        return view('clientes.index',compact('clientes'));//Envia como parametro todas los clientes a la vista index      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada = $request->all();

        if($archivo=$request->file('Ruta')) //Si se desea guardar una imagen
        {
            /*Asigna la ruta correcta de la imagen, que tiene el formato imagen/"nombre_imagen" */
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $entrada["Ruta"] = $nombre;
        }

        Cliente::create($entrada); //Almacena al cliente en la base de datos

        return redirect("/clientes"); //Redirecciona a la pagina principal
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id); //Busca al cliente utilizando su id  

        return view('clientes.edit',compact('cliente'));//Redirecciona a la pagina de editar y pasa como parametro el cliente 
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
        $cliente = Cliente::findOrFail($id);//Busca al cliente con el id ada = $request->all();

        $entrada = $request->all();

        if($archivo=$request->file('Ruta')) //Si se desea guardar una imagen
        {
            //Borra la antigua imagen del cliente 

            $path_vieja_imagen = "images/".$cliente->Ruta;//Determina la ruta de la antigua imagen

            unlink($path_vieja_imagen);//Borra la imagen anterior del cliente 

            //Asigna la ruta correcta de la imagen, que tiene el formato imagen/"nombre_imagen" 
            $nombre = $archivo->getClientOriginalName();
            $archivo->move('images',$nombre);
            $entrada["Ruta"] = $nombre;
        }

        $cliente->update( $entrada ); //Actuliza la informacion del cliente

        return redirect("/clientes");//Redirecciona a la pagina principal 
        
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id); //Buscar el cliente utilizando el id 
                    
        $path_imagen = "images/".$cliente->Ruta;//Determina la ruta de la imagen del cliente

        unlink($path_imagen);//Borra la imagen del cliente

        $cliente->delete(); //Borra el cliente de la base de datos 

        return redirect("/clientes"); //Redirecciona a la pagina de inicio
    }
}

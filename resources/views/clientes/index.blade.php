@extends("../layouts.plantilla")

@section("cuerpo")

<!--Boton de crear--->
<div class="crearEtiqueta">
    <a href="/clientes/create" class="btn btn-primary">Crear Cliente</a>
</div>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($clientes as $cliente)
            <!--Para cada cliente--->
            <div class="col">
                <!--Se crea una nueva columna para mostrar la informacion del cliente--->
                <div class="card shadow-sm">
                    <!--Nombre del cliente--->
                    <div class="nombreEtiqueta">
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">{{$cliente->Nombre}}</text>
                    </div>
                    <!--Linea recta--->
                    <hr size="2">
                    <!--Fecha de la nota--->
                    <div class="fechaNota">
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Edad {{$cliente->Edad}}</text>
                    </div>
                    <div class="card-body">
                        <!--Texto de la Nota--->
                        <div class="descripcionEtiqueta">
                            @if( $cliente->Ruta != "" )
                            <img src="images/{{$cliente->Ruta}}" width="300" height="300" />
                            @else
                            NO HAY IMAGEN
                            @endif
                        </div>

                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Direccion {{$cliente->Direccion}}</text> <br>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Telefono {{$cliente->Telefono}}</text>
                        
                        <!--Div para los Botones--->
                        <div class="d-flex justify-content-between align-items-center">
                       
                                <!--Boton de modificar--->
                                <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-success" >Modificar</a>
                                
                                <!--Boton de borrar--->
                                <form method="post" action="/clientes/{{$cliente->id}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-danger btn-s" value="Borrar">
                                </form>
                         
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

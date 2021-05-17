@extends("../layouts.plantilla")

@section("cuerpo")

<form method="post" action="/clientes/{{$cliente->id}}" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="camposNota">
        <div class="container">

            <fieldset>
                <!--Campo para el nombre del cliente--->
                <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required name="Nombre" type="text" placeholder="Nombre del cliente"
                            class="form-control" value="{{$cliente->Nombre}}">
                    </div>
                </div>

                <!--Campo para la direccion del cliente --->
                <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required class="form-control" name="Direccion"
                            placeholder="Direccion del cliente"  value="{{$cliente->Direccion}}">
                    </div>
                </div>

                 <!--Campo para el teléfono del cliente --->

                 <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required class="form-control" name="Telefono"
                            placeholder="Telefono del cliente"  value="{{$cliente->Telefono}}">
                    </div>
                </div>


                 <!--Campo para la edad del cliente --->

                 <div class="form-group">
                    <div class="col-md-8">
                        <input type="number" required class="form-control" name="Edad"
                            placeholder="Edad del cliente"  value="{{$cliente->Edad}}" min="1">
                    </div>
                </div>

                <!-- Campo para seleccionar una imagen  --->

                <input type="file" name="Ruta">

                <!--Boton de guardar--->
                <div class="form-group">
                    <div class="col-md-8 text-center">
                        <input type="hidden" name="_method" value="PUT">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                    </div>
                </div>

            </fieldset>


        </div>
    </div>
</form>


@endsection
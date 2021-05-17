<?php $__env->startSection("cuerpo"); ?>

<form method="post" action="/clientes" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>


    <div class="camposNota">
        <div class="container">

            <fieldset>
                <!--Campo para el nombre del cliente--->
                <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required name="Nombre" type="text" placeholder="Nombre del cliente"
                            class="form-control">
                    </div>
                </div>

                <!--Campo para la direccion del cliente --->
                <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required class="form-control" name="Direccion"
                            placeholder="Direccion del cliente">
                    </div>
                </div>

                 <!--Campo para el teléfono del cliente --->

                 <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required class="form-control" name="Telefono"
                            placeholder="Telefono del cliente">
                    </div>
                </div>


                 <!--Campo para la edad del cliente --->

                 <div class="form-group">
                    <div class="col-md-8">
                        <input type="number" required class="form-control" name="Edad"
                            placeholder="Edad del cliente" min=1 >
                    </div>
                </div>

                <!-- Campo para seleccionar una imagen  --->

                <input type="file" required name="Ruta">

                <!--Boton de guardar--->
                <div class="form-group">
                    <div class="col-md-8 text-center">
                        <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
                    </div>
                </div>

            </fieldset>


        </div>
    </div>
</form>


<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Evaluacion/resources/views/clientes/create.blade.php ENDPATH**/ ?>
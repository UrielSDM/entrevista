<?php $__env->startSection("cuerpo"); ?>

<form method="post" action="/clientes/<?php echo e($cliente->id); ?>" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>


    <div class="camposNota">
        <div class="container">

            <fieldset>
                <!--Campo para el nombre del cliente--->
                <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required name="Nombre" type="text" placeholder="Nombre del cliente"
                            class="form-control" value="<?php echo e($cliente->Nombre); ?>">
                    </div>
                </div>

                <!--Campo para la direccion del cliente --->
                <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required class="form-control" name="Direccion"
                            placeholder="Direccion del cliente"  value="<?php echo e($cliente->Direccion); ?>">
                    </div>
                </div>

                 <!--Campo para el teléfono del cliente --->

                 <div class="form-group">
                    <div class="col-md-8">
                        <input maxlength="250" required class="form-control" name="Telefono"
                            placeholder="Telefono del cliente"  value="<?php echo e($cliente->Telefono); ?>">
                    </div>
                </div>


                 <!--Campo para la edad del cliente --->

                 <div class="form-group">
                    <div class="col-md-8">
                        <input type="number" required class="form-control" name="Edad"
                            placeholder="Edad del cliente"  value="<?php echo e($cliente->Edad); ?>" min="1">
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Evaluacion/resources/views/clientes/edit.blade.php ENDPATH**/ ?>
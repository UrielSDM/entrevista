<?php $__env->startSection("cuerpo"); ?>

<!--Boton de crear--->
<div class="crearEtiqueta">
    <a href="/clientes/create" class="btn btn-primary">Crear Cliente</a>
</div>

<div class="album py-5 bg-light">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <!--Para cada cliente--->
            <div class="col">
                <!--Se crea una nueva columna para mostrar la informacion del cliente--->
                <div class="card shadow-sm">
                    <!--Nombre del cliente--->
                    <div class="nombreEtiqueta">
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em"><?php echo e($cliente->Nombre); ?></text>
                    </div>
                    <!--Linea recta--->
                    <hr size="2">
                    <!--Fecha de la nota--->
                    <div class="fechaNota">
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Edad <?php echo e($cliente->Edad); ?></text>
                    </div>
                    <div class="card-body">
                        <!--Texto de la Nota--->
                        <div class="descripcionEtiqueta">
                            <?php if( $cliente->Ruta != "" ): ?>
                            <img src="images/<?php echo e($cliente->Ruta); ?>" width="300" height="300" />
                            <?php else: ?>
                            NO HAY IMAGEN
                            <?php endif; ?>
                        </div>

                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Direccion <?php echo e($cliente->Direccion); ?></text> <br>
                        <text x="50%" y="50%" fill="#eceeef" dy=".3em">Telefono <?php echo e($cliente->Telefono); ?></text>
                        
                        <!--Div para los Botones--->
                        <div class="d-flex justify-content-between align-items-center">
                       
                                <!--Boton de modificar--->
                                <a href="/clientes/<?php echo e($cliente->id); ?>/edit" class="btn btn-success" >Modificar</a>
                                
                                <!--Boton de borrar--->
                                <form method="post" action="/clientes/<?php echo e($cliente->id); ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-danger btn-s" value="Borrar">
                                </form>
                         
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>

<?php echo $__env->make("../layouts.plantilla", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Evaluacion/resources/views/clientes/index.blade.php ENDPATH**/ ?>
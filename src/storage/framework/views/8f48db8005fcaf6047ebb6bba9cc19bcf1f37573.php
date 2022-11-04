<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-9">
            <h2>Solicitudes de Inclusión de Obra</h2>
        </div>
        <div class="col col-3 text-right">
            <h3><a href="<?php echo e(url('/' . Auth::user()->type . '/jingles')); ?>">Volver</a></h3>
        </div>
    </div>

    <?php echo $__env->make('components.jingle-view', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make(Auth::user()->type . '.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/jingles/view.blade.php ENDPATH**/ ?>
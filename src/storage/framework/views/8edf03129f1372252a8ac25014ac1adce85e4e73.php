<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-9">
            <h2>Solicitudes de Registro de Obra</h2>
        </div>
        <div class="col col-3 text-right">
            <h3><a href="<?php echo e(url('/user/work/register')); ?>">Nueva Solicitud</a></h3>
        </div>
    </div>
    <?php if(session('message.type')): ?>
    <div class="row">
        <div class="alert alert-<?php echo e(session('message.type')); ?> col-md-12 col-lg-10 offset-lg-1">
            <?php echo e(session('message.data')); ?>

        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>N°</th>
                        <th>Título</th>
                        <th>Género</th>
                        <th>Fecha de solicitud</th>
                        <th>Último movimiento</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($request->id); ?></td>
                        <td class="w-25"><?php echo e($request->title); ?></td>
                        <td><?php echo e(optional($request->genre)->name); ?></td>
                        <td><?php echo e($request->created_at->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e($request->updated_at->format('d/m/Y H:i')); ?></td>

                        <?php if($request->status_id === null): ?>
                        <td class="text-center">No enviada</td>
                        <?php elseif($request->status_id === 9): ?>
                            <?php if($request->approved): ?>
                            <td class="text-center">Registro Aprobado</td>
                            <?php else: ?>
                            <td class="text-center">Registro Rechazado</td>
                            <?php endif; ?>
                        <?php else: ?>
                        <td class="text-center"><?php echo e(optional($request->status)->name); ?></td>
                        <?php endif; ?>

                        
                        <?php if($request->user_id == Auth::user()->id && $request->status === null): ?>
                            <td class="text-center">
                                <a href="/user/work/edit/<?php echo e($request->id); ?>">Editar</a> &nbsp;
                                <a href="/user/work/delete/<?php echo e($request->id); ?>">Eliminar</a>
                            </td>
                        <?php else: ?>
                            <td class="text-center"><a href="/user/work/view/<?php echo e($request->id); ?>">Ver</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/work/list.blade.php ENDPATH**/ ?>
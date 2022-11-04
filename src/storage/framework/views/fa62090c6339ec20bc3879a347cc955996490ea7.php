<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-9">
            <h2>Solicitudes de Ingreso Representado Inscripto</h2>
        </div>
        <div class="col col-3 text-right">
            <h3><a href="<?php echo e(url('/user/member/register')); ?>">Nueva Solicitud</a></h3>
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
                        <th>Nombre</th>
                        <th>Pseudónimo</th>
                        <th>Teléfono</th>
                        <th>Celular</th>
                        <th>Correo Electrónico</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($request->name); ?></td>
                        <td><?php echo e($request->pseudonym); ?></td>
                        <td><?php echo e($request->landline); ?></td>
                        <td><?php echo e($request->mobile); ?></td>
                        <td><?php echo e($request->email); ?></td>
                        <td><?php echo e($request->created_at->format('d/m/Y H:i')); ?></td>
                        <td><?php echo e(optional($request->status)->name); ?></td>
                        <?php if($request->status_id === null): ?>
                        <td><a href="/user/member/edit/<?php echo e($request->id); ?>">Editar</a></td>
                        <?php else: ?>
                        <td><a href="/user/member/<?php echo e($request->id); ?>">Ver</a></td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/member/list.blade.php ENDPATH**/ ?>
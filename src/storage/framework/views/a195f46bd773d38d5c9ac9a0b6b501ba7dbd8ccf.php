<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-9">
            <h2>Solicitudes de Inclusión</h2>
        </div>
        <div class="col col-3 text-right">
            <h3><a href="<?php echo e(url('/' . $user_type . '/jingles/create')); ?>">Nueva Solicitud</a></h3>
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
                        <th>Anunciante</th>
                        <th>Tipo de Solicitud</th>
                        <th>Marca</th>
                        <th>Título Obra</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($request->id); ?></td>
                        <td><?php echo e(optional($request->applicant)->name ?? Auth::user()->full_name); ?></td>
                        <td><?php echo e($request->is_especial ? 'Campaña Especial' : 'Regular'); ?></td>
                        <td><?php echo e($request->product_brand); ?></td>
                        <td><?php echo e($request->work_title); ?></td>

                        <?php if(Auth::user()->type == 'member'): ?>
                            
                            <?php if($request->status_id === 9): ?>
                                <?php if($request->approved): ?>
                                <td class="text-center">Registro Aprobado</td>
                                <?php else: ?>
                                <td class="text-center">Registro Rechazado</td>
                                <?php endif; ?>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>">Ver</a></td>
                            
                            <?php elseif($request->member_id == Auth::user()->id && $request->status_id === null): ?>
                                <td class="text-center">No enviada</td>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>/edit">Editar</a></td>
                            
                            <?php elseif(Auth::user()->sadaic && $request->agreements->contains('member_idx', Auth::user()->sadaic->idx) && ($request->status_id == 2 || $request->status_id == 3) && $request->agreements->firstWhere('member_idx', Auth::user()->sadaic->idx)->response !== true): ?>
                                <td class="text-center"><?php echo e(optional($request->status)->name); ?></td>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>/response">Responder</a></td>
                            
                            <?php else: ?>
                                <td class="text-center"><?php echo e(optional($request->status)->name); ?></td>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>">Ver</a></td>
                            <?php endif; ?>
                        <?php elseif(Auth::user()->type == 'user'): ?>
                            
                            <?php if($request->status_id === 9): ?>
                                <?php if($request->approved): ?>
                                <td class="text-center">Registro Aprobado</td>
                                <?php else: ?>
                                <td class="text-center">Registro Rechazado</td>
                                <?php endif; ?>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>">Ver</a></td>
                            
                            <?php elseif($request->user_id == Auth::user()->id && $request->status_id === null): ?>
                                <td class="text-center">No enviada</td>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>/edit">Editar</a></td>
                            
                            <?php else: ?>
                                <td class="text-center"><?php echo e(optional($request->status)->name); ?></td>
                                <td class="text-center"><a href="/<?php echo e($user_type); ?>/jingles/<?php echo e($request->id); ?>">Ver</a></td>
                            <?php endif; ?>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make($user_type . '.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/jingles/index.blade.php ENDPATH**/ ?>
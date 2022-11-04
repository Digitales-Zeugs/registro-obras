<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-9">
            <h2>Solicitud de Inclusión</h2>
        </div>
        <div class="col col-3 text-right">
            <h3><a href="<?php echo e(url('/' . $user_type . '/jingles')); ?>">Volver</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <p>Solicito a la Sociedad Argentina de Autores y Compositores de Música (SADAIC), de acuerdo a las condiciones establecidas en el Régimen
            Autoral para el uso de Obras Musicales en Actos de Naturaleza Publicitaria, para la inclusión de la obra cuyo título, autor/es,
            compositor/es y/o editor/es se detalla a continuación y afirma que los datos consignados en la presente son correctos y completos,
            y que esta solicitud y declaración se ha confeccionado sin omitir dato alguno que deba contener, siendo la expresión de la verdad. Complete los datos obligatorios (*) para poder generar la solicitud de inclusión.</p>
        </div>
    </div>
    <?php if(session('message.type')): ?>
    <div class="row">
        <div class="alert alert-<?php echo e(session('message.type')); ?> col-md-12 col-lg-10 offset-lg-1">
            <?php echo e(session('message.data')); ?>

        </div>
    </div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
    <div class="row">
        <div class="alert alert-danger col-md-12 col-lg-10 offset-lg-1">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <?php endif; ?>
    <div class="row">
        <div class="col col-12">
            <?php echo $__env->make('jingles.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col col-6 text-center">
            <button type="button" class="btn btn-secondary" id="saveRegister">Guardar solicitud</button>
        </div>
        <div class="col col-6 text-center">
            <button type="button" class="btn btn-primary" id="sendRegister">Enviar solicitud a SADAIC5</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
<?php $__currentLoopData = $registration->agreements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agreement): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php if($agreement->type_id == 1): ?>
    $peopleTable.row.add([
        '<span class="capitalize"><?php echo e(ucwords(strtolower($agreement->member->nombre))); ?></span>',
        '<?php echo e($agreement->doc_number); ?>',
        '<?php echo e($agreement->member->codanita); ?>',
        '<button type="button" class="btn btn-link removePerson"><i class="far fa-trash-alt"></i></button>',
        ''
    ]).node().id = '<?php echo e($agreement->idx); ?>';

    customStorage.addPerson({
        type: 'member',
        member_id: '<?php echo e($agreement->member->codanita); ?>',
        doc_number: '<?php echo e($agreement->doc_number); ?>',
        idx: '<?php echo e($agreement->member->idx); ?>'
    });
<?php else: ?>
    $peopleTable.row.add([
        '<span class="capitalize"><?php echo e(ucwords(strtolower($agreement->meta->name))); ?></span>',
        '<?php echo e($agreement->doc_number); ?>',
        '',
        '<button type="button" class="btn btn-link removePerson"><i class="far fa-trash-alt"></i></button>',
        '<button type="button" class="btn btn-link editPerson" data-toggle="modal" data-target="#editPersonModal"><i class="far fa-edit"></i></button>'
    ]).node().id = '<?php echo e($agreement->doc_number); ?>';

    customStorage.addPerson({
        type: 'no-member',
        doc_number: '<?php echo e($agreement->doc_number); ?>',
        <?php if($agreement->meta->address_country_id): ?>
        address_country_id: '<?php echo e($agreement->meta->address_country_id); ?>',
        <?php endif; ?>
        <?php if($agreement->meta->address_state_id): ?>
        address_state_id: <?php echo e($agreement->meta->address_state_id); ?>,
        <?php endif; ?>
        <?php if($agreement->meta->address_state_text): ?>
        address_state_text: '<?php echo e($agreement->meta->address_state_text); ?>',
        <?php endif; ?>
        <?php if($agreement->meta->address_city_id): ?>
        address_city_id: <?php echo e($agreement->meta->address_city_id); ?>,
        <?php endif; ?>
        <?php if($agreement->meta->address_city_text): ?>
        address_city_text: '<?php echo e($agreement->meta->address_city_text); ?>',
        <?php endif; ?>
        address_zip: '<?php echo e($agreement->meta->address_zip); ?>',
        apartment: '<?php echo e($agreement->meta->apartment); ?>',
        birth_country_id: '<?php echo e($agreement->meta->birth_country_id); ?>',
        birth_date: '<?php echo e(optional($agreement->meta->birth_date)->format('Y-m-d')); ?>',
        doc_type: '<?php echo e($agreement->meta->doc_type_id); ?>',
        email: '<?php echo e($agreement->meta->email); ?>',
        floor: '<?php echo e($agreement->meta->floor); ?>',
        name: '<?php echo e($agreement->meta->name); ?>',
        phone_area: '<?php echo e($agreement->meta->phone_area); ?>',
        phone_country: '<?php echo e($agreement->meta->phone_country); ?>',
        phone_number: '<?php echo e($agreement->meta->phone_number); ?>',
        street_name: '<?php echo e($agreement->meta->street_name); ?>',
        street_number: '<?php echo e($agreement->meta->street_number); ?>',
    });
<?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
$peopleTable.draw();
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make($user_type . '.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/jingles/edit.blade.php ENDPATH**/ ?>
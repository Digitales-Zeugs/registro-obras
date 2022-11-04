<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-12">
            <h2>Actualización de Datos</h2>
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <p>Complete los datos obligatorios (*) para poder actualizar los datos.</p>
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
            <form action="/user/member/profile" method="POST">
                <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="name" class="col-12 col-sm-3 col-form-label">Apellido y Nombre *</label>
                    <div class="col-12 col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name', $user->name)); ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phone" class="col-12 col-sm-3 col-form-label">Teléfono *</label>
                    <div class="col-12 col-sm-9">
                        <input type="tel" class="form-control" name="phone" id="phone" value="<?php echo e(old('phone', $user->phone)); ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-12 col-sm-3 col-form-label">Correo Electrónico *</label>
                    <div class="col-12 col-sm-9">
                        <input type="text" class="form-control" name="email" id="email" value="<?php echo e(old('email', $user->email)); ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    $('form').on('submit', function(event) {
        $(event.originalEvent.submitter).attr('disabled', true);
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('user.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/member/profile.blade.php ENDPATH**/ ?>
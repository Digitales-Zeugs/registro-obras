<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-12">
            <h2>Cambio de Clave</h2>
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <p>Complete los datos obligatorios (*) para poder generar una nueva clave de acceso.</p>
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
            <form action="/user/member/password" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="name" class="col-12 col-sm-3 col-form-label">Clave Actual *</label>
                    <div class="col-12 col-sm-9">
                        <input type="password" class="form-control" name="old_password" id="old_password" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-12 col-sm-3 col-form-label">Nueva Clave *</label>
                    <div class="col-12 col-sm-9">
                        <input type="password" class="form-control" name="password" id="password" minlength="8"  required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-12 col-sm-3 col-form-label">Repetir Clave *</label>
                    <div class="col-12 col-sm-9">
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" minlength="8"  required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Cambiar Clave</button>
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

<?php echo $__env->make('user.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/user/member/password.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<p>¡Hola <?php echo e($nombre); ?>!</p>
<p>Por favor, haz click en el botón a continuación para verificar tu dirección de correo electrónico:</p>
<div class="cta">
    <a class="btn" href="<?php echo e($url); ?>">Verificar Correo Electrónico</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mails.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/mails/verify-mail.blade.php ENDPATH**/ ?>
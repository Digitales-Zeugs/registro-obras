<div class="form-group row">
    <label class="col-12 col-sm-3 col-form-label">CUIT</label>
    <div class="col-12 col-sm-3">
        <div class="form-control"><?php echo e(optional($registration->{ $type })->cuit); ?></div>
    </div>

    <label class="col-12 col-sm-2 col-form-label">Razón Social</label>
    <div class="col-12 col-sm-4">
        <div class="form-control"><?php echo e(optional($registration->{ $type })->name); ?></div>
    </div>
</div>

<div class="form-group row">
    <label class="col-12 col-sm-3 col-form-label">Domicilio</label>
    <div class="col-12 col-sm-9">
        <div class="form-control"><?php echo e(optional($registration->{ $type })->address); ?></div>
    </div>
</div>

<div class="form-group row">
    <label class="col-12 col-sm-3 col-form-label">Teléfono</label>
    <div class="col-12 col-sm-3">
        <div class="form-control"><?php echo e(optional($registration->{ $type })->phone); ?></div>
    </div>

    <label for="<?php echo e($type); ?>_email" class="col-12 col-sm-2 col-form-label">E-Mail</label>
    <div class="col-12 col-sm-4">
        <div class="form-control"><?php echo e(optional($registration->{ $type })->email); ?></div>
    </div>
</div><?php /**PATH /var/www/resources/views/components/agency-view.blade.php ENDPATH**/ ?>
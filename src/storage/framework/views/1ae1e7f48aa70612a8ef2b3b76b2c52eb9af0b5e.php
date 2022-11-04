<div class="d-flex flex-row fileUploader">
    <input type="file" class="d-none" accept="<?php echo e($exts); ?>" <?php echo e($required ? 'required' : ''); ?> />
    <input type="hidden" name="name" value="<?php echo e($name); ?>" />
    <input type="hidden" name="id" value="" />
    <button type="button" class="btn btn-sm btn-primary text-nowrap">Subir Archivo</button>
    <div class="progress flex-grow-1" style="height: 2rem">
        <div class="progress-bar progress-bar-striped text-dark" role="progressbar" style="width: 0%" aria-valuenow="0"
            aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <button type="button" class="btn btn-sm btn-danger d-none">Cancelar</button>
    <button type="button" class="btn btn-sm btn-warning d-none">Eliminar</button>
</div><?php /**PATH /var/www/resources/views/components/file-uploader.blade.php ENDPATH**/ ?>
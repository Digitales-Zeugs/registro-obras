<h3>Documentación requerida *</h3>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="lyric_file">Archivo Partitura (PDF)</label>
        <?php if (isset($component)) { $__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FileUploader::class, ['name' => 'lyric_file','required' => true]); ?>
<?php $component->withName('file-uploader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc)): ?>
<?php $component = $__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc; ?>
<?php unset($__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <small id="lyric_file_help" class="form-text text-muted">
            La partitura debe estar en formato PDF y tiene que dejar un margen en la parte superior de 5cm para poder
            agregar el membrete de SADAIC. Tamaño máximo: <?php echo e($max_size); ?>.
        </small>
    </div>

    <div class="form-group col-md-6">
        <label for="audio_file">Archivo de Audio (MP3)</label>
        <?php if (isset($component)) { $__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FileUploader::class, ['name' => 'audio_file','exts' => 'audio/mpeg','required' => true]); ?>
<?php $component->withName('file-uploader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc)): ?>
<?php $component = $__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc; ?>
<?php unset($__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <small id="audio_file_help" class="form-text text-muted">
            El archivo de audio debe estar en formato MP3 y se recomienda que la calidad sea 44.1khz a 128kbps en stereo.
            Tamaño máximo: <?php echo e($max_size); ?>.
        </small>
    </div>
</div>

<div class="form-row" id="scriptAttachment" style="display: none">
    <div class="form-group col-md-12">
        <label for="script_file">Archivo Letra (PDF)</label>
        <?php if (isset($component)) { $__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\FileUploader::class, ['name' => 'script_file','required' => true]); ?>
<?php $component->withName('file-uploader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc)): ?>
<?php $component = $__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc; ?>
<?php unset($__componentOriginal70deec61002bb2f749365ace5609610e8541cfcc); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
        <small id="script_file_help" class="form-text text-muted">
            La letra debe estar en formato PDF. Tamaño máximo: <?php echo e($max_size); ?>.
        </small>
    </div>
</div>

<table id="attachmentsTable" class="table table-striped nowrap overflow-hidden" width="100%">
    <thead>
        <tr>
            <th class="min-mobile">Descripción</th>
            <th class="min-desktop">Archivo</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
<?php /**PATH /var/www/resources/views/wizard/section-attachments.blade.php ENDPATH**/ ?>
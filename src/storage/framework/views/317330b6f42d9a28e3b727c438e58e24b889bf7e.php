<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row d-flex flex-row align-items-center">
        <div class="col col-9">
            <h2>Solicitudes de Registro de Obra</h2>
        </div>
        <div class="col col-3 text-right">
            <h3><a href="<?php echo e(url('/' . Auth::user()->type . '/work/list')); ?>">Volver</a></h3>
        </div>
    </div>
    <div class="row">
        <div class="col col-12">
            <h3>Bienvenido al sistema de registro digital para obras de música</h3>
            <p>En esta pantalla, está iniciando el trámite de ingreso de una obra musical en SADAIC.
            Complete los datos obligatorios (*) para poder generar el Boletín de Declaración que deberá presentar en la
            Institución.</p>
        </div>
    </div>
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
    <div id="generalSection">
        <div class="form-group">
            <label for="title">Título *</label>
            <input type="text" class="form-control" name="title" id="title" required value="<?php echo e($request->title); ?>">
        </div>

        <div class="form-row">
            <div class="form-group col-md-9">
                <label for="genre_id">Género *</label>
                <select class="custom-select" id="genre_id" name="genre_id" required>
                <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($genre->id == $request->genre_id): ?>
                        <option value="<?php echo e($genre->id); ?>" selected><?php echo e($genre->name); ?></option>
                    <?php else: ?>
                        <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="duration">Duración Aproximada *</label>
                <input type="text" class="form-control" name="duration" id="duration" required value="<?php echo e($request->duration); ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="title">Títulos alternativos</label><br>
            <?php $__currentLoopData = old('alternative_titles', $request->titles); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="input-group mb-3">
                <input type="text" class="form-control alternative_titles" placeholder="" name="alternative_titles[]" value="<?php echo e($title->title); ?>">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary delete_alternative_title" type="button">Borrar</button>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <button type="button" class="btn btn-primary" id="addAltTitle">Agregar títtulo alternativo</button>
        </div>

        <div class="form-group">
            <label for="dnda_title">Título Álbum *</label>
            <input type="text" class="form-control" name="dnda_title" id="dnda_title" value="<?php echo e($request->dnda_title); ?>">
        </div>

        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_jingle" value="1" <?php echo e($request->is_jingle ? 'checked' : ''); ?>>
                <label class="form-check-label" for="is_jingle">Publicidad</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="is_jingle" value="1" <?php echo e($request->is_movie ? 'checked' : ''); ?>>
                <label class="form-check-label" for="is_movie">Producción Audiovisual</label>
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="lyric_dnda_in_file">N° Expediente DNDA Inédita (Letra)</label>
                <input type="text" class="form-control" name="lyric_dnda_in_file" id="lyric_dnda_in_file" maxlength="64" value="<?php echo e($request->lyric_dnda_in_file); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="audio_dnda_in_file">N° Expediente DNDA Inédita (Musica)</label>
                <input type="text" class="form-control" name="audio_dnda_in_file" id="audio_dnda_in_file" maxlength="64" value="<?php echo e($request->audio_dnda_in_file); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="dnda_in_date">Fecha Inédita</label>
                <input type="date" placeholder="__/__/____" class="form-control" name="dnda_in_date" id="dnda_in_date" value="<?php echo e($request->dnda_in_date ? $request->dnda_in_date->format('Y-m-d') : ''); ?>" max="9999-12-31">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="lyric_dnda_ed_file">N° Expediente DNDA Editada (Letra)</label>
                <input type="text" class="form-control" name="lyric_dnda_ed_file" id="lyric_dnda_ed_file" maxlength="64" value="<?php echo e($request->lyric_dnda_ed_file); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="audio_dnda_ed_file">N° Expediente DNDA Editada (Musica)</label>
                <input type="text" class="form-control" name="audio_dnda_ed_file" id="audio_dnda_ed_file" maxlength="64" value="<?php echo e($request->audio_dnda_ed_file); ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="dnda_ed_date">Fecha Editada</label>
                <input type="date" placeholder="__/__/____" class="form-control" name="dnda_ed_date" id="dnda_ed_date" value="<?php echo e($request->dnda_ed_date ? $request->dnda_ed_date->format('Y-m-d') : ''); ?>" max="9999-12-31">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <?php echo $__env->make('wizard.section-people', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col col-12">
            <?php echo $__env->make('wizard.section-attachments', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>

    <?php if(Auth::user()->type == 'user'): ?>
    <div class="row">
        <div class="col col-12 text-center">
            <div class="form-check form-check-inline mb-4">
                <input class="form-check-input" type="checkbox" value="1" name="do_ri" id="do_ri" <?php echo e(old('do_ri', '0') == 1 ? 'checked' : ''); ?>>
                <label class="form-check-label" for="do_ri">
                    Iniciar también Solicitud de Ingreso de Responsable Inscripto
                </label>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row">
        <div class="col col-6 text-center">
            <button class="btn btn-secondary" id="saveRegister">Guardar solicitud</button>
        </div>
        <div class="col col-6 text-center">
            <button class="btn btn-primary" id="sendRegister">Enviar solicitud a SADAIC</button>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<style>
#memberSearchResults {
    padding-bottom: 1em;
}

#addAuthorModal .tab-content {
  overflow-y: auto;
}

#memberSearchResults ul {
    list-style-type: ' - ';
}

.capitalize {
    text-transform: capitalize;
}

#addAuthorModal .modal-content {
    min-height: 300px;
}

#memberSearchForm {
    height: 100px;
}

.tab-pane {
    padding-top: 1em;
    padding-bottom: 1em;
}

#distributionTable td {
    vertical-align: middle;
}

#distributionTable thead th {
    border-top: none;
}

input.amount {
    width: 5em;
}

.row + .row {
    margin-top: 2rem;
}

h2 {
    margin-top: 2rem;
}

hr {
    margin-top: 0;
}

.dtr-details {
    width: 100%;
}

#distributionTable input[class$="Amount"] {
    width: auto;
    max-width: 100px;
}

#addPersonTabsContent {
    overflow-y: auto;
}

#attachmentsTable_wrapper thead {
    display: none;
}

#attachmentsTable_wrapper td {
    width: 100%;
}

@media (min-width: 576px) {
    #attachmentsTable_wrapper thead {
        display: table-header-group;
    }

    #attachmentsTable_wrapper td {
        width: 50%;
    }
}
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
window.maxFileUploadSize = <?php echo e($max_size_b); ?>;
window.maxFileUploadSizeFormatted = '<?php echo e($max_size); ?>';
</script>
<script src="<?php echo e(asset('/js/work.register.js')); ?>"></script>
<script src="<?php echo e(asset('/js/file.uploader.js')); ?>"></script>
<script src="<?php echo e(asset('/js/city.selector.js')); ?>"></script>
<script>
    window.roleOptions = <?php echo json_encode($roles); ?>

    window.citiesOptions = <?php echo json_encode($cities); ?>

</script>
<script>
customStorage.setField('registration_id', <?php echo e($request->id); ?>);
<?php if(isset($request->genre_id)): ?>
    customStorage.setField('genre_id', <?php echo e($request->genre_id); ?>);
<?php else: ?>
    customStorage.setField('genre_id', parseInt($('#genre_id').val()));
<?php endif; ?>
<?php if(isset($request->title)): ?>
    customStorage.setField('title', '<?php echo e($request->title); ?>');
<?php endif; ?>
<?php if(isset($request->dnda_title)): ?>
    customStorage.setField('dnda_title', '<?php echo e($request->dnda_title); ?>');
<?php endif; ?>
<?php if(isset($request->duration)): ?>
    customStorage.setField('duration', '<?php echo e($request->duration); ?>');
<?php endif; ?>
<?php if(isset($request->dnda_ed_date)): ?>
    customStorage.setField('dnda_ed_date', '<?php echo e($request->dnda_ed_date->format('Y-m-d')); ?>');
<?php endif; ?>
<?php if(isset($request->audio_dnda_ed_file)): ?>
    customStorage.setField('audio_dnda_ed_file', '<?php echo e($request->audio_dnda_ed_file); ?>');
<?php endif; ?>
<?php if(isset($request->lyric_dnda_ed_file)): ?>
    customStorage.setField('lyric_dnda_ed_file', '<?php echo e($request->lyric_dnda_ed_file); ?>');
<?php endif; ?>
<?php if(isset($request->dnda_in_date)): ?>
    customStorage.setField('dnda_in_date', '<?php echo e($request->dnda_in_date->format('Y-m-d')); ?>');
<?php endif; ?>
<?php if(isset($request->audio_dnda_in_file)): ?>
    customStorage.setField('audio_dnda_in_file', '<?php echo e($request->audio_dnda_in_file); ?>');
<?php endif; ?>
<?php if(isset($request->lyric_dnda_in_file)): ?>
    customStorage.setField('lyric_dnda_in_file', '<?php echo e($request->lyric_dnda_in_file); ?>');
<?php endif; ?>

<?php if(isset($distribution)): ?>
    <?php $__currentLoopData = $distribution; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $current): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    customStorage.addPerson({
        distribution_id: <?php echo e($current->id); ?>,
        type: '<?php echo e($current->type); ?>',
        <?php if($current->fn): ?>
        fn: '<?php echo e($current->fn); ?>',
        <?php endif; ?>
        <?php if($current->type == 'member'): ?>
        member_id: '<?php echo e($current->member_id); ?>',
        <?php endif; ?>
        doc_number: '<?php echo e($current->doc_number); ?>',
        public: <?php echo e($current->public); ?>,
        mechanic: <?php echo e($current->mechanic); ?>,
        sync: <?php echo e($current->sync); ?>,
        <?php if($current->type == 'no-member'): ?>
        <?php if($current->meta->address_country_id): ?>
        address_country_id: '<?php echo e($current->meta->address_country_id); ?>',
        <?php endif; ?>
        <?php if($current->meta->address_state_id): ?>
        address_state_id: <?php echo e($current->meta->address_state_id); ?>,
        <?php endif; ?>
        <?php if($current->meta->address_state_text): ?>
        address_state_text: '<?php echo e($current->meta->address_state_text); ?>',
        <?php endif; ?>
        <?php if($current->meta->address_city_id): ?>
        address_city_id: <?php echo e($current->meta->address_city_id); ?>,
        <?php endif; ?>
        <?php if($current->meta->address_city_text): ?>
        address_city_text: '<?php echo e($current->meta->address_city_text); ?>',
        <?php endif; ?>
        address_zip: '<?php echo e($current->meta->address_zip); ?>',
        apartment: '<?php echo e($current->meta->apartment); ?>',
        birth_country_id: '<?php echo e($current->meta->birth_country_id); ?>',
        birth_date: '<?php echo e($current->meta->birth_date); ?>',
        doc_type: '<?php echo e($current->meta->doc_type); ?>',
        email: '<?php echo e($current->meta->email); ?>',
        floor: '<?php echo e($current->meta->floor); ?>',
        name: '<?php echo e($current->meta->name); ?>',
        phone_area: '<?php echo e($current->meta->phone_area); ?>',
        phone_country: '<?php echo e($current->meta->phone_country); ?>',
        phone_number: '<?php echo e($current->meta->phone_number); ?>',
        street_name: '<?php echo e($current->meta->street_name); ?>',
        street_number: '<?php echo e($current->meta->street_number); ?>',
        <?php endif; ?>
    });

    $distributionTable.row.add([
        <?php if($current->fn != -1): ?>
        selectFn('fn', false, "<?php echo e($current->fn); ?>"),
        <?php else: ?>
        selectFn('fn', true),
        <?php endif; ?>
        '<?php echo e($current->type == 'member' ? $current->member_id : ''); ?>',
        '<span class="capitalize"><?php echo e($current->type == 'member' ? ucwords(strtolower(optional($current->member)->nombre)) : optional($current->meta)->name); ?></span>',
        '<?php echo e($current->doc_number); ?>',
        '<input type="number" class="form-control publicAmount" name="public" step="0.01" min="0" max="100" value="<?php echo e($current->public); ?>">',
        '<input type="number" class="form-control mechanicAmount" name="mechanic" step="0.01" min="0" max="100" value="<?php echo e($current->mechanic); ?>">',
        '<input type="number" class="form-control syncAmount" name="sync" step="0.01" min="0" max="100" value="<?php echo e($current->sync); ?>">',
        '<button class="btn btn-link removePerson"><i class="far fa-trash-alt"></i></button>',
        '<?php echo $current->type == 'no-member' ? '<button class="btn btn-link editPerson" data-toggle="modal" data-target="#editPersonModal"><i class="far fa-edit"></i></button>' : ''; ?>'
    ]).draw();
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    updateTotal();

    // Generamos los pedidos de archivos relacionados con las funciones
    $('#distributionTable .fn').change();
    $('#lyric_dnda_in_file').change();

    <?php $__currentLoopData = $distribution; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $current): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($current->type == 'no-member'): ?>
        addFileRequest(
            'file_no-member_doc',
            'Documento de <strong><?php echo e($current->meta->name); ?></strong>',
            'image/png, image/jpeg, application/pdf',
            { doc_number: '<?php echo e($current->doc_number); ?>' }
        );

        <?php if($file = $current->getFile('file_no-member_doc')): ?>
        setFileUploaderFile(
            $('input[value="<?php echo e($current->doc_number); ?>"]').parent().find('input[value="member_doc"]').parent(),
            {
                id: '<?php echo e($file->id); ?>',
                name: '<?php echo e($file->name); ?>',
                path: '<?php echo e($file->path); ?>'
            }
        );
        <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php $__currentLoopData = $request->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($file->distribution_id): ?> // Archivos de la distribución
        setFileUploaderFile(
            $('input[value="<?php echo e($file->distribution->doc_number); ?>"]').parent().find('input[value="<?php echo e($file->name); ?>"]').parent(),
            {
                id: '<?php echo e($file->id); ?>',
                name: '<?php echo e($file->name); ?>',
                path: '<?php echo e($file->path); ?>',
                distribution_id: <?php echo e($file->distribution_id); ?>

            }
        );
        <?php elseif($file->name == 'file_dnda_contract'): ?> // Archivos condicionales del registro
        setFileUploaderFile(
            $('input[value="file_dnda_contract"]').parent(),
            {
                id: '<?php echo e($file->id); ?>',
                name: '<?php echo e($file->name); ?>',
                path: '<?php echo e($file->path); ?>'
            }
        );
        <?php elseif(in_array($file->name, ['lyric_file', 'audio_file', 'script_file'])): ?> // Archivos del registro
        setFileUploaderFile(
            $('input[value="<?php echo e($file->name); ?>"]').parent(),
            {
                id: '<?php echo e($file->id); ?>',
                name: '<?php echo e($file->name); ?>',
                path: '<?php echo e($file->path); ?>'
            }
        );
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>

<?php
$has_author = $distribution->first(function($value) {
    if ($value->fn == 'A' || $value->fn == 'CA') {
        return true;
    }
});
?>
    $('#scriptAttachment').show();
    $('#scriptAttachment input[type="file"]').prop('disabled', false);
<?php if($has_author): ?>
<?php else: ?>
    $('#scriptAttachment input[type="file"]').prop('disabled', true);
<?php endif; ?>
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make(Auth::user()->type . '.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/work/edit.blade.php ENDPATH**/ ?>
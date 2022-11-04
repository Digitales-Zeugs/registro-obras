<div class="form-group">
    <label for="title">Título *</label>
    <input type="text" class="form-control" name="title" id="title" required>
</div>

<div class="form-row">
    <div class="form-group col-md-9">
        <label for="genre_id">Género *</label>
        <select class="custom-select" id="genre_id" name="genre_id" required>
            <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($genre->id); ?>"><?php echo e($genre->name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="form-group col-md-3">
        <label for="duration">Duración Aproximada *</label>
        <input type="text" class="form-control" name="duration" id="duration" required>
    </div>
</div>

<div class="form-group">
    <label for="title">Títulos alternativos</label><br>
    <?php $__currentLoopData = old('alternative_titles', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="input-group mb-3">
        <input type="text" class="form-control alternative_titles" placeholder="" name="alternative_titles[]" value="<?php echo e($title); ?>">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary delete_alternative_title" type="button">Borrar</button>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <button type="button" class="btn btn-primary" id="addAltTitle">Agregar títtulo alternativo</button>
</div>

<div class="form-group">
    <label for="dnda_title">Título Álbum *</label>
    <input type="text" class="form-control" name="dnda_title" id="dnda_title" value="<?php echo e(old('dnda_title')); ?>">
</div>


<div class="form-group">
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_jingle" value="1" <?php echo e(old('is_jingle') ? 'checked' : ''); ?>>
        <label class="form-check-label" for="is_jingle">Publicidad</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="is_jingle" value="2" <?php echo e(old('is_movie') ? 'checked' : ''); ?>>
        <label class="form-check-label" for="is_movie">Producción Audiovisual</label>
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="lyric_dnda_in_file">N° Expediente DNDA Inédita (Letra)</label>
        <input type="text" class="form-control" name="lyric_dnda_in_file" id="lyric_dnda_in_file" maxlength="64">
    </div>
    <div class="form-group col-md-4">
        <label for="audio_dnda_in_file">N° Expediente DNDA Inédita (Musica)</label>
        <input type="text" class="form-control" name="audio_dnda_in_file" id="audio_dnda_in_file" maxlength="64">
    </div>
    <div class="form-group col-md-4">
        <label for="dnda_in_date">Fecha Inédita</label>
        <input type="date" placeholder="__/__/____" class="form-control" name="dnda_in_date" id="dnda_in_date" max="9999-12-31">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="lyric_dnda_ed_file">N° Expediente DNDA Editada (Letra)</label>
        <input type="text" class="form-control" name="lyric_dnda_ed_file" id="lyric_dnda_ed_file" maxlength="64">
    </div>
    <div class="form-group col-md-4">
        <label for="audio_dnda_ed_file">N° Expediente DNDA Editada (Musica)</label>
        <input type="text" class="form-control" name="audio_dnda_ed_file" id="audio_dnda_ed_file" maxlength="64">
    </div>
    <div class="form-group col-md-4">
        <label for="dnda_ed_date">Fecha Editada</label>
        <input type="date" placeholder="__/__/____" class="form-control" name="dnda_ed_date" id="dnda_ed_date" max="9999-12-31">
    </div>
</div>
<?php /**PATH /var/www/resources/views/wizard/section-general.blade.php ENDPATH**/ ?>
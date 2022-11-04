<div class="row">
    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Datos del Solicitante</label>
        <?php echo $__env->make('components.agency-view', ['type' => 'applicant'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Datos del Anunciante</label>
        <?php echo $__env->make('components.agency-view', ['type' => 'advertiser'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Tipo de solicitud</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Tipo</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->is_special ? 'Campaña Especial' : 'Regular'); ?> - <?php echo e($registration->request_action); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Vigencia en Meses</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->validity); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Fecha de Salida al Aire</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->air_date->format('d/m/Y')); ?></div>
            </div>
        </div>
        <?php if($registration->is_special): ?>
        <label class="col-12 col-form-label font-weight-bold">Campaña Especial</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Cantidad de Avisos</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e(count($registration->ads_duration)); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Duración de los Avisos</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php $__currentLoopData = $registration->ads_duration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $duration): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Aviso <?php echo e($loop->iteration); ?>: <?php echo e($duration); ?>s
                    <?php if(!$loop->last): ?> , <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></div>
            </div>
        </div>
        <?php else: ?>
        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Duración en Segundos</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->ads_duration[0]); ?>s</div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Características del Aviso Publicitario</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Territorio de Difusión</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->broadcast_territory); ?></div>
            </div>
        </div>

        <?php if($registration->broadcast_territory_id == 2): ?>
        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Detalle Provincias</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->territories->implode('state', ', ')); ?></div>
            </div>
        </div>
        <?php elseif($registration->broadcast_territory_id == 3): ?>
        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Detalle de Paises</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->territories->implode('name_ter', ', ')); ?></div>
            </div>
        </div>
        <?php endif; ?>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Medios de Comunicación</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label"><?php echo e($registration->media->name); ?></label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->media->description); ?></div>
            </div>
        </div>
    </div>

    <?php if($registration->agency->cuit && $registration->agency->name): ?>
    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Datos de la Agencia</label>
        <?php echo $__env->make('components.agency-view', ['type' => 'agency'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php endif; ?>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Datos del Producto</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Marca</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->product_brand); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Característica y Tipo</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->product_type); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Identicación y Nombre</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->product_name); ?></div>
            </div>
        </div>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Datos de la Obra</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Título</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_title); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Original</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_original ? 'Si' : 'No'); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">DNDA</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_dnda); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Autores</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_authors); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Compositores</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_composers); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Editores</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_editors); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Letra Modificada</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_script_mod ? 'Si' : 'No'); ?></div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Música Modificada</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->work_music_mod ? 'Si' : 'No'); ?></div>
            </div>
        </div>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Conformidad de los Autores</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Conformidad de los Autores</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->authors_agreement ? 'Si' : 'No'); ?></div>
            </div>
        </div>

        <?php if($registration->authors_agreement): ?>
            <?php $__currentLoopData = $registration->agreements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $person): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="form-group row">
                <?php if($person->type_id == 1): ?>
                <label class="col-12 col-sm-3 col-form-label"><?php echo e($person->member->nombre); ?></label>
                <div class="col-12 col-sm-9">
                    <div class="form-control">
                        <strong>N° de Documento:</strong> <?php echo e($person->doc_number); ?><br>
                        <strong>Correo electrónico:</strong> <?php echo e($person->member->email); ?><br>
                    </div>
                </div>
                <?php else: ?>
                <label class="col-12 col-sm-3 col-form-label"><?php echo e($person->meta->name); ?></label>
                <div class="col-12 col-sm-9">
                    <div class="form-control">
                        <strong>Nacimiento:</strong> <?php echo e($person->meta->birth_date->format('d/m/Y')); ?>, <?php echo e($person->meta->birth_country->name_ter); ?><br>
                        <strong>Dirección:</strong> <?php echo e($person->meta->full_address); ?><br>
                        <strong>Correo electrónico:</strong> <a href="mailto:<?php echo e($person->meta->email); ?>"><?php echo e($person->meta->email); ?></a><br>
                        <strong>Teléfono:</strong> <?php echo e($person->meta->full_phone); ?><br>
                        <strong>Respuesta:</strong>
                        <?php if($person->response === null): ?>
                            Sin Respuesta
                        <?php elseif($person->response === 0): ?>
                            Rechazado
                        <?php elseif($distribution->response === 1): ?>
                            Aceptado
                        <?php endif; ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Arancel</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Monto</label>
            <div class="col-12 col-sm-9">
                <div class="form-control">$ <?php echo e(number_format($registration->authors_tariff, 2)); ?></div>
            </div>
        </div>
    </div>

    <div class="col col-12">
        <label class="col-12 col-form-label font-weight-bold">Persona física o jurídica que abona el derecho de autor</label>

        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">Persona</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->tariff_payer); ?></div>
            </div>
        </div>

        <?php if($registration->tariff_payer_id == 3): ?>
        <div class="form-group row">
            <label class="col-12 col-sm-3 col-form-label">A cuenta y orden de</label>
            <div class="col-12 col-sm-9">
                <div class="form-control"><?php echo e($registration->tariff_representation); ?></div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php $__env->startPush('styles'); ?>
<style>
.form-control {
    border: none;
    border-radius: 0;
    border-bottom: solid 1px #ccc;
}

label.font-weight-bold {
    font-size: 1.25rem;
    padding: 1rem 0;
}
</style>
<?php $__env->stopPush(); ?><?php /**PATH /var/www/resources/views/components/jingle-view.blade.php ENDPATH**/ ?>
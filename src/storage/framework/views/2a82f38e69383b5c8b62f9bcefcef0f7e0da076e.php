<div class="modal fade" id="addPersonModal" tabindex="-1" aria-labelledby="addPersonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addPersonModalLabel">Agregar Persona al Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="nav nav-tabs nav-fill" id="addPersonTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="member-tab" data-toggle="tab" href="#member" role="tab"
                        aria-controls="member" aria-selected="true">Socio</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="no-member-tab" data-toggle="tab" href="#no-member" role="tab"
                        aria-controls="no-member" aria-selected="false">No Socio</a>
                </li>
            </ul>
            <div class="tab-content" id="addPersonTabsContent">
                <div class="tab-pane fade show active" id="member" role="tabpanel" aria-labelledby="member-tab">
                    <?php echo $__env->make('wizard.members', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="tab-pane fade" id="no-member" role="tabpanel" aria-labelledby="no-member-tab">
                    <?php echo $__env->make('wizard.no-members', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editPersonModal" tabindex="-1" aria-labelledby="editPersonModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPersonModalLabel">Editar Persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $__env->make('wizard.no-members', ['edit' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /var/www/resources/views/jingles/people.blade.php ENDPATH**/ ?>
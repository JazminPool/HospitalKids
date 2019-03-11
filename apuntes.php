<!-- Modal update -->
<?php $objShowToUpdate = $obj->showToUpdate(isset($_POST['id_date']));
        foreach ($objshow as $cols) { ?>
            <!-- modal add Date -->
                <div class="modal fade" id="editDate<?= $cols['id_date'] ?>" tabindex="-1" role="dialog" aria-labelledby="addDateLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div class="container mb-4 mt-3">
                                    <div class="row justify-content-center">
                                        <h3>Editar cita</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <form action="" method="post" id="formUpdate">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                                            </div>
                                            <input type="text" name="doctorinputUpdate" id="doctorinputUpdate" class="form-control f600" required placeholder="Nombre del Médico"
                                                value="<?=utf8_encode($cols['doctor']); ?>">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                                            </div>
                                            <input type="time" name="timeinputUpdate" id="timeinputUpdate" class="form-control f600" required
                                            value="<?= $cols['time']; ?>">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-day"></i></span>
                                            </div>
                                            <input type="date" name="dateinputUpdate" id="dateinputUpdate" class="form-control f600" required
                                                value="<?= $cols['date'] ?>">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                            </div>
                                            <input type="text" name="comentinputUpdate" id="comentinputUpdate" class="form-control f600" placeholder="Comentario"
                                             value="<?= utf8_encode($cols['comentarios']); ?>">
                                        </div>
                                    </form>
                                </div><!-- end col -->
                            </div><!-- end modal body -->
                            <div class="modal-footer">
                                <span id="loadingUpdate"></span>
                                <button type="button" id="btnUpdate" class="btn btn-info"><i class="fas fa-calendar-day"></i> Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            </div><!-- end modal footer -->
                        </div><!-- end modal content-->
                    </div>
                </div><!-- end modal -->
            <!-- end modal date -->
        <?php } ?>
    <!-- end modal update -->
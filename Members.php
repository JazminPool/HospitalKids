<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>St.Bear | Agendar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include('js.php'); include('css.php'); include('crud.php'); 
        $crud = new metodoscrud(); 
        $nameUser[] = $crud->nameuser($_SESSION['userSession']); //obtiene nombre de usuario de la sesion
    ?>
</head>
<body>
    <?php include('components/nav.php'); ?>
    <div class="banmembers">
        <div class="container">
            <div class="row pt-4 justify-content-start">
                <h1 class="fMuli f600"><?= utf8_encode($nameUser[0][0]) ?> / Mis citas</h1>
            </div>
            <div class="row">
                <p class="fMuli"><strong>[<?=$nameUser[0][1]  ?>]</strong></p>
            </div>
        </div>
    </div><!-- end banner -->
    <br>
    <div class="container pt-2 pb-5 mb-5">
        <div class="row p-2 m-2 justify-content-center align-items-center">
            <a class="brand mr-5" href="Home.php">
                <img src="src/img/bear.png" width="50" height="50" class="d-inline-block align-center mr-2">
                Inicio
            </a> 
            <button type="button" title="Agendar nueva cita" class="btn f600 fMuli btn-sm btn_main mr-5" data-toggle="modal" data-target="#addDatemodal">
                <i class="fal fa-calendar-plus"></i> Agendar nueva cita</button>
            <!-- <button type="button" class="btn btn-sm btn_round mr-5 btn_view" title="Cambiar vista"><i class="fas fa-grip-horizontal"></i></button>
            <button type="button" class="btn btn-sm btn_round mr-5 btn_view" title="Cambiar vista"><i class="fas fa-table"></i></button> -->
            <form action="gets.php" method="post">
                <button type="submit" name="btn_action" value="logout" title="Cerrar sesión" class="btn btn-sm f600 fMuli  btn_sec mr-5">
                    <i class="far fa-sign-out"></i> Cerrar sesión</button>
            </form>
        </div><!-- end row btns -->

        <div class="row">
            <div class="col-lg-12" id="content_table">
                <table class="table fMuli text-center table-responsive-md" id="dates">
                    <thead class="table_color">
                        <tr>
                            <th scope="col"><i class="far fa-calendar-day mr-1"></i> Fecha agendada</th>
                            <th scope="col"><i class="far fa-clock mr-1"></i> Hora</th>
                            <th scope="col"><i class="fas fa-user-md mr-1"></i> Doctor</th>
                            <th scope="col"><i class="fas fa-sticky-note mr-1"></i> Comentarios</th>
                            <th scope="col"><i class="fas fa-bookmark mr-1"></i> Estado</th>
                            <th scope="col"><i class="fas fa-cogs mr-1"></i> Action</th>
                        </tr>
                    </thead>
                    <?php
                        //mostrar datos
                        $obj = new metodoscrud(); //clase
                        $objshow = $obj->showDates($obj->iduser($_SESSION['userSession'])); //metodo
                        foreach ($objshow as $cols) {
                            if($cols['status']!=0){ $status_color ="tbody_active"; $btn_status = ""; }
                                    else{ $status_color ="tbody_disable"; $btn_status = "disabled"; } 
                    ?>
                    <tbody class="<?= $status_color ?>">
                        
                            <tr id="<?= $cols['id_date']; ?>">
                                <td data-target="date"><?= utf8_encode(strftime("%A, %d de %B, %G", strtotime($cols['date']))); ?></td>
                                <td data-target="time"><?= $cols['time']; ?></td>
                                <td data-target="doctor"><?= utf8_encode($cols['doctor']); ?></td>
                                <td data-target="comentarios"><?= utf8_encode($cols['comentarios']); ?></td>
                                <td data-target="status">
                                    <?php 
                                        if($cols['status']!=0){ echo "<span class='badge badg_confirm'> <i class='fas fa-check-circle mr-1'></i> Confirmada</span>"; }
                                        else{ echo "<span class='badge badg_cancel'><i class='fas fa-ban mr-1'></i> Cancelada</span>"; } 
                                    ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn_round btn-sm btn_edit" 
                                        title="Editar cita" data-role="updateDate" <?=$btn_status?> data-id="<?= $cols['id_date'] ?>">
                                            <i class="far fa-calendar-edit"></i>
                                    </button>
                                    <!-- concatenar en target + idcita -->
                                    <button type="button" class="btn btn_round btn-sm btn_cancel" 
                                        title="Cancelar cita" data-role="deleteDate" <?=$btn_status?>  data-id="<?= $cols['id_date'] ?>">
                                            <i class="far fa-calendar-times"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- end col table -->
        </div><!-- end row -->
    </div><!-- end container -->
    <br>

    <!-- modales area -->
        <!-- Modal add -->
            <form action="" method="post" id="form_addDate">
                <!-- modal add Date -->
                    <div class="modal fade" id="addDatemodal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="addDateLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="container mb-4 mt-3">
                                        <div class="row justify-content-center  mt-2 mb-0">
                                            <img src="src/img/bear.png" width="100" height="100" class="d-inline-block align-center" alt="">
                                        </div>                                        
                                        <div class="row justify-content-center mt-2 mb-0 f700 fMuli">
                                            <a class="navbar-brand f22 color_main">
                                                    St. Bear Agendar
                                            </a>
                                            <span class="subtitle_color">Agenda una nueva cita, llena el formulario.</span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="nameDoctor"><i class="fas fa-user-md"></i></span>
                                            </div>
                                            <input type="text" name="doctorinput" id="doctorinput" class="form-control f600" required placeholder="Nombre del Médico" aria-label="Username" aria-describedby="nameDoctor">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="time"><i class="far fa-clock"></i></span>
                                            </div>
                                            <input type="time" name="timeinput" id="timeinput" class="form-control f600" required aria-describedby="time">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="time"><i class="far fa-calendar-day"></i></span>
                                            </div>
                                            <input type="date" name="dateinput" id="dateinput" class="form-control f600" required aria-describedby="time">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                            </div>
                                            <input type="text" class="form-control f600" name="comentinput" id="comentinput" aria-label="Note" placeholder="Añadir un comentario">
                                        </div>
                                        <button class="btn btn-sm mt-3 ml-1 mb-1 right btn_clean" id="clean" title="Limpiar campos"><i class="fas fa-eraser"></i> Limpiar campos</button>
                                    </div><!-- end col -->
                                </div><!-- end modal body -->
                                <div class="modal-footer">
                                    <span id="loading"></span>
                                    <!-- <button type="submit" name="btn_action" value="addDate" class="btn btn-info"><i class="fas fa-calendar-day"></i> Agendar</button> -->
                                    <button type="button" id="btn_addDate" class="btn btn_main fMuli f500"><i class="far fa-calendar-day"></i> Agendar cita</button>
                                    <button type="button" class="btn btn_sec fMuli" data-dismiss="modal">Cancelar</button>
                                </div><!-- end modal footer -->
                            </div><!-- end modal content-->
                        </div>
                    </div><!-- end modal -->
                <!-- end modal date -->
            </form>
        <!-- end modal add -->

        <!-- modal eliminar -->
            <?php foreach ($objshow as $cols) { ?>
                <div class="modal fade" id="ModalcancelDate" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content modal_alert">
                            <div class="alert alert-danger" role="alert">
                                <div class="row pt-2 mt-2 pb-3">
                                    <div class="col-md-11">
                                        <h5><i class="far fa-exclamation-triangle"></i> ¿Seguro que deseas cancelar esta cita?</h5>
                                        <p class="ml-2 mb-1"> Esta acción por el momento no podrá revertirse</p>
                                        <span class="ml-2" style="inline-block"><i class="fas fa-calendar-day"></i>  Cita: <input style="inline-block" type="text" id="datetoCancel" disabled class="form-control input_cancel">
                                            <!-- <strong><= strftime("%A, %d de %B, %G", strtotime($cols['date'])); ?>.</strong> -->
                                        </span>
                                    </div>
                                    <div class="col-md-1">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
                                    </div>
                                </div>
                                <div class="row justify-content-end">
                                    <div class="col-md-3 mr-3">
                                        <button type="button" id="btnCancel" class="btn btn-danger btn-sm"><i class="fal fa-calendar-times"></i> Si, cancelar cita</button>
                                    </div>
                                    <div class="col-md-2 mr-3">
                                        <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">No, cerrar</button>
                                    </div>
                                </div>
                                <input type="hidden" id="idDateCancel" value="<?= $cols['id_date']?>">
                            </div>
                        </div>
                    </div><!-- end modal content -->
                </div><!-- end modal -->
            <?php } ?>
        <!-- end modal eliminar -->

        <!-- Modal update -->
            <div class="modal fade" id="ModalUpdateDate" tabindex="-1" data-backdrop="static" data-keyboard="false" role="dialog" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="container mb-4 mt-3">
                                <div class="row justify-content-center  mt-2 mb-0">
                                    <img src="src/img/bear.png" width="100" height="100" class="d-inline-block align-center" alt="">
                                </div>                                        
                                <div class="row justify-content-center mt-2 mb-0 f700 fMuli">
                                    <a class="navbar-brand f22 color_main">
                                            St. Bear Modificar
                                    </a>
                                    <span class="subtitle_color">Modifica una cita ya existente con el formulario.</span>
                                </div>
                            </div>
                            <div class="col">
                                <!-- <form action="" method="post" id="formUpdate"> -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-user-md"></i></span>
                                        </div>
                                        <input type="text" id="doctorUpdate" class="form-control f600" required placeholder="Nombre del Médico">
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                        <input type="time" id="timeUpdate" class="form-control f600" required>
                                    </div>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-day"></i></span>
                                        </div>
                                        <input type="date" id="dateUpdate" class="form-control f600" required>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                        </div>
                                        <input type="text" id="comentUpdate" class="form-control f600" placeholder="Comentario">
                                    </div>
                                    <input type="hidden" id="idDate" value="<?= $cols['id_date']?>">
                                <!-- </form> -->
                            </div><!-- end col -->
                        </div><!-- end modal body -->
                        <div class="modal-footer">
                            <span id="loadingUpdate"></span>
                            <button type="button" id="btnUpdate" class="btn btn_main fMuli"><i class="far fa-calendar-check"></i> Guardar cambios</button>
                            <button type="button" class="btn btn_sec fMuli" data-dismiss="modal">Cancelar</button>
                        </div><!-- end modal footer -->
                    </div><!-- end modal content-->
                </div>
            </div><!-- end modal -->
        <!-- end modal update -->
    <!-- end modales -->



    
    <?php include('components/footer.php'); ?>
</body>
    
    <!-- scripts area -->
        <!-- script add -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#btn_addDate').click(function(){
                        var datos = $('#form_addDate').serialize();
                        //console.log(datos);

                        $.ajax({
                            type: "POST",
                            data: datos,
                            url: "actions/addDate.php",
                            beforeSend: function () {
                                $('#loading').html("<i class='fas fa-spinner fa-spin'></i>");
                            },
                            success: function(r){
                                if (r) {
                                    $.notify({
                                        icon: 'far fa-calendar-check',
                                        message: "Cita agendada con exito."
                                    });
                                    $('#content_table').load('Members.php #dates');
                                    
                                //$('#form_addDate').modal('toggle');
                                }else{
                                    $.notify("<strong>No se pudo agregar</strong>", {
                                        animate: {
                                            enter: 'animated bounceIn',
                                            exit: 'animated bounceOut'
                                        }
                                    });
                                    console.log("no "+r);
                                }
                            }
                        });            
                    });
                });


            </script>
        <!-- end script add -->

        <!-- script update -->
            <script type="text/javascript">
                $(document).ready(function(){
                    //put the values on my inputs xD
                    $(document).on('click', 'button[data-role=updateDate]', function(){
                        var idDate = $(this).data('id');
                        var date = $('#'+idDate).children('td[data-target=date]').text();
                        var time = $('#'+idDate).children('td[data-target=time]').text();
                        var doctor = $('#'+idDate).children('td[data-target=doctor]').text();
                        var comentarios = $('#'+idDate).children('td[data-target=comentarios]').text();

                        $('#dateUpdate').val(date);
                        $('#timeUpdate').val(time);
                        $('#doctorUpdate').val(doctor);
                        $('#comentUpdate').val(comentarios);
                        $('#idDate').val(idDate);

                        $('#ModalUpdateDate').modal('toggle');
                    });
                    //Update date event
                    $('#btnUpdate').click(function(){
                        var idDate = $('#idDate').val();
                        var date = $('#dateUpdate').val();
                        var time = $('#timeUpdate').val();
                        var doctor = $('#doctorUpdate').val();
                        var comentarios = $('#comentUpdate').val();

                        $.ajax({
                            type: "POST",
                            data: {
                                    //variable  : //var que tiene el valor mediante id
                                    idDate      : idDate,
                                    date        : date,
                                    time        : time,
                                    doctor      : doctor,
                                    comentarios : comentarios
                                },
                            url: "actions/updateDate.php",
                            success : function(response){
                                $('#'+idDate).children('td[data-target=date]').text(date);
                                $('#'+idDate).children('td[data-target=time]').text(time);
                                $('#'+idDate).children('td[data-target=doctor]').text(doctor);
                                $('#'+idDate).children('td[data-target=comentarios]').text(comentarios);

                                $('#ModalUpdateDate').modal('toggle');

                                $.notify("<strong>Se ha editado la cita correctamente</strong>", {
                                        animate: {
                                            enter: 'animated fadeInRight',
                                            exit: 'animated fadeOutRight'
                                        }
                                    });
                            }
                            
                        });
                    });

                });
            </script>
        <!-- end script update -->

        <!-- script cancel -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $(document).on('click', 'button[data-role=deleteDate]', function(){
                        var idDate = $(this).data('id');
                        var date = $('#'+idDate).children('td[data-target=date]').text();
                        var status = $('#'+idDate).children('td[data-target=status]').text();

                        $('#datetoCancel').val(date);

                        $('#ModalcancelDate').modal('toggle');
                    });

                    $('#btnCancel').click(function(){
                        var idDate = $('#idDateCancel').val();
                        // var status = $('#status').val();

                        $.ajax({
                            type: "POST",
                            data: {
                                    idDate : idDate
                                },
                            url: "actions/deleteDate.php",
                            success : function (response) {
                                // if(response){
                                    // $('#'+idDate).children('td[data-target=status]').text(status);
                                    $('#ModalcancelDate').modal('toggle');

                                    $.notify("<strong>Se ha cancelado la cita correctamente "+ idDate +" </strong>", {
                                            animate: {
                                                enter: 'animated fadeInRight',
                                                exit: 'animated fadeOutRight'
                                            }
                                        });
                                // }

                            }
                        });
                    });
                });
            </script>
        <!-- end script cancel -->

        <!-- script clean -->
            <script>
                $("#clean").on("click", function(){
                    $("#doctorinput").val("");
                    $("#timeinput").val("");
                    $("#dateinput").val("");
                    $("#comentinput").val("");
                });
            </script>
        <!-- end clean -->
        
        <!-- script datatable -->
            <script type="text/javascript">
                $(document).ready(function(){
                    $('#dates').DataTable({
                        responsive: true
                    });
                    
                });
            </script>
        <!-- end script datatable -->
    <!-- end scripts -->


</html>
<?php
    include('../crud.php');
    $crud = new metodoscrud();
    // orden #$id_date, $date, $time, $doctor, $coment
    //los valores que recibe post son los que se declararon en el data!!
    if(isset($_POST['date'])){
        $crud->updateDates($_POST['idDate'],$_POST['date'],$_POST['time'],$_POST['doctor'],$_POST['comentarios']);
    }

?>
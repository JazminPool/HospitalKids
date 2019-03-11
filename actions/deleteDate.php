<?php
    include('../crud.php');

    $crud = new metodoscrud();

    #$id_date, $status
    if(isset($_POST['idDate'])){
        $crud->cancelDate($_POST['idDate']);
    }
    

?>
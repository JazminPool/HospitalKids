<?php
    session_start();
    include('../crud.php');

    $crud = new metodoscrud();
    $idus = $crud->iduser($_SESSION['userSession']);

    $crud->addDates($idus, $_POST['dateinput'], $_POST['timeinput'], 1, $_POST['doctorinput'],$_POST['comentinput']);

?>
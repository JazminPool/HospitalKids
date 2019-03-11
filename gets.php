<?php
    session_start();
    include('crud.php');

    $crud = new metodoscrud();

    if(isset($_POST['btn_action'])){
    
        $btn = $_POST['btn_action'];
        switch ($btn) {
            case 'login_':
                    $crud->login($_POST['userinput'], $_POST['passinput']);
                break;
            case 'addDate':
                     $idus = $crud->iduser($_SESSION['userSession']);
                     //echo $idus;
                    if($crud->addDates($idus, $_POST['dateinput'], $_POST['timeinput'], $_POST['doctorinput'],$_POST['comentinput'])>0){
                        echo "<script>alert('Insertado');</script>";
                        header("location:Members.php");
                    }else{
                        header("location:Members.php");
                        echo "<script>alert('BAD');</script>";
                    }
                break;
            case 'logout':
                    if(isset($_SESSION['userSession'])) {
                        unset($_SESSION['userSession']);
                        session_destroy();
                    }
                    echo "<script>window.location.href='Home.php';</script>";
                break;
            
            default:
                # code...
                break;
        }
    }

    
    

    
    
    



?>
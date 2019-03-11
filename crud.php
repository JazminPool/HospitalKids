<?php
    include('conexion.php'); include('js.php');
    class metodoscrud extends Conexionbd{
        //login.
        public function login($user, $pass){
            $queryLogin = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
            $resultLogin = mysqli_query($this->conectar(), $queryLogin);

            $verificar = mysqli_num_rows($resultLogin);

            if($verificar>0){
                session_start();
                $_SESSION['userSession'] = $user;
                header("location:Members.php");
            }else{
                echo "
                        <script>
                        alert('Usuario y/o Contraseña incorrectos. Intente de nuevo.');
                            window.location.href='Home.php';
                        </script>
                    ";
            } 
        }

        //get user
        public function iduser($iduser){
            $queryfind = "SELECT id FROM users WHERE username='$iduser'";
            
            $result_find = mysqli_query($this->conectar(), $queryfind);
            
            while ($coluser = $result_find->fetch_array()) { $datos = $coluser['id']; }

            return $datos;
        }

        //get user
        public function nameuser($iduser){
            $querygetName = "SELECT Nombre, username FROM users WHERE username='$iduser'";
            $resultgetName = mysqli_query($this->conectar(), $querygetName);
            $name=null;
            while($colget = $resultgetName->fetch_array()){ 
                $name = array(
                            $colget['Nombre'], 
                            $colget['username']
                        ); 
            }
            return $name;

        }

        // //Agregar citas php normal w/actions
            // public function addDates($idus, $date, $time, $doctor, $coment){
            //     $date =date('Ymd');
            //     $queryadd = "INSERT INTO dates(id_date, id_user_date, date, time, doctor, comentarios) VALUES(NULL, $idus,$date, '$time', '$doctor', '$coment')";

            //     return $resultadd = mysqli_query($this->conectar(), $queryadd);
            //     $this->Cerrar();
            // }
        // end agregar
        //function que usNO en ajax para deleteDate.php
            // public function deleteDates($idDate){
            //     $querydelete= "DELETE FROM dates WHERE id_date = 56";
            //     return $resultdelete = mysqli_query($this->conectar(), $querydelete) or die ("Error 102.");
            //     $this->Cerrar();
        // }

        //function quNOdate.php
            // public function update($idDate){
            //     $queryUpdate = "SELECT id_date, date, time, doctor, comentarios FROM dates WHERE id_date='$idDate'";
            //     $resultUpdate= mysqli_query($this->conectar(),$queryUpdate);

            //     $rows = mysqli_fetch_row($resultUpdate);

            //     $datos = array(
            //                 'id_date' => $rows[0],
            //                 'date' => $rows[1],
            //                 'time' => $rows[2],
            //                 'doctor' => $rows[3],
            //                 'comentarios' => $rows[4]
            //             );
            //     return $datos;
            // }
        //
        
        //Mostrar citas en la tabla con y sin ajax
        public function showDates($idus){
            setlocale(LC_TIME, 'es_ES', 'esp_esp');
            $queryshow = "SELECT id_date, date, time, status, doctor, comentarios FROM dates WHERE id_user_date = $idus ORDER BY status";
            $resultshow = mysqli_query($this->conectar(),$queryshow);

            return mysqli_fetch_all($resultshow,MYSQLI_ASSOC);
            $this->Cerrar();
        }
        
        //funcion que uso en ajax. para addDate.php
        public function addDates($idus, $date, $time, $status, $doctor, $coment){
            $date =date('Ymd');
            $queryadd = "INSERT INTO dates(id_date, id_user_date, date, time, status, doctor, comentarios) VALUES(NULL, $idus, $date, '$time', $status, '$doctor', '$coment')";

            return $resultadd = mysqli_query($this->conectar(), $queryadd) or die("Error 101.");
            $this->Cerrar();
        }

        public function updateDates($id_date, $date, $time, $doctor, $coment){
            $queryUpdate = "UPDATE dates SET date=$date, time='$time', doctor='$doctor', comentarios='$coment' WHERE id_date=$id_date";
            $resultUpdate = mysqli_query($this->conectar(), $queryUpdate);

            if($resultUpdate){
                return 'gud';
            }
        }

        public function cancelDate($id_date){
            $queryCancel = "UPDATE dates SET status=0 WHERE id_date=$id_date";
            print_r($queryCancel);
            //die();
            $resultCancel = mysqli_query($this->conectar(), $queryCancel);
            if($resultCancel){
                return 'gudCancel';
            }
        }

        


        



    }
?>
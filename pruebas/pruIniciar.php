<?php
include ("../pruebas/pruRegistros.php");
$pruebas = new pruRegistros();

if(!empty($_POST['agregar'])){
    if(empty($_POST['Correo'])
    or empty($_POST['password'])){

        echo "<div id='msgBoxVoid'>Uno de los campos esta Vacio</div>";
        }else{
            $email = $_POST['Correo'];
            $pss = $_POST['password'];
            $pruebas->search($email,$pss);
        }   
    }

?>
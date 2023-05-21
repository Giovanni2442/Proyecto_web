<?php
    include ("../pruebas/pruRegistros.php");
    $pruebasMod = new pruRegistros();

    if(!empty($_POST['agregar'])){
        
        $nombre = $_POST['nombre'];
        $apP = $_POST['ApellidoP'];
        $apM = $_POST['ApellidoM'];
        $alias = $_POST['alias'];
        $email = $_POST['Correo'];
        $pss = $_POST['password'];
        $pruebas->update($nombre,$apP,$apM,$alias,$email,$pss);
    }
?>
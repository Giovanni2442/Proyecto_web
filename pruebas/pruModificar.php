<?php
#include ("../pruebas/pruRegistros.php");
echo " Simon";

header("Location: ../Administrar/AdmUsuarios.php");
class pruModificar{
     
    public function modUsser($mod){
        $pruebasMod = new pruRegistros();

        if(!empty($_POST[$mod])){
            
            $nombre = $_POST['nombre'];
            $apP = $_POST['ApellidoP'];
            $apM = $_POST['ApellidoM'];
            $alias = $_POST['alias'];
            $email = $_POST['Correo'];
            $pss = $_POST['password'];
            $pruebasMod->update($nombre,$apP,$apM,$alias,$email,$pss);
        }
    }
}
?>
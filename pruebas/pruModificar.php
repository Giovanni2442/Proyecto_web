<?php
include_once ("../pruebas/pruRegistros.php");
class pruModificar{
     
    public function modUsser($mod){
        $pruebasMod = new pruRegistros();
        echo "Holaaaaa";
        if(!empty($_POST[$mod])){
            echo "Ya vamos";
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $apP = $_POST['ApellidoP'];
            $apM = $_POST['ApellidoM'];
            $alias = $_POST['alias'];
            $email = $_POST['Correo'];
            $pss = $_POST['password'];
            $pruebasMod->update2($id,$nombre,$apP,$apM,$alias,$email,$pss);
        }
    }
}
?>
<?php
include_once ("../pruebas/pruRegistros.php");
class pruEliminar{
     
    public function elimUsser($mod){
        
        $pruebasMod = new pruRegistros();

        if(!empty($_POST[$mod])){
            if(empty($_POST['id'])
            or empty($_POST['nombre'])){

            echo "<div id = 'msgBoxVoid'>Uno de los campos esta vacio!</div>";
            }else{
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                $pruebasMod->delete($id,$nombre);

            }            
        }
    }
}
?>
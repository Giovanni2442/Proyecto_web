<?php
include("../pruebas/pruRegistros.php");

#OBJETIVO: Este netodo es utilizado para la validación de
#Entrada del usuario, sirve como intermediario entre el usuario
# y las peticiones a la base de datos.
class pruRegistrar{
    
    public function agregarUsser($agrega){
        
        $pruebas = new pruRegistros();
        if (!empty($_POST[$agrega])) {
            if (
                empty($_POST['nombre'])
                or empty($_POST['ApellidoP'])
                or empty($_POST['ApellidoM'])
                or empty($_POST['alias'])
                or empty($_POST['Correo'])
                or empty($_POST['password'])
            ) {

                echo "<div id='msgBoxVoid'>Uno de los campos esta Vacio</div>";
            } else {
                $nombre = $_POST['nombre'];
                $apP = $_POST['ApellidoP'];
                $apM = $_POST['ApellidoM'];
                $alias = $_POST['alias'];
                $email = $_POST['Correo'];
                $pss = $_POST['password'];
                $pruebas->add($nombre, $apP, $apM, $alias, $email, $pss);
            
            }
        }
    }
}
?>

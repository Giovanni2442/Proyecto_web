<?php

 #--Esta clase tiene como objetivo validar
   #la conexión con la base de datos y setear
   #los atributso del usuario
   include_once("../persistencia/conectar.php");
   include_once("../usuario/clase_usuario.php");
class pruRegistros{
   
/*
    private $usu;
    private $conex;
    //Metodo constructor de Usuario
    public function __construct(){
        $this->usu = new clase_usuario();
    }
    //Metodo constructor de Conexión
    public function varificar(){
        $this->conex = new conectar();
    } */

    public function delete($als){
        $con = new conectar();
        if($con){
            echo "conectado";
            //$ali = "as";
            $resultado = $con->Elimina($als);
            echo "-->".$resultado;
            if($resultado){
                echo "Se elimin0";
            }else{
                echo "nel xd";
            }
    
        }else{
            echo "Deconectado";
    
        }
    }

    public function update($name,$als,$apP,$apM,$email,$pss){
        //$conex = new conectar();
        
       # $this->usu = new clase_usuario();
        $conex = new conectar();
        echo $conex;
        if($conex){
            echo "Conectado";

            $usu = new clase_usuario();
            $usu->setNombre($name);
            $usu->setApellidoP($apP);
            $usu->setApellidoM($apM);
            $usu->setCorreo($email);
            $usu->setAlias($als);
            $usu->setPassword($pss);

            $result = $conex->Editar($usu);
            echo "-->".$result;
            if($result){
                echo "Se pud0";
                session_destroy();
                header("location: ../Vistas/Index.php");
            }else{
                echo "no se pudo";
            }
        }else{
                echo "Desconectado";
        }
    }

    public function add($nombre,$apellidoP,$apellidoM,$alias,$Correo,$pss){
        $con = new conectar();
        
        if($con){
            //echo "Conectado";
            #   $nombre = "hola";
            #   $apellidos = "her";
            #   $alias = "hh";
            #   $pss = "123457";
            $usu = new clase_usuario();
            $usu->setNombre($nombre);
            $usu->setApellidoP($apellidoP);
            $usu->setApellidoM($apellidoM);
            $usu->setAlias($alias);
            $usu->setCorreo($Correo);
            $usu->setPassword($pss);
            
            $insertar = $con->Agregar($usu);
            if($insertar){
                echo "<div class='msgSuccess'>
                    <span>Se ingreso con exito</span>
                    </div>"."<br>". $insertar;
            }else{
                
                throw new Exception( "<div class='msgErrCn'>Error al conectar</div>");
            }
    
        }else{
            
            echo "Hola";
            echo $con,"III";
            echo "<div class='msgDesconected'>Desconectado</div>";
        }
    }

    //METODO BUSCAR:
    //Objetivo: Buscar en la base de datos los usuarios disponibles y hace una petición
    //A la calse conectar del metodo consulta para obtener el query de vrificación.
    public function search($correo, $pass) {
        #session_start : almacena la infor. del usuario ingresado
        session_start();
        $conex = new conectar();
        $consultar = $conex->consulta($correo, $pass);
    
        if ($consultar == null) {
            echo "<div class='alertDanger'>
            <span>Usuario no existe</span>
            </div>";
        } else if ($consultar->getCorreo() == "Admin@gmail.com" &&
            $consultar->getPassword() == "12345") {
            
            $_SESSION["name"] = $consultar->getNombre();
            header("Location: secAdmin.php");
            exit(); // Agrega esta línea para terminar la ejecución del script después de la redirección
        
        } else {
            $_SESSION["name"] = $consultar->getNombre();
            $_SESSION["paterno"] = $consultar->getApellidoP();
            $_SESSION["materno"] = $consultar->getApellidoM();
            $_SESSION["alias"] = $consultar->getAlias();
            $_SESSION["email"] = $consultar->getCorreo();
            $_SESSION["pass"] = $consultar->getPassword();
    
            header("Location: secIni.php");
            exit(); // Agrega esta línea para terminar la ejecución del script después de la redirección
        }
    }
}
?>
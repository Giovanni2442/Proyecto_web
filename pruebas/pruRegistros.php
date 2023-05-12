<?php
    include("../persistencia/conectar.php");
   // include  ("../usuario/clase_usuario.php");
   
    class pruRegistros{

        public function delete($als){
            $conex = new conectar();
            if($conex){
                echo "conectado";
                //$ali = "as";
                $resultado = $conex->Elimina($als);
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
            $conex = new conectar();
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
                }else{
                    echo "no se pudo";
                }
            }else{
                    echo "Desconectado";
            }
        }

        public function add($nombre,$apellidoP,$apellidoM,$alias,$Correo,$pss){
            $conex = new conectar();
            if($conex){
                echo "Conectado";
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
              
                $insertar = $conex->Agregar($usu);
                if($insertar){
                    echo "<div class='msgSuccess'>
                        <span>Se ingreso con exito</span>
                        </div>"."<br>". $insertar;
                }else{
                    throw new Exception( "<div class='msgErrCn'>Error al conectar</div>");
                }
        
            }else{
                echo "<div class='msgDesconected'>Desconectado</div>";
            }
        }

        public function search($correo,$pass){
            #session_start : almacena la infor. del usuario ingresado
            session_start();
            $conex = new conectar();
            $consultar = $conex->consulta($correo,$pass);
            if($consultar == null){
                echo "<div class='alertDanger'>
                <span>Usuario no existe</span>
                </div>";
            }
            
            else{
                
                $_SESSION["name"]=$consultar->getNombre();
                $_SESSION["paterno"]=$consultar->getApellidoP();
                $_SESSION["materno"]=$consultar->getApellidoM();
                $_SESSION["alias"]=$consultar->getAlias();
                $_SESSION["email"]=$consultar->getCorreo();
                $_SESSION["pass"]=$consultar->getPassword();
                
                header("location: secIni.php");      
            }

        }
    }

    
?>
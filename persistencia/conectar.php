<?php

include  ("../usuario/clase_usuario.php");

class conectar{
	//Parametros de la conexión a la Base de Datos
	private $server="localhost";
	private $usr="root";
	private $pass="";
	private $db="pruebalog";
    
	//Funcion para conectar
	public function conectar(){
		//Se crea un Objeto de instancia a si misma
		$mysqli = new mysqli(
			$this->server,
			$this->usr,
			$this->pass,
			$this->db);

		return $mysqli;  
	}

	public function numFilas(){

		$conx = $this->conectar();
            if($conx){
                echo "Conectado";
                
                $csql = "select * from usuario";
                $datos = $conx->query($csql);
                $filas = $datos->num_rows;
                echo $filas;

            }else{
                echo "Error";
            }
	}

	public function consulta($email,$pass){

		$usser = new clase_usuario();
	
			$csql = "Select * from usuarios
					where correo = '{$email}' 
					and password = '{$pass}'";

			$conex = $this->conectar();
			$resultado = $conex->query($csql);

			if($resultado->num_rows == 0){
				$usser = null;

			}else{
				$resultado->data_seek(0);

				$fila = $resultado->fetch_assoc();
				$usser->setNombre($fila["nombre"]);
				$usser->setApellidoP($fila["apellidoP"]);
				$usser->setApellidoM($fila["apellidoM"]);
				$usser->setCorreo($fila["correo"]);
				$usser->setAlias($fila["alias"]);
				$usser->setPassword($fila["password"]);
			}
			return $usser;
	}

	public function Agregar($usu){
		//Declarar objeto de clase usuario.
		$cnx = $this->conectar();
		//echo "Conectado";
	
		$nombre = $usu->getNombre();
		$apP = $usu->getApellidoP();
		$apM = $usu->getApellidoM();
		$alias = $usu->getAlias();
		$correo = $usu->getCorreo();
		$pass = $usu->getPassword();
	
		$csql = "INSERT INTO usuarios(nombre, apellidoP, apellidoM, alias, correo,password)
		 VALUES ('$nombre', '$apP','$apM', '$alias','$correo','$pass')";
	
		$resultado = $cnx->query($csql);
		return $resultado;
	}


	public function Elimina($alias){
		//$cnx = $this->conectar();
		
		$csql = "delete from usuario
				where alias = '" .$alias . "'";

		$cnx = $this->conectar();
		$resultado = $cnx->query($csql);
		return $resultado;
	}
	
	public function Editar($usu){
		$conex = $this->conectar();

		$name = $usu->getNombre();
		$apP = $usu->getApellidoP();
		$apM = $usu->getApellidoM();
		$alias = $usu->getAlias();
		$correo = $usu->getCorreo();
		$pass = $usu->getPassword();

		$csql = "update usuario set nombre = '".$name.""
				."where alias = '".$alias."'";

		$resultado = $conex->query($csql);
		return $resultado;
	}
	
}

?>
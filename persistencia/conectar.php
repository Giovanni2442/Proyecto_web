<?php

include_once("../usuario/clase_usuario.php");

class conectar{
	//Parametros de la conexión a la Base de Datos
	private $server="localhost";
	private $usr="root";
	private $pass="2442";
	private $db="tienda_musica";
    
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
                
                $csql = "SELECT * FROM usuarios";
                $datos = $conx->query($csql);
                $filas = $datos->num_rows;
                echo $filas;

				if($filas > 0){ //Verifica si el numero de filas es mayor a cero
					return $datos; //Devuelve el objeto donde consulta el numero de filas

				}else{
					return null;
				}

            }else{
                echo "Error";
				return null;
            }	
	}

	public function consulta($email,$pass){

		$usser = new clase_usuario();
	
			$csql = "Select * from usuarios
					where correo = '{$email}' 
					and contrasena = '{$pass}'";

			$conex = $this->conectar();
			$resultado = $conex->query($csql);

			if($resultado->num_rows == 0){
				$usser = null;

			}else{
				$resultado->data_seek(0);

				$fila = $resultado->fetch_assoc();
				$usser->setNombre($fila["nombre"]);
				$usser->setApellidoP($fila["apellido_p"]);
				$usser->setApellidoM($fila["apellido_m"]);
				$usser->setCorreo($fila["correo"]);
				$usser->setAlias($fila["alias"]);
				$usser->setPassword($fila["contrasena"]);
			}
			return $usser;
	}

	public function Agregar($usu){
		//Declarar objeto de clase usuario.
		$cnx = $this->conectar();
		echo "Conectado";
	
		$nombre = $usu->getNombre();
		$apP = $usu->getApellidoP();
		$apM = $usu->getApellidoM();
		$alias = $usu->getAlias();
		$correo = $usu->getCorreo();
		$pass = $usu->getPassword();
	
		$csql = "INSERT INTO usuarios(nombre, apellido_P, apellido_M, alias, correo, contrasena)
		 VALUES ('$nombre', '$apP','$apM', '$alias','$correo','$pass')";
	
		$resultado = $cnx->query($csql);
		return $resultado;
	}


	public function Elimina($id, $name){
		$cnx = $this->conectar();
		$csql = "DELETE FROM usuarios WHERE id_usuario = ? AND nombre = ?";
		
		$stmt = $cnx->prepare($csql);
		$stmt->bind_param("ss", $id, $name); // "ss" indica que ambos valores son cadenas (strings)
		
		$resultado = $stmt->execute();
		$stmt->close();
		
		return $resultado;
	}
	
	public function Editar($id, $name, $apP, $apM, $als, $email, $pssword){
		$conex = $this->conectar();
	
		$csql = "UPDATE usuarios SET nombre = '$name', apellido_P = '$apP', apellido_M = '$apM', alias = '$als',correo = '$email', contrasena = '$pssword' WHERE id_usuario = '$id'";
	
		$resultado = $conex->query($csql);
		return $resultado;
	}
	
}
?>
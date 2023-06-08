<?php

class clase_usuario{
    private $nombre_str;
    private $apellidoP_str;
    private $apellidoM_str;
    private $edad;
    private $correo_str;
    private $password_str;

    public function setNombre($nombre){
        $this->nombre_str = $nombre;
    }

    public function setApellidoP($apellidoP){
        $this->apellidoP_str = $apellidoP;
    }

    public function setApellidoM($apellidoM){
        $this->apellidoM_str = $apellidoM;
    }

    public function setEdad($edad){
        $this->edad = $edad;
    }

    public function setCorreo($Correo){
        $this->correo_str = $Correo;

    }

    public function setPassword($password){
        $this->password_str = $password;
    }

    public function getNombre(){
        return $this->nombre_str;
    }
    
    public function getApellidoP(){
        return $this->apellidoP_str;
    }

    public function getApellidoM(){
        return $this->apellidoM_str;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function getCorreo(){
        return $this->correo_str;
    }

    public function getPassword(){
        return $this->password_str;
    }
}
    
?>
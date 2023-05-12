<?php

class clase_usuario{
    private $nombre_str;
    private $apellidoP_str;
    private $apellidoM_str;
    private $alias_str;
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

    public function setAlias($alias){
        $this->alias_str = $alias;
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

    public function getAlias(){
        return $this->alias_str;
    }

    public function getCorreo(){
        return $this->correo_str;
    }

    public function getPassword(){
        return $this->password_str;
    }
}
    
?>
<?php
    //Metodo para establecer conecxión en seciónes
    //verifica si el atributo "name" del usuario ingresado
    //ha ingresado seción sino, me devuelve a la ventana de inicio de seción
    session_start();
        if(empty($_SESSION["name"])){
        header("location: iniciar.php");
        }
?>
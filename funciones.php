<?php
    $hora = date('H:i:s', time());
    echo $hora;
    function conexion ( $base, $usuario, $pass ) {
        try {
            $conexion =  new PDO("mysql:host=localhost;dbname=$base", $usuario, $pass);
            return $conexion;
        } catch (PDOException $e) {
            return false;
        }
    }








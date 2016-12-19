<?php

class db
{
    public static function conexion()
    {
        $conexion = new mysqli("localhost", "root", "", "modeloSeguimiento");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}

?>
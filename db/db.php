<?php
class Conectar{
    public static function conexion(){
        $conexion=new mysqli("remotemysql.com", "EpkE47OQAk", "EpkE47OQAk", "krTtukOMYb");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>

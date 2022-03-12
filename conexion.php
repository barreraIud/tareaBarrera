<?php
class BD{

    private static $instancia=NULL;//declarar la variable que almacenara la conexion

    public static function crearInstancia(){
        if(!isset( self::$instancia)){ //si no hay ninguna conexion
            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;//cambiar el acceso de la conexion
            self::$instancia= new PDO('mysql:host=localhost;dbname=biblioteca','root','', $opcionesPDO); 
            //echo "conexiòn realizada";
        }
        return self::$instancia;//si ya hay una conexion la retornamos y si no hay la creamos
    }
}
?>

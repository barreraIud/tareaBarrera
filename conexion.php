<?php
class BD{

    private static $instancia=NULL;//declarar la variable que almacenara la conexion

    public static function crearInstancia(){
        if(!isset( self::$instancia)){ //si no hay ninguna conexion
            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;//cambiar el acceso de la conexion
            self::$instancia= new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_17167557b982c9b','b22e70d97e3eb4','9b51788f', $opcionesPDO); 
            //echo "conexiòn realizada";
        }
        return self::$instancia;//si ya hay una conexion la retornamos y si no hay la creamos
    }
}
?>

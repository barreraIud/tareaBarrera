<?php
class BD{

    private static $instancia=NULL;//declarar la variable que almacenara la conexion

    public static function crearInstancia(){
        if(!isset( self::$instancia)){ //si no hay ninguna conexion
            $opcionesPDO[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;//cambiar el acceso de la conexion
            //self::$instancia= new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_17167557b982c9b','b22e70d97e3eb4','9b51788f', $opcionesPDO); 
            //Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

            
            //echo "conexiòn realizada";
        }
        return self::$instancia;//si ya hay una conexion la retornamos y si no hay la creamos
    }
}
?>

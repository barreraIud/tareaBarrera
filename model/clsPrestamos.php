<?php
class Prestamos{	
	public $id;
	public $titulo;
    public $codigo;
    public $estado;

	public function __construct($id,$titulo,$codigo,$estado){
		$this->id = $id;
		$this->titulo = $titulo;
        $this->codigo = $codigo;
        $this->estado = $estado;
        
	}
  public static function consultar(){
        $listaPrestamos=[];
        $conexionBD=BD::crearInstancia();
        $sql = $conexionBD->query("SELECT  libros.lib_codigo, libros.lib_titulo,prestamos.pres_codigo,  prestamos.pres_estado
                                        FROM prestamos_has_libros
                                        INNER JOIN libros ON libros.lib_codigo=  prestamos_has_libros.libros_lib_codigo
                                        INNER JOIN prestamos ON prestamos.pres_codigo =  prestamos_has_libros.prestamos_pres_codigo  
                                        ");
        foreach($sql->fetchAll() as $prestamo){
            $listaPrestamos[] = new Prestamos($prestamo['lib_codigo'],$prestamo['lib_titulo'],$prestamo['pres_codigo'],$prestamo['pres_estado']);
        }
        return $listaPrestamos;
    }
    public static function getById($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("SELECT  libros.lib_codigo, libros.lib_titulo,prestamos.pres_codigo,  prestamos.pres_estado
                                        FROM prestamos
                                        INNER JOIN prestamos_has_libros ON prestamos.pres_codigo =  prestamos_has_libros.prestamos_pres_codigo  
                                        INNER JOIN libros ON libros.lib_codigo=  prestamos_has_libros.libros_lib_codigo
                                        WHERE lib_codigo=?");
        $sql->execute(array($id));
        $prestamo = $sql->fetch();
        return new Prestamos ($prestamo['lib_codigo'],$prestamo['lib_titulo'],$prestamo['pres_codigo'],$prestamo['pres_estado']);  
    }
    public static function update($id,$codigo){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE  prestamos
                                        INNER JOIN prestamos_has_libros ON prestamos.pres_codigo =  prestamos_has_libros.prestamos_pres_codigo  
                                        INNER JOIN libros ON libros.lib_codigo=  prestamos_has_libros.libros_lib_codigo
                                        SET prestamos_pres_codigo   = ?
                                        WHERE lib_codigo= ? ;");
        $sql->execute(array($codigo,$id));     
        }
}
?>
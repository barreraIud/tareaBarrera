<?php
class Libros{	
	public $id;
	public $titulo;
	public $ISBN;
	public $Editorial;
	public $paginas;

	public function __construct($id,$titulo,$ISBN,$Editorial,$paginas){
		$this->id = $id;
		$this->titulo = $titulo;
		$this->ISBN = $ISBN;
		$this->Editorial = $Editorial;
		$this->paginas = $paginas;
        
	}
  public static function consultar(){
        $listaLibros=[];
        $conexionBD=BD::crearInstancia();
        $sql = $conexionBD->query("SELECT  libros.lib_codigo, libros.lib_titulo, libros.lib_ISBN , libros.lib_Editorial , libros.lib_paginas
                                        FROM libros;
                                        ");
        foreach($sql->fetchAll() as $libro){
            $listaLibros[] = new Libros($libro['lib_codigo'],$libro['lib_titulo'],$libro['lib_ISBN'],$libro['lib_Editorial'],$libro['lib_paginas']);
        }
        return $listaLibros;
    }

	public static function crear($titulo,$ISBN,$Editorial,$paginas){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("INSERT INTO libros(lib_titulo, lib_ISBN, lib_Editorial, lib_paginas) VALUES(?,?,?,?)");
        $sql->execute(array($titulo,$ISBN,$Editorial,$paginas)); 
    } 

    public static function getById($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("SELECT * FROM libros WHERE lib_codigo=?");
        $sql->execute(array($id));
        $libro = $sql->fetch();
        return new Libros($libro['lib_codigo'],$libro['lib_titulo'],$libro['lib_ISBN'],$libro['lib_Editorial'],$libro['lib_paginas']);       
    }

    public static function update($id,$titulo,$ISBN,$Editorial,$paginas){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("UPDATE libros SET lib_titulo = ?, lib_ISBN = ?, lib_Editorial = ?,  lib_paginas= ? WHERE lib_codigo = ?;");
        $sql->execute(array($titulo,$ISBN,$Editorial,$paginas,$id));    
    }

    public static function borrar($id){
        $conexionBD=BD::crearInstancia();
        $sql= $conexionBD->prepare("DELETE FROM libros WHERE lib_codigo=?");
        $sql->execute(array($id));
    }
  


}
?>
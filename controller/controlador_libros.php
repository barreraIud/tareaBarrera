<?php
include_once("model/clsLibros.php");
include_once("conexion.php");
BD::crearInstancia();
//echo "entra al controlador libros";
class ControladorLibros {
    public function inicio(){
        //echo "entra a el metodo inicio";
       // print_r(Libro::consultar());//la variable libros almacena los datos que vienen de el metodo consultar
        $libros=Libros::consultar();
        //echo "genera un objeto libro y trae su metodo consultar";
        include_once("view/libros/libros_inicio.php");
    } 
    public function crear(){
        if($_POST){
            print($_POST);
            $titulo=$_POST['titulo'];
	        $ISBN=$_POST['ISBN'];
	        $Editorial=$_POST['Editorial'];
	        $paginas=$_POST['paginas'];
            Libros::crear($titulo,$ISBN,$Editorial,$paginas);
            header("Location:.?controlador=libros&accion=inicio");
        }
        include_once("view/libros/libros_crear.php");
    }
    
    public function editar(){
        if($_POST){
            $id=$_POST['id'];
            $titulo=$_POST['titulo'];
	        $ISBN=$_POST['ISBN'];
	        $Editorial=$_POST['Editorial'];
	        $paginas=$_POST['paginas'];
            Libros::update($id,$titulo,$ISBN,$Editorial,$paginas);
            //print_r($_POST);
            header("Location:.?controlador=libros&accion=inicio");
        }
        $id=$_GET['id'];
        //print_r($event=Libros::getById($id)); 
        $libro=Libros::getById($id);
        include_once("view/libros/libros_editar.php");
    }
    public function borrar(){ 
        $id=$_GET['id'];
        //print("se recibe un get id ").$id;
        $libro=(Libros::borrar($id));
        header("Location:.?controlador=libros&accion=inicio");
        }

    } 
?>
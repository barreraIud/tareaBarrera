<?php
include_once("model/clsPrestamos.php");
include_once("conexion.php");
BD::crearInstancia();
//echo "entra al controlador prestamos";
class ControladorPrestamos {
    public function inicio(){
        //echo "entra a el metodo inicio";
       // print_r(Libro::consultar());//la variable libros almacena los datos que vienen de el metodo consultar
        $prestamos=Prestamos::consultar();
        //echo "genera un objeto libro y trae su metodo consultar";
        include_once("view/prestamos/prestamos_inicio.php");
    }   
    public function editar(){
        $codigo='1';
        if($_POST){
            $id=$_POST['id'];
            $codigo=$_POST['codigo'];
            Prestamos::update($id,$codigo);
            //print_r($_POST);
            header("Location:.?controlador=prestamos&accion=inicio");
        }
        $id=$_GET['id'];
        //print_r($event=Prestamos::getById($id)); 
        $prestamo=Prestamos::getById($id);
        include_once("view/prestamos/prestamos_editar.php");
    }
    public function borrar(){ 
        $id=$_GET['id'];
        //print("se recibe un get id ").$id;
        $libro=(Libros::borrar($id));
        header("Location:.?controlador=prestamos&accion=inicio");
        }

    } 
?>
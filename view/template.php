<!DOCTYPE html>
<html lang="en">
<header>  
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meeta http-equiv="x-ua-compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
<link rel="stylesheet" type="text/css"  href="Css/styles.css"> 
</header>
 
 <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-toggler col-md-3 col-lg-4 me-0 px-3 text-light" href="#">Sistema de Biblioteca IU Digital</a>
  <img src="assets/IUDigital.png">
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3 text-light" href="#">Sign out</a>
    </div>
  </div>
</header>
<div class="container-fluid">
  <div class="row">
    <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="?controlador=libros&accion=inicio">Consultar Libro</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="?controlador=libros&accion=crear">Agregar Libro</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="?controlador=prestamos&accion=inicio">Prestar Libro</a>
                </div>
    </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-lg-end pt-3 pb-2 mb-3 border-bottom">
                <div class="btn-toolbar mb-2 mb-md-0">
                    <div class="table-responsive card-header">
                          <form class="row g-3 needs-validation" novalidate>
                            <div class="col-12">
                            </div>
                          </form>
<?php include_once("ruteador.php");
            ?>     
                    </div>
                </div>
            </div> 
    </main>
 

  

<footer class="cyan-IUD fixed-bottom">
    <div class="container p-1 text-dark fs-6">Todos los Derechos Reservados &reg 2021 - Carlos Barrera
    </div>
</footer>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>


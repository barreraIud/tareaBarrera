<h4>Sección de agregar libro</h4>
<div class="card">
    <div class="card-header">
    agregar Libro
    </div>
    <div class="card-body">
      <form action="" method="post">

        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo:</label>
            <input required type="text" class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="titulo">
        </div>
        <div class="mb-3">
          <label for="ISBN" class="form-label">ISBN:</label>
            <input required type="ISBN" class="form-control" name="ISBN" id="ISBN" aria-describedby="helpId" placeholder="ISBN">
        </div>
        <div class="mb-3">
          <label for="Editorial" class="form-label">Editorial:</label>
            <input required type="Editorial" class="form-control" name="Editorial" id="Editorial" aria-describedby="helpId" placeholder="Editorial">
        </div>  
        <div class="mb-3">
          <label for="paginas" class="form-label">paginas:</label>
            <input required type="paginas" class="form-control" name="paginas" id="paginas" aria-describedby="helpId" placeholder="paginas">
        </div> 
          <input name="" id="" class="btn btn-success" type="submit" value="Crear Libro">
            <a href="?controlador=libros&accion=inicio"class="btn btn-primary">Cancelar</a> 
       </form> 
    </div>
</div>
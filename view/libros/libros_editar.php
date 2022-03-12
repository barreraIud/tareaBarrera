<div class="card">
    <div class="card-header">
        Editar libros
    </div>
    <div class="card-body">
       <form action="?controlador=libros&accion=editar" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">ID:</label>
          <input class="form-control" value="<?php echo $libro->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="id">
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo:</label>
          <input class="form-control" value="<?php echo $libro->titulo; ?>" name="titulo" id="titulo" aria-describedby="helpId" placeholder="titulo">
        </div>
        <div class="mb-3">
          <label for="ISBN" class="form-label">ISBN:</label>
          <input class="form-control" value="<?php echo $libro->ISBN;?>" name="ISBN" id="ISBN" aria-describedby="helpId" placeholder="ISBN">
        </div>
        <div class="mb-3">
          <label for="Editorial" class="form-label">Editorial:</label>
          <input class="form-control" value="<?php echo $libro->Editorial;?>" name="Editorial" id="Editorial" aria-describedby="helpId" placeholder="Editorial">
        </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">paginas:</label>
          <input required type="text" class="form-control" value="<?php echo $libro->paginas;?>" name="paginas" id="paginas" aria-describedby="helpId" placeholder="paginas">
        </div>     
       <input name="" id="" class="btn btn-success" type="submit" value="Editar rol">
       <a href="?con=roles&act=index"class="btn btn-primary">Cancelar</a>
      </form> 
    </div>
</div>
 
<div class="card">
    <div class="card-header">
        Editar prestamos
    </div>
    <div class="card-body">
       <form action="?controlador=prestamos&accion=editar" method="post">
        <div class="mb-3">
          <label for="id" class="form-label">ID:</label>
            <input required type="text" class="form-control" value="<?php echo $prestamo->id; ?>" name="id" id="id" aria-describedby="helpId" placeholder="disponible">
        </div>
        <div class="mb-3">
         <label for="codigo" class="form-label">Codigo:</label>
         <select class="form-control" id="codigo" name="codigo" aria-describedby="helpId">   
          <option value="1">disponible</option>
          <option value="2">prestado</option>
         </select>
       </div>
        <div class="mb-3">
          <label for="titulo" class="form-label">Titulo:</label>
          <td> <?php echo $prestamo->titulo; ?></td>
        </div>
       <input name="" id="" class="btn btn-success" type="submit" value="Editar">
       <a href="?con=roles&act=index"class="btn btn-primary">Cancelar</a>
      </form> 
    </div>
</div>
 
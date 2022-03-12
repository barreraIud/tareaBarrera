<h4>Sección de consultar libro</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>ISBN</th>
            <th>Editorial</th>
            <th>paginas</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($libros as $libro) {?>
        <tr>
            <td> <?php echo $libro->id; ?></td>
            <td> <?php echo $libro->titulo; ?></td>
            <td> <?php echo $libro->ISBN; ?></td>
            <td> <?php echo $libro->Editorial; ?></td>
            <td> <?php echo $libro->paginas; ?></td>
            <td> <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=libros&accion=editar&id=<?php echo $libro->id; ?>"class="btn btn-primary">Editar</a> <!--primary|secondary|success|danger|warning|info|light|dark|link-->
                <a href="?controlador=libros&accion=borrar&id=<?php echo $libro->id; ?>"class="btn btn-danger">Borrar</a>
            </div></td>            
        </tr>
<?php }?>
    </tbody>
</table>

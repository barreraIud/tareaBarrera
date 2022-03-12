<h4>Sección de prestar libros</h4>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>estado de préstamo</th>
        </tr>
    </thead>
    <tbody>
<?php foreach ($prestamos as $prestamo) {?>
        <tr>
            <td> <?php echo $prestamo->id; ?></td>
            <td> <?php echo $prestamo->titulo; ?></td>
            <td> <?php echo $prestamo->estado; ?></td>
            <td> <div class="btn-group" role="group" aria-label="">
                <a href="?controlador=prestamos&accion=editar&id=<?php echo $prestamo->id; ?>"class="btn btn-primary">Editar</a> <!--primary|secondary|success|danger|warning|info|light|dark|link-->
            </div></td>            
        </tr>
<?php }?>
    </tbody>
</table>
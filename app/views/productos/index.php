<h1>Listado Productos</h1>

<?php if (!empty($productos)) {?>
    <table border='2'>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
        </tr>

        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto["nombre"] ?></td>
                <td><?= $producto["precio"] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php } else { ?>
        <p>No hay productos para mostrar</p>
<?php } ?>
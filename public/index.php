<?php

require_once __DIR__ . "/../app/controllers/productosController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

?>

<a href="/productos">Listado Productos</a>
<a href="/crear/productos">Crear</a>

<?php
//PRODUCTOS
if ($method === 'GET'&& $uri === '/productos'){
    $ProductosController = new productosController();
    $ProductosController->index();
}

if ($method === 'POST' && $uri === '/productos'){
    $ProductosController = new productosController();
    $ProductosController->guardar();
}

if ($method === 'GET' && $uri === '/crear/productos'){
    $ProductosController = new productosController();
    $ProductosController->crear();
}
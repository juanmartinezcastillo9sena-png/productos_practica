<?php
require_once __DIR__ . "/../models/productos.php";

class productosController
{

    public function index()
    {

        $productosModel = new Productos();

        try {
            $productos = $productosModel->getAll();
        } catch (PDOException) {
            echo "Se encontraron errores";
        }

        require_once __DIR__ . "/../views/productos/index.php";
    }

    public function crear(){
        require_once __DIR__ . "/../views/productos/crear.php";
    }

    public function guardar(){
        $nombre=$_POST['nombre'];
        $precio=$_POST['precio'];

        $productos = new Productos();
        $resultado = $productos->guardar($nombre, $precio);
        if($resultado){
            echo "Producto guardado correctamente";
            $this->index();
        } else{
            echo "No se puede guardar el producto";
        }
    }
}

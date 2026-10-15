<?php
require_once __DIR__ . "/../../config/Database.php";

class Productos{
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection=$database->conectar();
    }

    public function getAll(){
        $sql="SELECT * FROM productos";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $precio){
        try{
            $sql =
            "INSERT INTO productos (nombre, precio)
            VALUES (:nombre, :precio)";
            $consulta = $this->connection->prepare($sql);
            $consulta->bindParam(":nombre", $nombre);
            $consulta->bindParam(":precio", $precio);

            return $consulta->execute();
        } catch (PDOException $e){
            echo "Error al guardar producto";
        }
    }
}
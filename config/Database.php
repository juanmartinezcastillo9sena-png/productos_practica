<?php

class Database{
    private $host;
    private $port;
    private $dbname;
    private $user;
    private $pwd;
    private $connection;

    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . "/../.env");
        $this->host=$env["DB_HOST"];
        $this->port=$env["DB_PORT"];
        $this->dbname=$env["DB_NAME"];
        $this->user=$env["DB_USER"];
        $this->pwd=$env["DB_PASSWORD"];
    }

    public function conectar(){
         try{$dsn="mysql:host={$this->host};port={$this->port};dbname={$this->dbname}";

            $this->connection =new PDO($dsn, $this->user, $this->pwd);

            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
            return $this->connection;

            }   catch(PDOException $e) {
            echo "Ocurrio un error";
        } 
    
    }
}
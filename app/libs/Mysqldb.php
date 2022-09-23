<?php

/**
 * Manejo de la Base de Datos de MySQL
 */

class Mysqldb
{
    // Datos de la conexión
    private $host = 'mysql';
    private $user = 'default';
    private $pass = 'secret';
    private $dbname = 'tiendamvc';

    // Atributos
    private static $instancia = null;
    private $db = null;

    private function __construct()
    {
        $options = [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        ];

        try {

            $this->db = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->dbname,
                $this->user,
                $this->pass,
                $options
            );

        } catch (PDOException $error) {

            exit('La base de datos no está accesible');

        }
    }

    public static function getInstance()
    {
        if (is_null(self::$instancia)) {
            self::$instancia = new Mysqldb();
        }

        return self::$instancia;
    }

    public function getDatabase()
    {
        return $this->db;
    }
}
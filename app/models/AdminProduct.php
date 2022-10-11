<?php

class AdminProduct
{
    private $db;

    public function __construct()
    {
        $this->db = Mysqldb::getInstance()->getDatabase();
    }

    public function getProducts()
    {
        $sql = 'SELECT * FROM products WHERE deleted=0';
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getConfig($type)
    {
        $sql = 'SELECT * FROM config WHERE type=:type ORDER BY value';
        $query = $this->db->prepare($sql);
        $query->execute([':type' => $type]);

        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
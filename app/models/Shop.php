<?php

class Shop
{
    private $db;

    public function __construct()
    {
        $this->db = Mysqldb::getInstance()->getDatabase();
    }

    public function getMostSold()
    {
        $sql = 'SELECT * FROM products WHERE mostSold=1 AND deleted=0 LIMIT 8';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProductById($id)
    {
        $sql = 'SELECT * FROM products WHERE id=:id';
        $query = $this->db->prepare($sql);
        $query->execute([':id' => $id]);

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getNews()
    {
        $sql = 'SELECT * FROM products WHERE mostSold!=1 AND new=1 AND deleted=0 LIMIT 8';
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}
<?php

class Login
{
    private $db;

    public function __construct()
    {
        $this->db = Mysqldb::getInstance()->getDatabase();
    }

    public function existsEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email=:email';
        $query = $this->db->prepare($sql);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->execute();

        return $query->rowCount();
    }

    public function createUser($data)
    {
        $response = false;

        if ( ! $this->existsEmail($data['email'])) {
            // Crear el usuario

            $password = hash_hmac('sha512', $data['password'], 'elperrodesanroque');

            $sql = 'INSERT INTO users(first_name, last_name_1, last_name_2, email, 
                  address, city, state, zipcode, country, password) 
                  VALUES(:first_name, :last_name_1, :last_name_2, :email, 
                  :address, :city, :state, :zipcode, :country, :password)';

            $params = [
                ':first_name' => $data['firstName'],
                ':last_name_1' => $data['lastName1'],
                ':last_name_2' => $data['lastName2'],
                ':email' => $data['email'],
                ':address' => $data['address'],
                ':city' => $data['city'],
                ':state' => $data['state'],
                ':zipcode' => $data['postcode'],
                ':country' => $data['country'],
                ':password' => $password,
            ];

            $query = $this->db->prepare($sql);
            $response = $query->execute($params);

        }

        return $response;
    }
}
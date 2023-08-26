<?php

//we use namespace to avoid conflict between classes with the same name and like to categorize the classes
namespace Core;

use PDO;
use PDOException;

class Database
{
    private $pdo;
    public $statement;

    public function __construct($config) //make a default value for the connection 
    {
        try {

            $dsn = 'mysql:' . http_build_query($config, '', ';'); //make the $config array seperate by ';' 
            $this->pdo = new PDO($dsn, options: [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); //to always return the result array instead of array in array 
        } catch (PDOException $e) {
            echo "connection error" . $e->getMessage();
        }
    }

    public function execute($query, $params = [])
    {
        $this->statement = $this->pdo->prepare($query);
        $this->statement->execute($params);
        return $this;
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findAll()
    {
        return $this->statement->fetchAll();
    }

    public function findOrFail()
    {
        $result = $this->find();
        if (!$result) {
            abort();
        }
        return $result;
    }

    public function findAllOrFail()
    {
        $result = $this->findAll();
        if (!$result) {
            abort();
        }
        return $result;
    }

    public function isUnique($table, $field, $value)
    {
        $query = "SELECT * FROM $table WHERE $field = :value";
        $params = [':value' => $value];
        $result = $this->execute($query, $params)->find();
        return $result ? true : false;
    }

    function findUserByEmail($email)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $params = [':email' => $email];
        $result = $this->execute($query, $params)->find();
        return $result;
    }


    // function findUserById($id)
    // {
    //     $query = "SELECT * FROM users WHERE id = :id";
    //     $params = [':id' => $id];
    //     $result = $this->execute($query, $params)->find();
    //     return $result;
    // }


    




}
<?php 
class Database
{
    private $pdo;

    public function __construct($config) //make a default value for the connection 
    {
        try{
              
            $dsn = 'mysql:'.http_build_query($config,'',';'); //make the $config array seperate by ';' 
            $this->pdo = new PDO($dsn,options: [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]); //to always return the result array instead of array in array 
        } catch (PDOException $e) {
            echo "connection error".$e->getMessage();
        }
        
    }

    public function execute($query,$params)
    {
        $statement = $this->pdo->prepare($query);
        $statement->execute($params);
        return $statement ; 
    }
}

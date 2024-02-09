<?php
require_once __DIR__.'/../data_access/db-connector.php';

class Product
{
    private $db;

    public function __construct()
    {
        $dbConnector = DbConnector::getInstance();
        $this->db = $dbConnector->getConnection();
    }
   

    public function getProducts(){
        $query="SELECT * FROM products ORDER BY created_at DESC ";
        $statement=$this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductByUrl($productUrl){
        $query="SELECT * FROM products WHERE product_url=:product_url LIMIT 1;";
        $statement=$this->db->prepare($query);
        $statement->bindParam(':product_url',$productUrl,PDO::PARAM_STR);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }



}
?>
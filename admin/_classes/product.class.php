<?php
require_once __DIR__ . '/../_data_access/db-connector.php';

class Product
{
    private $db;

    public function __construct()
    {
        $dbConnector = DbConnector::getInstance();
        $this->db = $dbConnector->getConnection();
    }

    public function getProducts()
    {
        $query = "SELECT * FROM products ORDER BY product_id DESC";
        $statement = $this->db->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getProductById($productId)
    {
        $query = "SELECT * FROM products WHERE product_id=:product_id LIMIT 1";
        $statement = $this->db->prepare($query);
        $statement->bindParam(":product_id", $productId, PDO::PARAM_INT);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }


    public function addProduct($productData)
    {
        $query = "INSERT INTO products SET 
                         product_name=:product_name,
                        product_short_description=:product_short_description,
                        product_description=:product_description,
                        product_url=:product_url,
                        product_image=:product_image";

        $statement = $this->db->prepare($query);
        $statement->bindParam(":product_name", $productData["product_name"], PDO::PARAM_STR);
        $statement->bindParam(":product_short_description", $productData["product_short_description"], PDO::PARAM_STR);
        $statement->bindParam(":product_description", $productData["product_description"], PDO::PARAM_STR);
        $statement->bindParam(":product_url", $productData["product_url"], PDO::PARAM_STR);
        $statement->bindParam(":product_image", $productData["product_image"], PDO::PARAM_STR);
        return $statement->execute();
    }
    public function updateProduct($productData)
    {
        $query = "UPDATE products SET
                         product_name=:product_name,
                        product_short_description=:product_short_description,
                        product_description=:product_description,
                        product_url=:product_url
                        WHERE product_id=:product_id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(":product_id", $productData["product_id"], PDO::PARAM_INT);
        $statement->bindParam(":product_name", $productData["product_name"], PDO::PARAM_STR);
        $statement->bindParam(":product_short_description", $productData["product_short_description"], PDO::PARAM_STR);
        $statement->bindParam(":product_description", $productData["product_description"], PDO::PARAM_STR);
        $statement->bindParam(":product_url", $productData["product_url"], PDO::PARAM_STR);
        return $statement->execute();
    }

    public function updateProductPhoto($productId, $productImages)
    {
        $query = "UPDATE products SET product_image=:product_image WHERE product_id=:product_id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(":product_id", $productId, PDO::PARAM_INT);
        $statement->bindParam(":product_image", $productImages, PDO::PARAM_STR);
        return $statement->execute();
    }


    public function deleteProduct($productId)
    {
        $query = "DELETE FROM products WHERE product_id=:product_id";
        $statement = $this->db->prepare($query);
        $statement->bindParam(":product_id", $productId, PDO::PARAM_INT);
        return $statement->execute();
    }

}
?>
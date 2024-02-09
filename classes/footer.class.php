<?php 
    require_once __DIR__.'/../data_access/db-connector.php';

    class Footer{
        private $db;

        public function __construct(){
            $dbConnector=DbConnector::getInstance();
            $this->db=$dbConnector->getConnection();
        }

        public function getProducts(){
            $query = "SELECT * FROM products  ORDER BY created_at DESC";
            $statement = $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }
        public function getSocialMedia()
    {
        $query = "SELECT * FROM social_media WHERE social_media_id = 0";
        $statement = $this->db->query($query);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    }
?>
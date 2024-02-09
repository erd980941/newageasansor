<?php 
    require_once __DIR__.'/../data_access/db-connector.php';

    class OurReference{
        private $db;

        public function __construct(){
            $dbConnector=DbConnector::getInstance();
            $this->db=$dbConnector->getConnection();
        }

        public function getGalleryItems(){
            $query='SELECT * FROM our_references ORDER BY created_at';
            $statement= $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>
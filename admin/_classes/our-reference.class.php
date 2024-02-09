<?php 
    require_once __DIR__.'/../_data_access/db-connector.php';

    class OurReference{
        private $db;

        public function __construct(){
            $dbConnector=DbConnector::getInstance();
            $this->db=$dbConnector->getConnection();
        }

        public function getOurReferences(){
            $query='SELECT * FROM our_references ORDER BY created_at DESC';
            $statement= $this->db->prepare($query);
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getOurReferenceById($referenceId){
            $query= 'SELECT * FROM our_references WHERE reference_id=:reference_id LIMIT 1';
            $statement= $this->db->prepare($query);
            $statement->bindParam(':reference_id', $referenceId, PDO::PARAM_INT);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

        public function getGalleryPathById($referenceId){
            $query= 'SELECT reference_image FROM our_references WHERE reference_id=:reference_id LIMIT 1';
            $statement= $this->db->prepare($query);
            $statement->bindParam(':reference_id', $referenceId, PDO::PARAM_INT);
            $statement->execute();
            $result= $statement->fetch(PDO::FETCH_ASSOC);
            return isset($result['reference_image'])?$result['reference_image']:null;
        }



        public function addOurReference($ourReferenceData){
            $query= 'INSERT INTO our_references SET 
                        reference_name=:reference_name,
                        reference_description=:reference_description,
                        reference_image=:reference_image';
                            
            $statement=$this->db->prepare($query);
            $statement->bindParam(':reference_name', $ourReferenceData['reference_name'], PDO::PARAM_STR);
            $statement->bindParam(':reference_description', $ourReferenceData['reference_description'], PDO::PARAM_STR);
            $statement->bindParam(':reference_image', $ourReferenceData['reference_image'], PDO::PARAM_STR);

            return $statement->execute();
        }
        

       

        public function deleteOurReference($referenceId){
            $query= 'DELETE FROM our_references WHERE reference_id=:reference_id';
            $statement=$this->db->prepare($query);
            $statement->bindParam(':reference_id', $referenceId, PDO::PARAM_INT);
            return $statement->execute();
        }

    }
?>
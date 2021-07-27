<?php
     include_once('connection.php');

     class Produit
     {
          public function __construct()
          {
               $this->db = new Database();               
          }
          public function afficher_produit()
          {    
               $query = "select * from produits";
               $result = $this->db->afficher($query);
               return $result;
              
          }
          public function afficher_produit_id($id)
          {    
               $query = "select * from produits where id = '$id'";
               $result = $this->db->afficher($query);
               return $result;
          }
          
          public function ajouter_produit($image,$nom,$prix,$description)
          {
               
               $query = "INSERT INTO `produits` (`id`, `image`, `nom`, `prix`, `description`) VALUES (NULL, '$image', '$nom', '$prix', '$description')";
               $result = $this->db->inserer($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }

          public function modifier_produit($id,$image,$nom,$prix,$description)
          {
               
               $query = mysqli_query($this->connection->getConnection(),"UPDATE `produits` SET `image` = '$image', `nom` = '$nom', `prix` = '$prix', `description` = '$description' WHERE `produits`.`id` = $id;");
               if($query){
                    return 'sa marche';
               }else{
                    return ' sa marche pas';
               }
          }
          
          public function supprimer_produit($id)
          {
               
               $query = "DELETE FROM `produits` WHERE `produits`.`id` = $id";
               $result = $this->db->supprimer($query);
               if ($result) {
                    $msg = "<span class='success'>Succes</span>";
                    return $msg;
               } else {
                    $msg = "<span class='error'>Echec</span>";
                    return $msg;
               }
          }
     }
<?php
     include_once('connection.php');

     class Commande
     {
          public function __construct()
          {
               $this->db = new Database();               
          }

          public function afficher_commande_id($id)
          {    
               $query = "SELECT commande.status as status, commande.id as id, client.nom as nomClient, produits.nom AS nomProduit, produits.prix as prix, produits.image as img from commande left join client on commande.id_client = client.id LEFT JOIN produits on commande.id_produit = produits.id where commande.id ='$id'";
               $result = $this->db->afficher($query);
               return $result;
          }
          public function afficher_commande()
          {    
               $query = "SELECT commande.status as status, commande.id as id, client.nom as nomClient, produits.nom AS nomProduit, produits.prix as prix, produits.image as img from commande left join client on commande.id_client = client.id LEFT JOIN produits on commande.id_produit = produits.id";
               $result = $this->db->afficher($query);
               return $result;
          }
          public function commande_fini($id)
          {    
               $query = "UPDATE `commande` SET `status` = 'Livrer' WHERE `commande`.`id` = '$id'";
               $result = $this->db->update($query);
               
          }
          public function commande_refuse($id)
          {    
               $query = "UPDATE `commande` SET `status` = 'Rejeter' WHERE `commande`.`id` = '$id'";
               $result = $this->db->update($query);
               
          }
          public function ajouter_commande($idClient,$idProduit)
          {
               
               $query = "INSERT INTO `commande` (`id`, `id_client`, `id_produit`) VALUES (NULL, '$idClient', '$idProduit'); ";
               $result = $this->db->inserer($query);
               if($result){
                    return true;
               }else{
                    return false;
               }
          }
     }
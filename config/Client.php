<?php
     include_once('connection.php');

     class Client
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
          public function connection($mail,$mdp)
          {    
               $query = "select * from client where mail = '$mail' and mdp = '$mdp' ";
               $result = $this->db->afficher($query);
               if($result){
                    foreach ($result as $data) {
                         return $data;
                    }
               }else{
                    return false;
               }
               
          }
          
          public function ajouter_client($nom,$mail,$mdp)
          {
               
               $query = "INSERT INTO `client` (`id`, `nom`, `mail`, `mdp`) VALUES (NULL, '$nom', '$mail', '$mdp'); ";
               $result = $this->db->inserer($query);
               if($result){
                    $con = $this->connection($mail,$mdp);
                    return $con;
               }else{
                    return false;
               }
          }
     }
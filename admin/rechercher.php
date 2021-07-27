<?php

require("../config/instance.php");

?>

<?php
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form-style.css">
    <title>Page Recherche</title>
</head>
<body>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET" class="recherche-form">
        <h1>Recherchez Un Produit</h1>
        <div class="separation"></div>
        <input type="text" name="id_produit" id="id_produit">

        <div class="pied-formulaire">
            <input type="submit" value="Valider" name='valider_btn'>
        </div>
    </form>

        <table class="content-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>nom</th>
                    <th>image</th>
                    <th>prix</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $valider_btn = isset($_GET['valider_btn']);
                $produits= $produit->afficher_produit();
                $row =0;

                if(!empty($valider_btn)){
                    global $produits;
                    $id_produit = $_GET['id_produit'];
                    $produits = $produit->afficher_produit_id($id_produit);
                    
                }
                foreach ($produits as $data) {
                        
                ?> 
            
                    <tr>
                        <td> <?php echo $data['id']?> </td>
                        <td><?php echo $data['nom']?></td>
                        <td><img width='50px' src="<?php  echo $data['image']?>"></td>
                        <td><?php echo $data['prix']?></td>
                    </tr>
                    
                <?php } ?>
            </tbody>
            </table>

    
</body>
</html>

<?php

require("../config/instance.php");

?>

<?php
    $valider_btn = isset($_GET['valider_btn']);

    if(!empty($valider_btn)){
        $id_produit = $_GET['id_produit'];
        
        $produit->supprimer_produit($id_produit);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form-style.css">
    <title>Page Supprimer</title>
</head>
<body>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <h1>Supprimer un produit</h1>
        <div class="separation"></div>
        <input type="text" name="id_produit" id="id_produit">

        <div class="pied-formulaire">
            <input type="submit" value="Valider" name='valider_btn'>
        </div>
    </form>
    
</body>
</html>

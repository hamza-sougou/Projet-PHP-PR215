<?php

require("../config/instance.php");

?>

<?php
    $valider_btn = isset($_GET['valider_btn']);

    if(!empty($valider_btn)){
        $image = $_GET['image'];
        $nom = $_GET['nom'];
        $prix = $_GET['prix'];
        $desc = $_GET['desc'];
        // echo $desc;
        
        $produit->ajouter_produit($image,$nom,$prix,$desc);
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
    <title>Page Ajout</title>
</head>
<body>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <h1>Ajouter un produit</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label>Titre de l'image</label>
                    <input name="image" type="text" required>
                </div>
                <div class="groupe">
                    <label>Nom du produit</label>
                    <input name="nom" type="text" required>
                </div>
                <div class="groupe">
                    <label>Prix</label>
                    <input name="prix" type="text" required>
                </div>

            </div>
            <div class="droite">
                <div class="groupe">
                    <label>Description</label>
                    <textarea name="desc" required></textarea>
                </div>
            </div>
        </div>

        <div class="pied-formulaire">
            <input type="submit" value="Valider" name='valider_btn'>
        </div>
    </form>
    
</body>
</html>

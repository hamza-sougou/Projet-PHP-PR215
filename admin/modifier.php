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
        echo $desc;
        
        $produit->ajouter_produit($image,$nom,$prix,$desc);
    }
// if(empty(isset($_GET['valider_btn'])))
// {
//     if(isset($_GET["image"]) AND isset($_GET["nom"]) AND isset($_GET["prix"]) AND isset($_GET["desc"]))
//     {
//         if(!empty($_GET["image"]) AND !empty($_GET["nom"]) AND !empty($_GET["prix"]) AND !empty($_GET["desc"]))
//         {
//             $image = htmlspecialchars(strip_tags($_GET['image']));
//             $nom = htmlspecialchars(strip_tags($_GET['nom']));
//             $prix = htmlspecialchars(strip_tags($_GET['prix']));
//             $desc = htmlspecialchars(strip_tags($_GET['desc']));
//             echo $image;

            

//             try
//             {
//                 ajouter($image, $nom, $prix, $desc);
//             }
//             catch (Exception $e)
//             {
//                 $e->getMessage();
//             }

//         }
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="form-style.css">
    <title>Page Modifier</title>
</head>
<body>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <h1>Ajouter un produit</h1>
        <div class="separation"></div>
        <div class="corps-formulaire">
            <div class="gauche">
                <div class="groupe">
                    <label  required>Titre de l'image</label>
                    <input name="image" type="text">
                </div>
                <div class="groupe">
                    <label  required>Nom du produit</label>
                    <input name="nom" type="text">
                </div>
                <div class="groupe">
                    <label  required>Prix</label>
                    <input name="prix" type="text">
                </div>

            </div>
            <div class="droite">
                <div class="groupe">
                    <label  required>Description</label>
                    <textarea name="desc"></textarea>
                </div>
            </div>
        </div>

        <div class="pied-formulaire">
            <input type="submit" value="Valider" name='valider_btn'>
        </div>
    </form>
    
</body>
</html>

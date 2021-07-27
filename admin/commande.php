<?php

require("../config/instance.php");
    if(isset($_GET['accepter'])){
        $modCommande = $commande->commande_fini($_GET['accepter']);
    }
    if(isset($_GET['refuser'])){
        $modCommande = $commande->commande_refuse($_GET['refuser']);
    }
    
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
    <title>Page Commande</title>
</head>
<body>



    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <h1>Recherchez Une commande</h1>
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
                    <th>nom Client</th>
                    <th>Produit</th>
                    <th>Status</th>
                    <th>image</th>
                    <th>prix</th>
                    <th>Refuser</th>
                    <th>Accepter</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $valider_btn = isset($_GET['valider_btn']);
                $commandes= $commande->afficher_commande();
                $row =0;

                if(!empty($valider_btn)){
                    global $commandes;
                    $id_produit = $_GET['id_produit'];
                    $commandes = $commande->afficher_commande_id($id_produit);
                    
                }
                foreach ($commandes as $data) {
                        
                ?> 
            
                    <tr>
                        <td> <?php echo $data['id']?> </td>
                        <td><?php echo $data['nomClient']?></td>
                        <td><?php echo $data['nomProduit']?></td>
                        <td><?php echo $data['status']?></td>
                        <td><img width='50px' src="<?php  echo $data['img']?>"></td>
                        <td><?php echo $data['prix']?></td>
                        <td style="text-align:center"><a href='./commande.php?refuser=<?php echo $data['id'] ?>'> <svg style="color:red !important; height:30px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path></svg> </a></td>
                        <td style="text-align:center"><a href='./commande.php?accepter=<?php echo $data['id'] ?>'> <svg style="color:green !important; height:30px;" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" class="svg-inline--fa fa-check fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M173.898 439.404l-166.4-166.4c-9.997-9.997-9.997-26.206 0-36.204l36.203-36.204c9.997-9.998 26.207-9.998 36.204 0L192 312.69 432.095 72.596c9.997-9.997 26.207-9.997 36.204 0l36.203 36.204c9.997 9.997 9.997 26.206 0 36.204l-294.4 294.401c-9.998 9.997-26.207 9.997-36.204-.001z"></path></svg> </a></td>
                    </tr>
                    
                <?php } ?>
            </tbody>
            </table>

    
</body>
</html>

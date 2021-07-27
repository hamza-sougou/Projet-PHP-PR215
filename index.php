<?php

    require('./config/instance.php');

 $produits=$produit->afficher_produit();

 if(isset($_GET['commander'])){
     if(isset($_COOKIE['id'])){
         $newCommande = $commande->ajouter_commande($_COOKIE['id'],$_GET['id_produit']);
         header('location:./');
     }else{
         header('location:connection.php');
     }
 }

?>

<!DOCTYPE html>
<html lang="en">
<?php
    include_once('./head.php')
?>
<body>

    <?php
        include_once('./header.php');
    ?>

<!-- --------catégories-------- -->

<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col-3">
            <img src="images/haut.jpg">
        </div>
        <div class="col-3">
            <img src="images/bas.jpg" >
        </div>
        <div class="col-3">
            <img src="images/hoodie.png">
        </div>
    </div>
</div>
</div>

<!-- --------produits-------- -->
<h2 class="title">Nos Produits</h2>
<div class="small-container productGrid">
<?php foreach($produits as $produit): ?> 


    
    <div class="row">
        <a href='./index.php?commander=true&id_produit=<?php echo $produit['id'] ?>' class="col-4">
            <img src="<?= $produit['image'] ?>">
            <h4><?= $produit['nom'] ?></h4>

            <p><?= substr ($produit['description'], 0, 200)  ?></p>

            <button type="button" class="acherteBtn">Acheter</button>
            
            <small><?= $produit['prix'] ?> FCFA</small>
        </a>
    </div>
         <?php endforeach; ?> 
         </div>

<!--------------- avis ---------------->

<div class="avis">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui animi officiis mollitia ducimus? Vitae earum magnam 
                    recusandae ducimus
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user1.png">
                <h3>Djibril Thiam</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui animi officiis mollitia ducimus? Vitae earum magnam 
                    recusandae ducimus
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user2.jpg">
                <h3>Aïssa Diakhaté</h3>
            </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui animi officiis mollitia ducimus? Vitae earum magnam 
                    recusandae ducimus
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <img src="images/user3.png">
                <h3>Cédric Diouf</h3>
            </div>
        </div>
    </div>
</div>




<!----------------------- Footer --------------------->
<?php
include_once('./footer.php');
?>

<!--------------------- JS pour le menu --------------------->

<script>
    var menuItems = document.getElementById("menuItems");

    menuItems.style.maxHeight = "0px";

    function menuToggle()
    {
        if(menuItems.style.maxHeight == "0px")
        {
            menuItems.style.maxHeight = "200px";
        }
        else
        {
            menuItems.style.maxHeight = "0px";
        }
    }
</script>

</body>
</html>
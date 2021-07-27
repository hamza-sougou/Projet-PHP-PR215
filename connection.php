<?php

require('./config/instance.php');
	if(isset($_GET['deconnexion'])){
		setcookie('nom',"",time()-3600);
		setcookie('mail',"",time()-3600);
		setcookie('id',"",time()-3600);
		header('Location:connection.php');

	}
 $produits=$produit->afficher_produit();
 $connection = null;
 if(isset($_POST['connection'])){
	 $conClient = $client->connection($_POST['email'],$_POST['password']);
	 if(!is_iterable($conClient)){
		$connection = false;
		$conClient = array();

	}else{
		$connection = true;
	}
	if($connection && is_iterable($conClient)){

		$nom = $conClient['nom'];
		$mail = $conClient['mail'];
		$id = $conClient['id'];
		setcookie('nom',"$nom");
		setcookie('mail',"$mail");
		setcookie('id',"$id");
		header('Location:index.php');
	}else{
	}
 }
 if(isset($_POST['inscription'])){
	 $conClient = $client->ajouter_client($_POST['nom'], $_POST['email'],$_POST['password']);
	 if(!is_iterable($conClient)){
		$connection = false;
	}else{
		$connection = true;
		$conClient = array();

	}
	if($connection && is_iterable($conClient)){
		$nom = $conClient['nom'];
		$mail = $conClient['mail'];
		$id = $conClient['id'];
		setcookie('nom',"$nom");
		setcookie('mail',"$mail");
		setcookie('id',"$id");
		header('Location:index.php');
		echo 'asdsa';
	}else{
		echo 'false';
	}
 }
 

?>

<!DOCTYPE html>
<html lang="en">
<?php
    include_once('./head.php');
?>
<body>
<?php
    include_once('header.php');
?>
<div class='container'>
	<div class='row'>
		<div class='col-6'>
			<form action="" method="post" enctype="multipart/form-data" class='form-control col-6'>
				<h2>Connex ion</h2>
				<div class='form-group'>
					<label>Adresse Mail</label>
					<input type="email" name="email" id="email" class='form-control'>
				</div>
				<div class='form-group'>
					<label>Mot de passe</label>
					<input type="password" name="password" id="password" class='form-control'>
				</div>
				<div class='form-group'>
					<input type="submit" value="Connection" name='connection' class='btn btn-primary'>
				</div>
			
			</form>
		</div>
		<div class='col-6'>
			<form action="" method="post" enctype="multipart/form-data" class='form-control col-6'>
				<h2>Inscription</h2>
				<div class='form-group'>
					<label>Nom Complet</label>
					<input type="text" name="nom" id="nom" class='form-control'>
				</div>
				<div class='form-group'>
					<label>Adresse Mail</label>
					<input type="email" name="email" id="email" class='form-control'>
				</div>

				
				<div class='form-group'>
					<label>Mot de passe</label>
					<input type="password" name="password" id="password" class='form-control'>
				</div>
				<div class='form-group'>
					<input type="submit" value="Inscription" name='inscription' class='btn btn-primary'>
				</div>
			
			</form>
		</div>
		<h2>
			<?php
			if($connection == null && (isset($_POST['inscription']) || isset($_POST['connection']))){?>
				<script>
					alert("Veuillez remplir tous les champs.");
				</script>
			<?php } ?>

		</h2>
		
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
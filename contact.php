
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin/form-style.css">
    <title>Contact</title>
</head>
<?php
    include_once('./head.php');
?>
<body style="width: 100vw;padding: 0;margin: 0;height: 100vh;">

    <?php
        include_once('./header.php');
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <h1>Contactez-nous!</h1>
        <div class="separation"></div>
            <div class="corps-formulaire">
                <div class="gauche">
                    <div class="groupe">
                    <label>Prénom</label>
                    <input type="text" required>
                    </div>
                    <div class="groupe">
                    <label>Adresse e-mail</label>
                    <input type="email" required>
                    </div>
                    <div class="groupe">
                    <label>Téléphone</label>
                    <input type="number" required>
                    </div>

            </div>
            <div class="droite">
                <div class="groupe">
                    <label>Message</label>
                    <textarea required></textarea>
                </div>
            </div>
        </div>

        <div class="pied-formulaire">
            <input type="submit" value="Valider" name='valider_btn'>
        </div>
    </form>

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
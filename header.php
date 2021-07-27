
    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="images/trash-logo.png" width="125px">
        </div>
        <nav>
            <ul id="menuItems">
                <li><a href="./">Accueil</a></li>
                <li><a href="./contact.php">Contact</a></li>
                <li><a href="./connection.php">Mon Compte</a></li>
                <?php
                    if(isset($_COOKIE['id'])){?>
                <li><a href="./connection.php?deconnexion=true">Deconnexion</a></li>
                <?php } ?>
            </ul>
        </nav>
        <img src="images/cart.png" width="30px" height="30px">
        <img src="images/menu-icon.png" class="menu-icon"
        onclick="menuToggle()">
    </div>
</div>
</div>

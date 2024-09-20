<?php
session_start();
require_once "./inc/header.php";
if (!isset($_SESSION["user"])) {
    header("Location: connexion.php");
} else { ?>
        <div class="container">
            <div>
                <h1>Bienvenue sur le site de la bibliotheque</h1>
            </div>
            <div>
                <button><a href="<?= $_SERVER['DOCUMENT_ROOT']; ?>/connexion.php">Connexion</a></button>
                <button><a href="http://localhost/bibliotheque/register.php">Inscription</a></button>
            </div>
        </div>

<?php } ?>

<?php
require_once "inc/footer.php";
?>
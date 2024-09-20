    <nav>
        <ul>
            <li><a href="http://localhost/bibliotheque/" id="biblio">BIBLIOTHEQUE</a></li>
        </ul>
        <ul>
            <?php if (isset($_SESSION["membres"])) { ?>
                <nav>
                    <ul>
                        <form id="decoForm" method="POST">
                            <button class="deconnexion" name="deconnexion">Déconnexion</button>

                        </form>
                    </ul>
                </nav>
            <?php } else { ?>
                <nav>
                    <ul>
                        <button class="deconnexion"><a
                                href="http://localhost/bibliotheque/connexion.php">Connexion</a></button>
                        <li><a href="http://localhost/bibliotheque/register.php">Inscription</a></li>
                    </ul>
                </nav>
            <?php } ?>
        </ul>
    </nav>


    <?php

    if (isset($_POST["deconnexion"])) {
        session_destroy();
        header("Location: http://localhost/bibliotheque/connexion.php");
    }

    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <meta charset="UTF-8">
    <title>Edition d'un article</title>
    <!-- Ajout du .js pour le toggle -->
    <script type="text/javascript" src='https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'></script>
</head>
<body>
<?php require_once "vue/menu_admin.php"; ?>
<section>
    <?php if($affiche_modif) {
        ?>
        <article>
            <h2>Modifier un article</h2>
            <p>

            <form name="edition" method="POST" action="">
                <label>Titre</label>
                <input name="letitre" type="text" value="<?= $recup_recette['titre'] ?>" required/><br/>
                <label>Contenu de l'article</label>
                <textarea name="ladesc" required><?= nl2br($recup_recette['ladesc']) ?></textarea><br/>
                <label>Date de publication</label>
                <input name="ladate" type="datetime" value="<?= $recup_recette['ladate'] ?>" required/><br/>
                <label>Pays</label>

                <select name="id_pays" required>

                    <?php
                    // variable vide qui n'affichera donc rien tant qu'elle le reste

                    while ($affiche = $requetepays->fetch(PDO::FETCH_ASSOC)) {
                        $choix_pays = "";
                        if ($affiche['idchoicepays'] == $recup_recette['idpays']) {
                            $choix_pays = "selected";
                        }
                        // affichage de la variable contenant selected ou du vide
                        echo "<option value='" . $affiche['idchoicepays'] . "' $choix_pays>" . $affiche['lintitule'] . "</option>";
                        // si la variable a été remplie, on la vide (1 choix possible)
                        $choix_pays = "";
                    } ?>
                </select>

                <input type="submit" name="edition" value='Modifier la recette'/>
            </form>

            </p>
        </article>
        <?php
    }

        if($affiche_success){?>
            <h2>essai affichage insertion réussie</h2>
            <p>Good job <?=$_SESSION['login']?>!</p>
        <?php
    }?>

</section>
<script>/* <![CDATA[ */
    /*
     |-----------------------------------------------------------------------
     |  jQuery Multiple Toggle Script by Matt - www.skyminds.net
     |-----------------------------------------------------------------------
     |
     | Affiche et cache le contenu de blocs multiples. Bloc après le texte.
     |
     */
    jQuery(document).ready(function() {
        $(".more").hide();
        jQuery('.button-read-more').click(function () {
            $(this).closest('.less').addClass('active');
            $(this).closest(".less").next().stop(true).slideDown("1000");
        });
        jQuery('.button-read-less').click(function () {
            $(this).closest('.less').removeClass('active');
            $(this).closest(".less").next().stop(true).slideUp("1000");
        });
    });
    /* ]]> */ </script>
</body>
</html>
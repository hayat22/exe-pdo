<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="vue/img/favicon.ico"/>
    <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
    <title>Contact</title>
</head>
<body>
<?php require_once "vue/menu.php"; ?>
<section>
    <article>
        <h2>Nous contacter</h2>
        <p>
            <?php
            if(isset($message)){
                echo $message;
            }else{
            ?>
        <form name="contact" method="post" action="">
            <label>Votre nom</label>
            <input type="text" name="lenom" required /><br/>
            <label>Votre adresse e-mail</label>
            <input type="email" name="lemail" required /><br/>
            <label>Votre message</label>
            <textarea name="letexte" required ></textarea><br/>
            <input type="submit" value='Envoyer le mail'/>
        </form>
        <?php
        }
        ?>
        </p>
    </article>
</section>
<?php
include"vue/footer.php";
?>
</body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <title>Page de traitement</title>
        <meta charset="utf-8">
    </head>
    <body>
        <p>Dans le formulaire précédent, vous avez fourni les
        informations suivantes :</p>
        
        <?php
            echo 'sanchez_shirt : '.$_POST["sanchez_shirt"].'<br>';
            echo 'salas_shirt : ' .$_POST["salas_shirt"].'<br>';
            echo 'medel_shirt : ' .$_POST["medel_shirt"].'<br>';
        ?>
    </body>
</html>
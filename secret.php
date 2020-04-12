<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>page nasa</title>


</head>
<body>
<?php
    if ($_POST['mot_de_pass'] == 'kangourou'){
        echo '<h1>Vous voici sur la page secret de la nasa</h1>';

    }else{

       echo '<h1>Le  mot de passs est incorrecte l\'accès est refuser.</h1>';
   }
    ?>

</body>
</html>
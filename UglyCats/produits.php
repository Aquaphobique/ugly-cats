<?php
require './header.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles">
    <title>ugly cats</title>
</head>
<body>
    <div class="page"><h1>Nos chats :</h1>
    <img src="./images/chat<?php echo $chat['id'];?> " alt="",class="adresse">



    <bouton><a class="txtB">Précédent</a></bouton>
    <bouton><a class="txtB">Séléctionner</a></bouton>
    <bouton><a class="txtB">Suivant</a></bouton>
    <p></p>
    <bouton><a href="./formulaire.php" class="txtB">Payer</a></bouton>
    </div>


    
</body>
</html>
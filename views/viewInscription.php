<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Inscription</h1>
    C'est gratuit (et ca le restera toujours)<br>

    <form method="post" action="traitement.php">
            
            <input type="text" name="prenom" id="prenom" placeholder="prénom">
            <input type="text" name="nom" id="nom" placeholder="Nom de famille"><br>
            <input type="text" name="tel1" id="tel1" placeholder="Numéro de mobile ou email" required><br>
            <input type="text" name="tel2" id="tel2" placeholder="confirmer numéro de mobile ou email" required><br>
            <input type="password" name="pass" id="pass" placeholder="Nouveau mot de passe" required><br><br>


            Date de naissance<br><br>
            <input type="date" name="naidsance" id="naissance"><br><br>

            


            <input type="radio" name="sexe" value="F" id="femme">
            <label for="femme"> Femme </label>
            <input type="radio" name="sexe" value="H" id="homme" checked>
            <label for="homme"> Homme </label><br><br>
            

            
            <input type="submit" value="Inscription">
        </form>

    
</body>
</html>
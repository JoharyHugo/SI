<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Formulaire</title>
</head>
<body>
<form action="traitement/traitement.php" method="get">
    <center><h1>Formulaire</h1></center>
        <label for="nom">Nom Societe:</label>
        <input type="text" name="nom" id="nom">
        <br><br>
        <label for="objet">Objet:</label>
        <input type="text" name="objet" id="objet">
        <br><br>
        <label for="Siege">Siege:</label>
        <input type="text" name="Siege" id="Siege">
        <br><br>
        <label for="adresse">Adresse Societe:</label>
        <input type="text" name="adresse" id="adresse">
        <br><br>
        <label for="logo">logo:</label>
        <input type="file" name="logo" id="logo">
        <br><br>
        <label for="dirigeant">Nom Dirigeant:</label>
        <input type="text" name="dirigeant" id="dirigeant">
        <br><br>
        <label for="fiscal">Identification_Fiscal:</label>
        <input type="number" name="fiscal" id="fiscal">
        <br><br>
        <label for="statistique">Statistique:</label>
        <input type="number" name="statistique" id="statistique">
        <br><br>
        <label for="registre">Registre Commercial:</label>
        <input type="number" name="registre" id="registre">
        <br><br>
        <label for="status">Status:</label>
        <input type="file" name="status" id="status">
        <br><br>
        <label for="debut">Debut_exercice:</label>
        <input type="date" name="debut" id="debut">
        <br><br>
        <label for="devise">Devise_Compte:</label>
       <select name="devise" id="devise">
        <option value="">--Selection--</option>
        <option value="Ar">Ar</option>
        <option value="Dollar">Dollar</option>
       </select>
        <br><br>
        <label for="equivalence">Devise_Equivalence:</label>
        <select name="equivalence" id="equivalence">
        <option value="">--Selection--</option>
        <option value="Ar">Ar</option>
        <option value="Dollar">Dollar</option>
       </select>>
        <br><br>
        <input type="submit" value="Valider">
        <a href="page/tableau.php">voir table</a>
    </form>
    <br><br>
  
</body>
</html>

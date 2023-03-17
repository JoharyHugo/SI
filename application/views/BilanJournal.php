<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Journal</title>
</head>
<body>
<form action="#" method="post" style="margin-top: 100px;">
            <center><h1>Journal</h1></center>
            <label for="type">Jour:</label>
            <input type="number" name="jour" id="jour">
            <br><br>    
            <label for="numero">numero de piece:</label>
            <input type="number" name="numero" id="numero">
            <br><br>    
            <label for="pieceReference">Reference piece :</label>
            <input type="text" name="piece" id="piece">
            <br><br>
            <label for="compte">Numero compte :</label>
            <input type="text" name="compte" id="compte">
            <br><br>
            <label for="pieceReference">Numero compte tiers :</label>
            <input type="text" name="tiers" id="tiers">
            <br><br>
            <label for="Libelle ">Libelle ecriture</label>
            <input type="text" name="libelle" id="libelle">
            <br><br>
            <label for="pieceReference">Devise :</label>
            <input type="number" name="devise" id="devise">
            <br><br>
            <label for="pieceReference">Debit:</label>
            <input type="number" name="debit" id="debit">
            <br><br>
            <label for="pieceReference">Credit:</label>
            <input type="number" name="credit" id="credit">
            <br><br>
            <input type="submit" value="Valider">
    </form>
    <a href="<?php echo site_url('welcome/grandLivre');?>">voir grand livre</a>
    <br/>
    <br/>
    <a href="<?php echo site_url('welcome/balance');?>">voir la balance</a>
</body>
</html>




















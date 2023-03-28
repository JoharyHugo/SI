<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Plan Comptable</title>
</head>
<body style="background-image: url(<?php echo base_url("assets/images/image.jpg"); ?>) ; background-repeat: no-repeat; background-size: 100% auto; ">
<form action="<?php echo site_url('planComptable/modifierCompte'); ?>" method="post" style="margin-top: 100px;">
            <center><h1>Plan Comptable</h1></center>
            <input type="hidden" name="id" id="id" value="<?php echo $datas['id']; ?>">
            <br><br> 
            <label for="numero">numero:</label>
            <input type="text" name="numero" id="numero" value="<?php echo $datas['Numero']; ?>">
            <br><br>    
            <label for="intitule">nom :</label>
            <input type="text" name="nom" id="nom" value="<?php echo $datas['Nom']; ?>"> 
            <br><br>
            <input type="submit" value="Modifier">
    </form>
    <a href="<?php echo site_url('planComptable/getAllComptables'); ?>">voir plus</a>
</body>
</html>
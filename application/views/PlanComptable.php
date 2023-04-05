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
    <form action="<?php echo site_url('planComptable/newPlanComptable'); ?>" method="post" style="margin-top: 180px; background-color:white;">
            <center><h1>Plan Comptable</h1></center>
            <label for="numero">numero:</label>
            <input type="number" name="numero" id="numero">
            <br><br>    
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom">
            <br><br>
            <input type="submit" value="Valider">
            <a href="<?php echo site_url('planComptable/getAllComptables'); ?>" style="margin-top: 20px;">voir planComptable</a>
    </form>
    <form action="#" method="get" style="margin-top: 180px; background-color:white;">
    <center><h1>Plan Comptable avec CSV</h1></center>
    <label for="csv"> Votre CSV :</label>
    <input type="FILE" name="csv" id="csv">
    <input type="submit" value="Valider">
    </form>
</body>
</html>
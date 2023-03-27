<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Plan Tiers</title>
</head>
<body style="background-color: #0062cc;">
<form action="<?php echo site_url('planTiers/newPlanTiers'); ?>" method="post" style="margin-top: 150px; background-color: aqua;">
            <center><h1>Plan Tiers</h1></center>
            <label for="type">Type:</label>
            <input type="text" name="type" id="type">
            <br><br>    
            <label for="numero">numero:</label>
            <input type="text" name="numero" id="numero">
            <br><br>    
            <label for="intitule">Intitule :</label>
            <input type="text" name="intitule" id="intitule">
            <br><br>
            <input type="submit" value="Valider">
    </form>
    <a href="<?php echo site_url('planTiers/getAllTiers'); ?>">voir plus</a>
</body>
</html>
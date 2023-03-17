<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/styles.css"); ?>">
    <title>Plan Tiers</title>
</head>
<body>
<form action="<?php echo site_url('planTiers/updatePlanTiers'); ?>" method="post" style="margin-top: 100px;">
            <center><h1>Plan Tiers</h1></center>
            <input type="hidden" name="id" id="id" value="<?php echo $datas['id']; ?>">
            <br><br> 
            <label for="type">Type:</label>
            <input type="text" name="type" id="type" value="<?php echo $datas['Type']; ?>">
            <br><br>    
            <label for="numero">numero:</label>
            <input type="text" name="numero" id="numero" value="<?php echo $datas['Num']; ?>">
            <br><br>    
            <label for="intitule">Intitule :</label>
            <input type="text" name="intitule" id="intitule" value="<?php echo $datas['Intitule']; ?>"> 
            <br><br>
            <input type="submit" value="Modifier">
    </form>
    <a href="<?php echo site_url('planTiers/getAllTiers'); ?>">voir plus</a>
</body>
</html>